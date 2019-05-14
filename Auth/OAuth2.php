<?php

namespace TargetApi\Auth;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class OAuth2
{
    private $config = [];

    public function __construct(array $config)
    {
        $this->config = array_merge([
            'appId' => null,
            'appSecret' => null,
            'authorizationUri' => null,
        ], $config);
    }

    /**
     * Fetches the auth tokens based on the current state.
     *
     * @param ClientInterface $httpClient
     *
     * @return array the response
     */
    public function fetchAuthToken(ClientInterface $httpClient)
    {
        $response = $httpClient->send($this->generateCredentialsRequest());
        $credentials = $this->parseTokenResponse($response);

        return $credentials;
    }

    /**
     * Parses the fetched tokens.
     *
     * @param Response $resp the response
     *
     * @throws \Exception
     *
     * @return array the tokens parsed from the response body
     */
    public function parseTokenResponse(Response $resp)
    {
        $body = (string) $resp->getBody();

        // Assume it's JSON; if it's not throw an exception
        if (null === $res = json_decode($body, true)) {
            throw new \Exception('Invalid JSON response');
        }

        return $res;
    }

    /**
     * Generates a request for token credentials.
     *
     * @return RequestInterface the authorization Url
     */
    public function generateCredentialsRequest()
    {
        $uri = $this->config['authorizationUri'];
        if (null === $uri) {
            throw new \DomainException('No token credential URI was set.');
        }

        $headers = [
            'Cache-Control' => 'no-store',
            'Content-Type' => 'application/x-www-form-urlencoded',
        ];

        $params['grant_type'] = 'refresh_token';
        $params['refresh_token'] = $this->getRefreshToken();
        $this->addAppCredentials($params);

        return new Request(
            'POST',
            $uri,
            $headers,
            \GuzzleHttp\Psr7\build_query($params)
        );
    }

    /**
     * Gets the refresh token associated with the current access token.
     */
    public function getRefreshToken()
    {
        return $this->config['refresh_token'];
    }

    /**
     * Sets the refresh token associated with the current access token.
     *
     * @param $refreshToken
     */
    public function setRefreshToken($refreshToken)
    {
        $this->config['refresh_token'] = $refreshToken;
    }

    /**
     * @param array $params
     *
     * @return array
     */
    private function addAppCredentials(&$params)
    {
        $appId = $this->config['appId'];
        $appSecret = $this->config['appSecret'];

        if ($appId && $appSecret) {
            $params['client_id'] = $appId;
            $params['client_secret'] = $appSecret;
        }

        return $params;
    }
}
