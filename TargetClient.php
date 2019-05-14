<?php

namespace TargetApi;

use GuzzleHttp\Client;
use Psr\Http\Message\RequestInterface;
use TargetApi\Auth\OAuth2;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class TargetClient
{
    const LIBVER = '2.0';
    const API_BASE_PATH = 'https://target.my.com/';
    const OAUTH2_TOKEN_URL = 'https://target.my.com/api/v2/oauth2/token.json';

    /**
     * @var \GuzzleHttp\ClientInterface
     */
    private $http;
    /**
     * @var array
     */
    private $config;

    /**
     * @var array access token
     */
    private $token;

    /**
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->config = array_merge(
            [
            'base_path' => self::API_BASE_PATH,
            'api' => '',
            'app_id' => '',
            'app_secret' => '',
            'client_name' => '',
            'agency_name' => '',
            'proxy_token' => '',
        ],
        $config
        );
    }

    /**
     * For backwards compatibility
     * alias for fetchAccessTokenWithRefreshToken.
     *
     * @param string $refreshToken
     *
     * @return array access token
     */
    public function refreshToken($refreshToken)
    {
        return $this->fetchAccessTokenWithRefreshToken($refreshToken);
    }

    /**
     * @param null $refreshToken
     *
     * @return array
     */
    public function fetchAccessTokenWithRefreshToken($refreshToken = null)
    {
        if (null === $refreshToken) {
            if (!isset($this->token['refresh_token'])) {
                throw new \LogicException(
                'refresh token must be passed in or set as part of setAccessToken'
            );
            }
            $refreshToken = $this->token['refresh_token'];
        }

        $auth = $this->getOAuth2Service();
        $auth->setRefreshToken($refreshToken);
        $creds = $auth->fetchAuthToken($this->getHttpClient());
        if ($creds && isset($creds['access_token'])) {
            $creds['created'] = time();
            if (!isset($creds['refresh_token'])) {
                $creds['refresh_token'] = $refreshToken;
            }
            $this->setAccessToken($creds);
        }

        return $creds;
    }

    /**
     * @return OAuth2
     */
    public function getOAuth2Service()
    {
        if (!isset($this->auth)) {
            $this->auth = $this->createOAuth2Service();
        }

        return $this->auth;
    }

    /**
     * @param array|string $token
     *
     * @throws \InvalidArgumentException
     */
    public function setAccessToken($token)
    {
        if (is_string($token)) {
            if ($json = json_decode($token, true)) {
                $token = $json;
            } else {
                $token = [
                        'access_token' => $token,
                    ];
            }
        }
        if (null === $token) {
            throw new \InvalidArgumentException('invalid json token');
        }
        if (!isset($token['access_token'])) {
            throw new \InvalidArgumentException('Invalid token format');
        }

        $this->token = $token;
    }

    /**
     * @return mixed
     */
    public function getAccessToken()
    {
        if (isset($this->token['access_token'])) {
            return $this->token['access_token'];
        }
    }

    /**
     * @return mixed
     */
    public function getRefreshToken()
    {
        if (isset($this->token['refresh_token'])) {
            return $this->token['refresh_token'];
        }
    }

    /**
     * Returns if the access_token is expired.
     *
     * @return bool returns True if the access_token is expired
     */
    public function isAccessTokenExpired()
    {
        if (!$this->token) {
            return true;
        }

        $created = 0;
        if (isset($this->token['created'])) {
            $created = $this->token['created'];
        }

        // If the token is set to expire in the next 30 seconds.
        return ($created + ($this->token['expires_in'] - 30)) < time();
    }

    public function authorize(Client $http = null)
    {
        if (null === $http) {
            $http = $this->getHttpClient();
        }

        return $http;
    }

    /**
     * @return string
     */
    public function getLibraryVersion()
    {
        return self::LIBVER;
    }

    /**
     * @return \GuzzleHttp\ClientInterface
     */
    public function getHttpClient(): \GuzzleHttp\ClientInterface
    {
        if (null === $this->http) {
            $this->http = $this->createDefaultHttpClient();
        }

        return $this->http;
    }

    /**
     * @param null|string $api
     */
    public function setApi($api = null)
    {
        $this->config['api'] = $api;
    }

    /**
     * @return null|string
     */
    public function getApi()
    {
        return $this->config['api'];
    }

    /**
     * @param null|string $basePath
     */
    public function setBasePath($basePath = null)
    {
        $this->config['base_path'] = $basePath;
    }

    /**
     * @return null|string
     */
    public function getBasePath()
    {
        return $this->config['base_path'];
    }

    /**
     * @param null|string $agencyName
     */
    public function setAgencyName($agencyName = null)
    {
        $this->config['agency_name'] = $agencyName;
    }

    /**
     * @return null|string
     */
    public function getAgencyName()
    {
        return $this->config['agency_name'];
    }

    /**
     * @param null|string $clientName
     */
    public function setClientName($clientName = null)
    {
        $this->config['client_name'] = $clientName;
    }

    /**
     * @return null|string
     */
    public function getClientName()
    {
        return $this->config['client_name'];
    }

    /**
     * @param null|string $token
     * @param null|mixed  $proxyToken
     */
    public function setProxyToken($proxyToken = null)
    {
        $this->config['proxy_token'] = $proxyToken;
    }

    /**
     * @return null|string
     */
    public function getProxyToken()
    {
        return $this->config['proxy_token'];
    }

    /**
     * Set the OAuth 2.0 App ID.
     *
     * @param string $appId
     */
    public function setAppId($appId)
    {
        $this->config['app_id'] = $appId;
    }

    public function getAppId()
    {
        return $this->config['app_id'];
    }

    /**
     * Set the OAuth 2.0 App Secret.
     *
     * @param string $appSecret
     */
    public function setAppSecret($appSecret)
    {
        $this->config['app_secret'] = $appSecret;
    }

    /**
     * @return mixed
     */
    public function getAppSecret()
    {
        return $this->config['app_secret'];
    }

    /**
     * @param RequestInterface $request
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function execute(RequestInterface $request)
    {
        $http = $this->authorize();

        if ($this->getAgencyName() && $this->getProxyToken()) {
            if ($this->getClientName()) {
                $request = $request->withHeader('X-TARGET-CLIENT', $this->getClientName());
            }
            $request = $request
                ->withHeader('X-TARGET-AGENCY', $this->getAgencyName())
                ->withHeader('X-AUTH-TOKEN', $this->getProxyToken());

            return $http->send($request);
        }

        if ($this->getAccessToken()) {
            $request = $request->withHeader('authorization', 'Bearer '.$this->getAccessToken());
        }

        return $http->send($request);
    }

    /**
     * create a default target auth object.
     */
    protected function createOAuth2Service()
    {
        $auth = new OAuth2(
        [
          'appId' => $this->getAppId(),
          'appSecret' => $this->getAppSecret(),
          'authorizationUri' => self::OAUTH2_TOKEN_URL,
        ]
    );

        return $auth;
    }

    /**
     * @return \GuzzleHttp\Client
     */
    protected function createDefaultHttpClient(): \GuzzleHttp\Client
    {
        return new Client([
            'exceptions' => false,
            'base_uri' => $this->config['base_path'].$this->config['api'],
            'verify' => false,
        ]);
    }
}
