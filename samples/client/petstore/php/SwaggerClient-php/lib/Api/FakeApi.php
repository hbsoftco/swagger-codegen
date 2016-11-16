<?php
/**
 * FakeApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Swagger Petstore
 *
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 *
 * OpenAPI spec version: 1.0.0
 * Contact: apiteam@swagger.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * FakeApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FakeApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('http://petstore.swagger.io/v2');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return FakeApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation testClientModel
     *
     * To test \"client\" model
     *
     * @param \Swagger\Client\Model\Client $body client model (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Client
     */
    public function testClientModel($body)
    {
        list($response) = $this->testClientModelWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation testClientModelWithHttpInfo
     *
     * To test \"client\" model
     *
     * @param \Swagger\Client\Model\Client $body client model (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Client, HTTP status code, HTTP response headers (array of strings)
     */
    public function testClientModelWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling testClientModel');
        }
        // parse inputs
        $resourcePath = "/fake";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Client',
                '/fake'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Client', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Client', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation testEndpointParameters
     *
     * Fake endpoint for testing various parameters 假端點 偽のエンドポイント 가짜 엔드 포인트
     *
     * @param float $number None (required)
     * @param double $double None (required)
     * @param string $pattern_without_delimiter None (required)
     * @param string $byte None (required)
     * @param int $integer None (optional)
     * @param int $int32 None (optional)
     * @param int $int64 None (optional)
     * @param float $float None (optional)
     * @param string $string None (optional)
     * @param string $binary None (optional)
     * @param \DateTime $date None (optional)
     * @param \DateTime $date_time None (optional)
     * @param string $password None (optional)
     * @param string $callback None (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function testEndpointParameters($number, $double, $pattern_without_delimiter, $byte, $integer = null, $int32 = null, $int64 = null, $float = null, $string = null, $binary = null, $date = null, $date_time = null, $password = null, $callback = null)
    {
        list($response) = $this->testEndpointParametersWithHttpInfo($number, $double, $pattern_without_delimiter, $byte, $integer, $int32, $int64, $float, $string, $binary, $date, $date_time, $password, $callback);
        return $response;
    }

    /**
     * Operation testEndpointParametersWithHttpInfo
     *
     * Fake endpoint for testing various parameters 假端點 偽のエンドポイント 가짜 엔드 포인트
     *
     * @param float $number None (required)
     * @param double $double None (required)
     * @param string $pattern_without_delimiter None (required)
     * @param string $byte None (required)
     * @param int $integer None (optional)
     * @param int $int32 None (optional)
     * @param int $int64 None (optional)
     * @param float $float None (optional)
     * @param string $string None (optional)
     * @param string $binary None (optional)
     * @param \DateTime $date None (optional)
     * @param \DateTime $date_time None (optional)
     * @param string $password None (optional)
     * @param string $callback None (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function testEndpointParametersWithHttpInfo($number, $double, $pattern_without_delimiter, $byte, $integer = null, $int32 = null, $int64 = null, $float = null, $string = null, $binary = null, $date = null, $date_time = null, $password = null, $callback = null)
    {
        // verify the required parameter 'number' is set
        if ($number === null) {
            throw new \InvalidArgumentException('Missing the required parameter $number when calling testEndpointParameters');
        }
        if (($number > 543.2)) {
            throw new \InvalidArgumentException('invalid value for "$number" when calling FakeApi.testEndpointParameters, must be smaller than or equal to 543.2.');
        }
        if (($number < 32.1)) {
            throw new \InvalidArgumentException('invalid value for "$number" when calling FakeApi.testEndpointParameters, must be bigger than or equal to 32.1.');
        }

        // verify the required parameter 'double' is set
        if ($double === null) {
            throw new \InvalidArgumentException('Missing the required parameter $double when calling testEndpointParameters');
        }
        if (($double > 123.4)) {
            throw new \InvalidArgumentException('invalid value for "$double" when calling FakeApi.testEndpointParameters, must be smaller than or equal to 123.4.');
        }
        if (($double < 67.8)) {
            throw new \InvalidArgumentException('invalid value for "$double" when calling FakeApi.testEndpointParameters, must be bigger than or equal to 67.8.');
        }

        // verify the required parameter 'pattern_without_delimiter' is set
        if ($pattern_without_delimiter === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pattern_without_delimiter when calling testEndpointParameters');
        }
        if (!preg_match("/^[A-Z].*_/", $pattern_without_delimiter)) {
            throw new \InvalidArgumentException("invalid value for \"pattern_without_delimiter\" when calling FakeApi.testEndpointParameters, must conform to the pattern /^[A-Z].*_/.");
        }

        // verify the required parameter 'byte' is set
        if ($byte === null) {
            throw new \InvalidArgumentException('Missing the required parameter $byte when calling testEndpointParameters');
        }
        if (!is_null($integer) && ($integer > 100.0)) {
            throw new \InvalidArgumentException('invalid value for "$integer" when calling FakeApi.testEndpointParameters, must be smaller than or equal to 100.0.');
        }
        if (!is_null($integer) && ($integer < 10.0)) {
            throw new \InvalidArgumentException('invalid value for "$integer" when calling FakeApi.testEndpointParameters, must be bigger than or equal to 10.0.');
        }

        if (!is_null($int32) && ($int32 > 200.0)) {
            throw new \InvalidArgumentException('invalid value for "$int32" when calling FakeApi.testEndpointParameters, must be smaller than or equal to 200.0.');
        }
        if (!is_null($int32) && ($int32 < 20.0)) {
            throw new \InvalidArgumentException('invalid value for "$int32" when calling FakeApi.testEndpointParameters, must be bigger than or equal to 20.0.');
        }

        if (!is_null($float) && ($float > 987.6)) {
            throw new \InvalidArgumentException('invalid value for "$float" when calling FakeApi.testEndpointParameters, must be smaller than or equal to 987.6.');
        }

        if (!is_null($string) && !preg_match("/[a-z]/i", $string)) {
            throw new \InvalidArgumentException("invalid value for \"string\" when calling FakeApi.testEndpointParameters, must conform to the pattern /[a-z]/i.");
        }

        if (!is_null($password) && (strlen($password) > 64)) {
            throw new \InvalidArgumentException('invalid length for "$password" when calling FakeApi.testEndpointParameters, must be smaller than or equal to 64.');
        }
        if (!is_null($password) && (strlen($password) < 10)) {
            throw new \InvalidArgumentException('invalid length for "$password" when calling FakeApi.testEndpointParameters, must be bigger than or equal to 10.');
        }

        // parse inputs
        $resourcePath = "/fake";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml; charset=utf-8', 'application/json; charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/xml; charset=utf-8', 'application/json; charset=utf-8']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($integer !== null) {
            $formParams['integer'] = $this->apiClient->getSerializer()->toFormValue($integer);
        }
        // form params
        if ($int32 !== null) {
            $formParams['int32'] = $this->apiClient->getSerializer()->toFormValue($int32);
        }
        // form params
        if ($int64 !== null) {
            $formParams['int64'] = $this->apiClient->getSerializer()->toFormValue($int64);
        }
        // form params
        if ($number !== null) {
            $formParams['number'] = $this->apiClient->getSerializer()->toFormValue($number);
        }
        // form params
        if ($float !== null) {
            $formParams['float'] = $this->apiClient->getSerializer()->toFormValue($float);
        }
        // form params
        if ($double !== null) {
            $formParams['double'] = $this->apiClient->getSerializer()->toFormValue($double);
        }
        // form params
        if ($string !== null) {
            $formParams['string'] = $this->apiClient->getSerializer()->toFormValue($string);
        }
        // form params
        if ($pattern_without_delimiter !== null) {
            $formParams['pattern_without_delimiter'] = $this->apiClient->getSerializer()->toFormValue($pattern_without_delimiter);
        }
        // form params
        if ($byte !== null) {
            $formParams['byte'] = $this->apiClient->getSerializer()->toFormValue($byte);
        }
        // form params
        if ($binary !== null) {
            $formParams['binary'] = $this->apiClient->getSerializer()->toFormValue($binary);
        }
        // form params
        if ($date !== null) {
            $formParams['date'] = $this->apiClient->getSerializer()->toFormValue($date);
        }
        // form params
        if ($date_time !== null) {
            $formParams['dateTime'] = $this->apiClient->getSerializer()->toFormValue($date_time);
        }
        // form params
        if ($password !== null) {
            $formParams['password'] = $this->apiClient->getSerializer()->toFormValue($password);
        }
        // form params
        if ($callback !== null) {
            $formParams['callback'] = $this->apiClient->getSerializer()->toFormValue($callback);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/fake'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation testEnumParameters
     *
     * To test enum parameters
     *
     * @param string[] $enum_form_string_array Form parameter enum test (string array) (optional)
     * @param string $enum_form_string Form parameter enum test (string) (optional, default to -efg)
     * @param string[] $enum_header_string_array Header parameter enum test (string array) (optional)
     * @param string $enum_header_string Header parameter enum test (string) (optional, default to -efg)
     * @param string[] $enum_query_string_array Query parameter enum test (string array) (optional)
     * @param string $enum_query_string Query parameter enum test (string) (optional, default to -efg)
     * @param float $enum_query_integer Query parameter enum test (double) (optional)
     * @param double $enum_query_double Query parameter enum test (double) (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function testEnumParameters($enum_form_string_array = null, $enum_form_string = null, $enum_header_string_array = null, $enum_header_string = null, $enum_query_string_array = null, $enum_query_string = null, $enum_query_integer = null, $enum_query_double = null)
    {
        list($response) = $this->testEnumParametersWithHttpInfo($enum_form_string_array, $enum_form_string, $enum_header_string_array, $enum_header_string, $enum_query_string_array, $enum_query_string, $enum_query_integer, $enum_query_double);
        return $response;
    }

    /**
     * Operation testEnumParametersWithHttpInfo
     *
     * To test enum parameters
     *
     * @param string[] $enum_form_string_array Form parameter enum test (string array) (optional)
     * @param string $enum_form_string Form parameter enum test (string) (optional, default to -efg)
     * @param string[] $enum_header_string_array Header parameter enum test (string array) (optional)
     * @param string $enum_header_string Header parameter enum test (string) (optional, default to -efg)
     * @param string[] $enum_query_string_array Query parameter enum test (string array) (optional)
     * @param string $enum_query_string Query parameter enum test (string) (optional, default to -efg)
     * @param float $enum_query_integer Query parameter enum test (double) (optional)
     * @param double $enum_query_double Query parameter enum test (double) (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function testEnumParametersWithHttpInfo($enum_form_string_array = null, $enum_form_string = null, $enum_header_string_array = null, $enum_header_string = null, $enum_query_string_array = null, $enum_query_string = null, $enum_query_integer = null, $enum_query_double = null)
    {
        // parse inputs
        $resourcePath = "/fake";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['*/*']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['*/*']);

        // query params
        if (is_array($enum_query_string_array)) {
            $enum_query_string_array = $this->apiClient->getSerializer()->serializeCollection($enum_query_string_array, 'csv', true);
        }
        if ($enum_query_string_array !== null) {
            $queryParams['enum_query_string_array'] = $this->apiClient->getSerializer()->toQueryValue($enum_query_string_array);
        }
        // query params
        if ($enum_query_string !== null) {
            $queryParams['enum_query_string'] = $this->apiClient->getSerializer()->toQueryValue($enum_query_string);
        }
        // query params
        if ($enum_query_integer !== null) {
            $queryParams['enum_query_integer'] = $this->apiClient->getSerializer()->toQueryValue($enum_query_integer);
        }
        // header params
        if (is_array($enum_header_string_array)) {
            $enum_header_string_array = $this->apiClient->getSerializer()->serializeCollection($enum_header_string_array, 'csv');
        }
        if ($enum_header_string_array !== null) {
            $headerParams['enum_header_string_array'] = $this->apiClient->getSerializer()->toHeaderValue($enum_header_string_array);
        }
        // header params
        if ($enum_header_string !== null) {
            $headerParams['enum_header_string'] = $this->apiClient->getSerializer()->toHeaderValue($enum_header_string);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($enum_form_string_array !== null) {
            $formParams['enum_form_string_array'] = $this->apiClient->getSerializer()->toFormValue($enum_form_string_array);
        }
        // form params
        if ($enum_form_string !== null) {
            $formParams['enum_form_string'] = $this->apiClient->getSerializer()->toFormValue($enum_form_string);
        }
        // form params
        if ($enum_query_double !== null) {
            $formParams['enum_query_double'] = $this->apiClient->getSerializer()->toFormValue($enum_query_double);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/fake'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
