<?php

namespace TargetApi\Resource;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Validator\Validation;
use TargetApi\Serializer\Normalizer\ArrayDenormalizer;
use TargetApi\Serializer\Normalizer\ObjectNormalizer;
use TargetApi\TargetApiException;
use TargetApi\TargetClient;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
abstract class AbstaractResource
{
    /**
     * @var string
     */
    private $rootUrl;
    /**
     * @var string
     */
    private $serviceName;
    /**
     * @var string
     */
    private $resourceName;
    /**
     * @var array
     */
    private $config;
    /**
     * @var TargetClient
     */
    private $client;

    /**
     * @var array
     */
    private $methods;
    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * @var \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    private $validator;

    /**
     * AbstaractResource constructor.
     *
     * @param TargetClient $client
     * @param string       $serviceName
     * @param string       $resourceName
     * @param array        $config
     */
    public function __construct(TargetClient $client, string $serviceName, string $resourceName, array $config)
    {
        $this->client = $client;
        $this->rootUrl = $client->getBasePath().$client->getApi();
        $this->serviceName = $serviceName;
        $this->resourceName = $resourceName;
        $this->config = $config;
        $this->methods = isset($config['methods']) ? $config['methods'] : [];
    }

    /**
     * @param string      $name
     * @param array       $parameters
     * @param null|object $post
     * @param null|string $contentType
     * @param bool        $validate
     *
     * @return object|string
     */
    public function call(string $name, array $parameters = [], object $post = null, string $contentType = null, $validate = true)
    {
        $this->checkValid($post);

        if (!isset($this->methods[$name])) {
            throw new \RuntimeException("Unknown function: {$this->serviceName}->{$this->resourceName}->{$name}()");
        }

        $method = $this->methods[$name];
        if (!isset($method['parameters'])) {
            $method['parameters'] = [];
        }

        foreach ($parameters as $k => $v) {
            if (!isset($method['parameters'][$k])) {
                throw new \RuntimeException("({$this->serviceName}->{$this->resourceName}->{$name}()) unknown parameter: '{$k}'");
            }
        }

        foreach ($method['parameters'] as $paramName => $paramSpec) {
            if (isset($paramSpec['required']) and $paramSpec['required'] and !isset($parameters[$paramName])) {
                throw new \RuntimeException("({$this->serviceName}->{$this->resourceName}->{$name}()) missing required param: '{$paramName}'");
            }

            if (isset($parameters[$paramName])) {
                $value = $parameters[$paramName];
                $parameters[$paramName] = $paramSpec;
                $parameters[$paramName]['value'] = $value;
                unset($parameters[$paramName]['required']);
            } else {
                unset($parameters[$paramName]);
            }
        }

        $url = $this->createRequestUri(
            $method['path'],
            $parameters
        );

        $request = new Request(
            $method['httpMethod'],
            $url,
            ['content-type' => $contentType ?? 'application/json'],
            $post ? $this->getSerializer()->serialize($post, 'json') : ''
        );

        $response = $this->client->execute($request);

        return $this->responseDeserialize($response, $method['responseModel'], $validate);
    }

    /**
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    private function getValidator()
    {
        if (!$this->validator) {
            $validatorBuilder = Validation::createValidatorBuilder();
            $validatorBuilder->enableAnnotationMapping();
            $this->validator = $validatorBuilder->getValidator();
        }

        return $this->validator;
    }

    /**
     * @param object $model
     *
     * @throws TargetApiException
     *
     * @return bool
     */
    private function checkValid(object $model = null)
    {
        if (null === $model) {
            return false;
        }
        $errors = $this->getValidator()->validate($model);

        if (!count($errors)) {
            return true;
        }

        $errorMessages = [];
        foreach ($errors as $error) {
            $property = $error->getPropertyPath();
            $msg = $error->getMessage();

            if ($error->getConstraint() instanceof \Symfony\Component\Validator\Constraints\Choice) {
                $msg .= sprintf('The value %s is not valid, the allowed values are (%s)', $error->getInvalidValue(), implode(', ', $error->getConstraint()->choices));
            }

            $errorMessages[] = sprintf('%s: %s', $property, $msg);
        }

        throw new TargetApiException(implode(PHP_EOL, $errorMessages));
    }

    /**
     * @return Serializer
     */
    private function getSerializer()
    {
        if (!$this->serializer) {
            $normalizer = [new ObjectNormalizer(null, new CamelCaseToSnakeCaseNameConverter(), null, new ReflectionExtractor()), new ArrayDenormalizer()];
            $this->serializer = new Serializer($normalizer, [new JsonEncoder()]);
        }

        return $this->serializer;
    }

    /**
     * @param Response    $response
     * @param null|string $responseModel
     * @param bool        $validate
     *
     * @throws TargetApiException
     *
     * @return object|string
     */
    private function responseDeserialize(Response $response, string $responseModel = null, $validate = true)
    {
        $contentType = $response->getHeader('Content-Type');

        if (null === $responseModel ||
            'application/json' !== $contentType[0] ||
            0 === $response->getBody()->getSize()) {
            return $response->getBody()->getContents();
        }

        $data = \GuzzleHttp\json_decode($response->getBody()->getContents(), true);

        if ($response->getStatusCode() >= 400) {
            if (!is_array($data)) {
                throw new TargetApiException($data);
            }

            if (array_key_exists('error', $data)) {
                if (is_string($data['error'])) {
                    throw new TargetApiException($data['error']);
                }

                throw new TargetApiException($data['error']['message']);
            }

            throw new TargetApiException('Произошла неизвестная ошибка');
        }

        if (!$validate) {
            return $data;
        }

        return $this->getSerializer()->denormalize($data, $responseModel, 'array');
    }

    /**
     * @param $restPath
     * @param $params
     *
     * @return mixed|string
     */
    private function createRequestUri($restPath, $params)
    {
        $requestUrl = rtrim($this->rootUrl, '/').'/'.ltrim($restPath, '/');

        $uriTemplateVars = [];
        $queryVars = [];

        foreach ($params as $paramName => $paramSpec) {
            if ('boolean' === $paramSpec['type']) {
                $paramSpec['value'] = $paramSpec['value'] ? 'true' : 'false';
            }
            if ('path' === $paramSpec['location']) {
                $uriTemplateVars['{'.$paramName.'}'] = $paramSpec['value'];
            } elseif ('query' === $paramSpec['location']) {
                if (is_array($paramSpec['value'])) {
                    foreach ($paramSpec['value'] as $value) {
                        $queryVars[] = $paramName.'='.rawurlencode(rawurldecode($value));
                    }
                } else {
                    $queryVars[] = $paramName.'='.rawurlencode(rawurldecode($paramSpec['value']));
                }
            }
        }

        if ($uriTemplateVars) {
            $requestUrl = str_replace(array_keys($uriTemplateVars), $uriTemplateVars, $requestUrl);
        }

        if ($queryVars) {
            $requestUrl .= '?'.implode($queryVars, '&');
        }

        return $requestUrl;
    }
}
