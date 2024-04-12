<?php
/**
 * TinglysningPtegningApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Resights API
 *
 * <img src=\"static/resights/resights-logo.png\" alt=\"Resights Logo\" style=\"position: absolute; top: 52px; right: 36px\" align=\"right\" width=\"240\"> <a href=\"/docs\">Swagger</a> | <a href=\"/redoc\">Redoc</a> <br> <br> <div><b>Welcome API 👋</b></div> <br>  <br>
 *
 * The version of the OpenAPI document: 2.0
 * Contact: mikkel@resights.dk
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * TinglysningPtegningApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TinglysningPtegningApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'getPaategningerByAliasId' => [
            'application/json',
        ],
        'getPaategningerByUuid' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getPaategningerByAliasId
     *
     * Get Paategninger By Alias Id
     *
     * @param  mixed $alias_id DokumentAliasIdentifikator (required)
     * @param  mixed $cancelled cancelled (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaategningerByAliasId'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return mixed|\OpenAPI\Client\Model\ResightsResponseModel
     */
    public function getPaategningerByAliasId($alias_id, $cancelled = null, string $contentType = self::contentTypes['getPaategningerByAliasId'][0])
    {
        list($response) = $this->getPaategningerByAliasIdWithHttpInfo($alias_id, $cancelled, $contentType);
        return $response;
    }

    /**
     * Operation getPaategningerByAliasIdWithHttpInfo
     *
     * Get Paategninger By Alias Id
     *
     * @param  mixed $alias_id DokumentAliasIdentifikator (required)
     * @param  mixed $cancelled (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaategningerByAliasId'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of mixed|\OpenAPI\Client\Model\ResightsResponseModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaategningerByAliasIdWithHttpInfo($alias_id, $cancelled = null, string $contentType = self::contentTypes['getPaategningerByAliasId'][0])
    {
        $request = $this->getPaategningerByAliasIdRequest($alias_id, $cancelled, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('mixed' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('mixed' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'mixed', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = 'mixed';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'mixed',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation getPaategningerByAliasIdAsync
     *
     * Get Paategninger By Alias Id
     *
     * @param  mixed $alias_id DokumentAliasIdentifikator (required)
     * @param  mixed $cancelled (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaategningerByAliasId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaategningerByAliasIdAsync($alias_id, $cancelled = null, string $contentType = self::contentTypes['getPaategningerByAliasId'][0])
    {
        return $this->getPaategningerByAliasIdAsyncWithHttpInfo($alias_id, $cancelled, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPaategningerByAliasIdAsyncWithHttpInfo
     *
     * Get Paategninger By Alias Id
     *
     * @param  mixed $alias_id DokumentAliasIdentifikator (required)
     * @param  mixed $cancelled (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaategningerByAliasId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaategningerByAliasIdAsyncWithHttpInfo($alias_id, $cancelled = null, string $contentType = self::contentTypes['getPaategningerByAliasId'][0])
    {
        $returnType = 'mixed';
        $request = $this->getPaategningerByAliasIdRequest($alias_id, $cancelled, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getPaategningerByAliasId'
     *
     * @param  mixed $alias_id DokumentAliasIdentifikator (required)
     * @param  mixed $cancelled (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaategningerByAliasId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPaategningerByAliasIdRequest($alias_id, $cancelled = null, string $contentType = self::contentTypes['getPaategningerByAliasId'][0])
    {

        // verify the required parameter 'alias_id' is set
        if ($alias_id === null || (is_array($alias_id) && count($alias_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $alias_id when calling getPaategningerByAliasId'
            );
        }



        $resourcePath = '/api/v2/tinglysning/paategning/aliasid/{alias_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $cancelled,
            'cancelled', // param base name
            'mixed', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($alias_id !== null) {
            $resourcePath = str_replace(
                '{' . 'alias_id' . '}',
                ObjectSerializer::toPathValue($alias_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getPaategningerByUuid
     *
     * Get Paategninger By Uuid
     *
     * @param  mixed $uuid uuid (required)
     * @param  mixed $cancelled cancelled (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaategningerByUuid'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return mixed|\OpenAPI\Client\Model\ResightsResponseModel
     */
    public function getPaategningerByUuid($uuid, $cancelled = null, string $contentType = self::contentTypes['getPaategningerByUuid'][0])
    {
        list($response) = $this->getPaategningerByUuidWithHttpInfo($uuid, $cancelled, $contentType);
        return $response;
    }

    /**
     * Operation getPaategningerByUuidWithHttpInfo
     *
     * Get Paategninger By Uuid
     *
     * @param  mixed $uuid (required)
     * @param  mixed $cancelled (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaategningerByUuid'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of mixed|\OpenAPI\Client\Model\ResightsResponseModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaategningerByUuidWithHttpInfo($uuid, $cancelled = null, string $contentType = self::contentTypes['getPaategningerByUuid'][0])
    {
        $request = $this->getPaategningerByUuidRequest($uuid, $cancelled, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('mixed' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('mixed' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'mixed', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = 'mixed';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'mixed',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation getPaategningerByUuidAsync
     *
     * Get Paategninger By Uuid
     *
     * @param  mixed $uuid (required)
     * @param  mixed $cancelled (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaategningerByUuid'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaategningerByUuidAsync($uuid, $cancelled = null, string $contentType = self::contentTypes['getPaategningerByUuid'][0])
    {
        return $this->getPaategningerByUuidAsyncWithHttpInfo($uuid, $cancelled, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPaategningerByUuidAsyncWithHttpInfo
     *
     * Get Paategninger By Uuid
     *
     * @param  mixed $uuid (required)
     * @param  mixed $cancelled (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaategningerByUuid'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaategningerByUuidAsyncWithHttpInfo($uuid, $cancelled = null, string $contentType = self::contentTypes['getPaategningerByUuid'][0])
    {
        $returnType = 'mixed';
        $request = $this->getPaategningerByUuidRequest($uuid, $cancelled, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getPaategningerByUuid'
     *
     * @param  mixed $uuid (required)
     * @param  mixed $cancelled (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaategningerByUuid'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPaategningerByUuidRequest($uuid, $cancelled = null, string $contentType = self::contentTypes['getPaategningerByUuid'][0])
    {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $uuid when calling getPaategningerByUuid'
            );
        }



        $resourcePath = '/api/v2/tinglysning/paategning/uuid/{uuid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $cancelled,
            'cancelled', // param base name
            'mixed', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($uuid !== null) {
            $resourcePath = str_replace(
                '{' . 'uuid' . '}',
                ObjectSerializer::toPathValue($uuid),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}