/* 
 * Swagger Petstore
 *
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 *
 * OpenAPI spec version: 1.0.0
 * Contact: apiteam@swagger.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

using System;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Linq;
using RestSharp;
using IO.Swagger.Client;

namespace IO.Swagger.Api
{
    /// <summary>
    /// Represents a collection of functions to interact with the API endpoints
    /// </summary>
    public interface IFakeApi : IApiAccessor
    {
        #region Synchronous Operations
        /// <summary>
        /// Fake endpoint for testing various parameters 假端點 偽のエンドポイント 가짜 엔드 포인트 
        /// </summary>
        /// <remarks>
        /// Fake endpoint for testing various parameters 假端點 偽のエンドポイント 가짜 엔드 포인트 
        /// </remarks>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="number">None</param>
        /// <param name="_double">None</param>
        /// <param name="_string">None</param>
        /// <param name="_byte">None</param>
        /// <param name="integer">None (optional)</param>
        /// <param name="int32">None (optional)</param>
        /// <param name="int64">None (optional)</param>
        /// <param name="_float">None (optional)</param>
        /// <param name="binary">None (optional)</param>
        /// <param name="date">None (optional)</param>
        /// <param name="dateTime">None (optional)</param>
        /// <param name="password">None (optional)</param>
        /// <returns></returns>
        void TestEndpointParameters (decimal? number, double? _double, string _string, byte[] _byte, int? integer = null, int? int32 = null, long? int64 = null, float? _float = null, byte[] binary = null, DateTime? date = null, DateTime? dateTime = null, string password = null);

        /// <summary>
        /// Fake endpoint for testing various parameters 假端點 偽のエンドポイント 가짜 엔드 포인트 
        /// </summary>
        /// <remarks>
        /// Fake endpoint for testing various parameters 假端點 偽のエンドポイント 가짜 엔드 포인트 
        /// </remarks>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="number">None</param>
        /// <param name="_double">None</param>
        /// <param name="_string">None</param>
        /// <param name="_byte">None</param>
        /// <param name="integer">None (optional)</param>
        /// <param name="int32">None (optional)</param>
        /// <param name="int64">None (optional)</param>
        /// <param name="_float">None (optional)</param>
        /// <param name="binary">None (optional)</param>
        /// <param name="date">None (optional)</param>
        /// <param name="dateTime">None (optional)</param>
        /// <param name="password">None (optional)</param>
        /// <returns>ApiResponse of Object(void)</returns>
        ApiResponse<Object> TestEndpointParametersWithHttpInfo (decimal? number, double? _double, string _string, byte[] _byte, int? integer = null, int? int32 = null, long? int64 = null, float? _float = null, byte[] binary = null, DateTime? date = null, DateTime? dateTime = null, string password = null);
        /// <summary>
        /// To test enum query parameters
        /// </summary>
        /// <remarks>
        /// 
        /// </remarks>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="enumQueryString">Query parameter enum test (string) (optional, default to -efg)</param>
        /// <param name="enumQueryInteger">Query parameter enum test (double) (optional)</param>
        /// <param name="enumQueryDouble">Query parameter enum test (double) (optional)</param>
        /// <returns></returns>
        void TestEnumQueryParameters (string enumQueryString = null, decimal? enumQueryInteger = null, double? enumQueryDouble = null);

        /// <summary>
        /// To test enum query parameters
        /// </summary>
        /// <remarks>
        /// 
        /// </remarks>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="enumQueryString">Query parameter enum test (string) (optional, default to -efg)</param>
        /// <param name="enumQueryInteger">Query parameter enum test (double) (optional)</param>
        /// <param name="enumQueryDouble">Query parameter enum test (double) (optional)</param>
        /// <returns>ApiResponse of Object(void)</returns>
        ApiResponse<Object> TestEnumQueryParametersWithHttpInfo (string enumQueryString = null, decimal? enumQueryInteger = null, double? enumQueryDouble = null);
        #endregion Synchronous Operations
        #region Asynchronous Operations
        /// <summary>
        /// Fake endpoint for testing various parameters 假端點 偽のエンドポイント 가짜 엔드 포인트 
        /// </summary>
        /// <remarks>
        /// Fake endpoint for testing various parameters 假端點 偽のエンドポイント 가짜 엔드 포인트 
        /// </remarks>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="number">None</param>
        /// <param name="_double">None</param>
        /// <param name="_string">None</param>
        /// <param name="_byte">None</param>
        /// <param name="integer">None (optional)</param>
        /// <param name="int32">None (optional)</param>
        /// <param name="int64">None (optional)</param>
        /// <param name="_float">None (optional)</param>
        /// <param name="binary">None (optional)</param>
        /// <param name="date">None (optional)</param>
        /// <param name="dateTime">None (optional)</param>
        /// <param name="password">None (optional)</param>
        /// <returns>Task of void</returns>
        System.Threading.Tasks.Task TestEndpointParametersAsync (decimal? number, double? _double, string _string, byte[] _byte, int? integer = null, int? int32 = null, long? int64 = null, float? _float = null, byte[] binary = null, DateTime? date = null, DateTime? dateTime = null, string password = null);

        /// <summary>
        /// Fake endpoint for testing various parameters 假端點 偽のエンドポイント 가짜 엔드 포인트 
        /// </summary>
        /// <remarks>
        /// Fake endpoint for testing various parameters 假端點 偽のエンドポイント 가짜 엔드 포인트 
        /// </remarks>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="number">None</param>
        /// <param name="_double">None</param>
        /// <param name="_string">None</param>
        /// <param name="_byte">None</param>
        /// <param name="integer">None (optional)</param>
        /// <param name="int32">None (optional)</param>
        /// <param name="int64">None (optional)</param>
        /// <param name="_float">None (optional)</param>
        /// <param name="binary">None (optional)</param>
        /// <param name="date">None (optional)</param>
        /// <param name="dateTime">None (optional)</param>
        /// <param name="password">None (optional)</param>
        /// <returns>Task of ApiResponse</returns>
        System.Threading.Tasks.Task<ApiResponse<Object>> TestEndpointParametersAsyncWithHttpInfo (decimal? number, double? _double, string _string, byte[] _byte, int? integer = null, int? int32 = null, long? int64 = null, float? _float = null, byte[] binary = null, DateTime? date = null, DateTime? dateTime = null, string password = null);
        /// <summary>
        /// To test enum query parameters
        /// </summary>
        /// <remarks>
        /// 
        /// </remarks>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="enumQueryString">Query parameter enum test (string) (optional, default to -efg)</param>
        /// <param name="enumQueryInteger">Query parameter enum test (double) (optional)</param>
        /// <param name="enumQueryDouble">Query parameter enum test (double) (optional)</param>
        /// <returns>Task of void</returns>
        System.Threading.Tasks.Task TestEnumQueryParametersAsync (string enumQueryString = null, decimal? enumQueryInteger = null, double? enumQueryDouble = null);

        /// <summary>
        /// To test enum query parameters
        /// </summary>
        /// <remarks>
        /// 
        /// </remarks>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="enumQueryString">Query parameter enum test (string) (optional, default to -efg)</param>
        /// <param name="enumQueryInteger">Query parameter enum test (double) (optional)</param>
        /// <param name="enumQueryDouble">Query parameter enum test (double) (optional)</param>
        /// <returns>Task of ApiResponse</returns>
        System.Threading.Tasks.Task<ApiResponse<Object>> TestEnumQueryParametersAsyncWithHttpInfo (string enumQueryString = null, decimal? enumQueryInteger = null, double? enumQueryDouble = null);
        #endregion Asynchronous Operations
    }

    /// <summary>
    /// Represents a collection of functions to interact with the API endpoints
    /// </summary>
    public partial class FakeApi : IFakeApi
    {
        private IO.Swagger.Client.ExceptionFactory _exceptionFactory = (name, response) => null;

        /// <summary>
        /// Gets or sets the default API client for making HTTP calls.
        /// </summary>
        /// <value>The API client.</value>
        public ApiClient ApiClient {get; set;}

        /// <summary>
        /// Initializes a new instance of the <see cref="FakeApi"/> class.
        /// </summary>
        /// <returns></returns>
        public FakeApi(String basePath)
        {
            //this.Configuration = new Configuration(new ApiClient(basePath));
            ApiClient = new ApiClient(basePath);

            ExceptionFactory = IO.Swagger.Client.Configuration.DefaultExceptionFactory;

            // ensure API client has configuration ready
            /*if (Configuration.ApiClient.Configuration == null)
            {
                this.Configuration.ApiClient.Configuration = this.Configuration;
            }*/
        }

        /// <summary>
        /// Initializes a new instance of the <see cref="FakeApi"/> class
        /// using Configuration object
        /// </summary>
        /// <param name="configuration">An instance of Configuration</param>
        /// <returns></returns>
        /*public FakeApi(Configuration configuration = null)
        {
            if (configuration == null) // use the default one in Configuration
                this.Configuration = Configuration.Default;
            else
                this.Configuration = configuration;

            ExceptionFactory = IO.Swagger.Client.Configuration.DefaultExceptionFactory;

            // ensure API client has configuration ready
            if (Configuration.ApiClient.Configuration == null)
            {
                this.Configuration.ApiClient.Configuration = this.Configuration;
            }
        }*/

        /// <summary>
        /// Gets the base path of the API client.
        /// </summary>
        /// <value>The base path</value>
        public String GetBasePath()
        {
            return this.ApiClient.RestClient.BaseUrl.ToString();
        }

        /// <summary>
        /// Sets the base path of the API client.
        /// </summary>
        /// <value>The base path</value>
        [Obsolete("SetBasePath is deprecated, please do 'Configuration.ApiClient = new ApiClient(\"http://new-path\")' instead.")]
        public void SetBasePath(String basePath)
        {
            // do nothing
        }

        /// <summary>
        /// Gets or sets the configuration object
        /// </summary>
        /// <value>An instance of the Configuration</value>
        /*public Configuration Configuration {get; set;}*/

        /// <summary>
        /// Provides a factory method hook for the creation of exceptions.
        /// </summary>
        public IO.Swagger.Client.ExceptionFactory ExceptionFactory
        {
            get
            {
                if (_exceptionFactory != null && _exceptionFactory.GetInvocationList().Length > 1)
                {
                    throw new InvalidOperationException("Multicast delegate for ExceptionFactory is unsupported.");
                }
                return _exceptionFactory;
            }
            set { _exceptionFactory = value; }
        }

        /// <summary>
        /// Gets the default header.
        /// </summary>
        /// <returns>Dictionary of HTTP header</returns>
        [Obsolete("DefaultHeader is deprecated, please use Configuration.DefaultHeader instead.")]
        public Dictionary<String, String> DefaultHeader()
        {
            return this.ApiClient.Configuration.DefaultHeader;
        }

        /// <summary>
        /// Add default header.
        /// </summary>
        /// <param name="key">Header field name.</param>
        /// <param name="value">Header field value.</param>
        /// <returns></returns>
        [Obsolete("AddDefaultHeader is deprecated, please use Configuration.AddDefaultHeader instead.")]
        public void AddDefaultHeader(string key, string value)
        {
            this.ApiClient.Configuration.AddDefaultHeader(key, value);
        }

        /// <summary>
        /// Fake endpoint for testing various parameters 假端點 偽のエンドポイント 가짜 엔드 포인트  Fake endpoint for testing various parameters 假端點 偽のエンドポイント 가짜 엔드 포인트 
        /// </summary>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="number">None</param>
        /// <param name="_double">None</param>
        /// <param name="_string">None</param>
        /// <param name="_byte">None</param>
        /// <param name="integer">None (optional)</param>
        /// <param name="int32">None (optional)</param>
        /// <param name="int64">None (optional)</param>
        /// <param name="_float">None (optional)</param>
        /// <param name="binary">None (optional)</param>
        /// <param name="date">None (optional)</param>
        /// <param name="dateTime">None (optional)</param>
        /// <param name="password">None (optional)</param>
        /// <returns></returns>
        public void TestEndpointParameters (decimal? number, double? _double, string _string, byte[] _byte, int? integer = null, int? int32 = null, long? int64 = null, float? _float = null, byte[] binary = null, DateTime? date = null, DateTime? dateTime = null, string password = null)
        {
             TestEndpointParametersWithHttpInfo(number, _double, _string, _byte, integer, int32, int64, _float, binary, date, dateTime, password);
        }

        /// <summary>
        /// Fake endpoint for testing various parameters 假端點 偽のエンドポイント 가짜 엔드 포인트  Fake endpoint for testing various parameters 假端點 偽のエンドポイント 가짜 엔드 포인트 
        /// </summary>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="number">None</param>
        /// <param name="_double">None</param>
        /// <param name="_string">None</param>
        /// <param name="_byte">None</param>
        /// <param name="integer">None (optional)</param>
        /// <param name="int32">None (optional)</param>
        /// <param name="int64">None (optional)</param>
        /// <param name="_float">None (optional)</param>
        /// <param name="binary">None (optional)</param>
        /// <param name="date">None (optional)</param>
        /// <param name="dateTime">None (optional)</param>
        /// <param name="password">None (optional)</param>
        /// <returns>ApiResponse of Object(void)</returns>
        public ApiResponse<Object> TestEndpointParametersWithHttpInfo (decimal? number, double? _double, string _string, byte[] _byte, int? integer = null, int? int32 = null, long? int64 = null, float? _float = null, byte[] binary = null, DateTime? date = null, DateTime? dateTime = null, string password = null)
        {
            // verify the required parameter 'number' is set
            if (number == null)
                throw new ApiException(400, "Missing required parameter 'number' when calling FakeApi->TestEndpointParameters");
            // verify the required parameter '_double' is set
            if (_double == null)
                throw new ApiException(400, "Missing required parameter '_double' when calling FakeApi->TestEndpointParameters");
            // verify the required parameter '_string' is set
            if (_string == null)
                throw new ApiException(400, "Missing required parameter '_string' when calling FakeApi->TestEndpointParameters");
            // verify the required parameter '_byte' is set
            if (_byte == null)
                throw new ApiException(400, "Missing required parameter '_byte' when calling FakeApi->TestEndpointParameters");

            var localVarPath = "/fake";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new Dictionary<String, String>();
            var localVarHeaderParams = new Dictionary<String, String>(ApiClient.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
                "application/xml; charset=utf-8", 
                "application/json; charset=utf-8"
            };
            String localVarHttpContentType = ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/xml; charset=utf-8", 
                "application/json; charset=utf-8"
            };
            String localVarHttpHeaderAccept = ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            // set "format" to json by default
            // e.g. /pet/{petId}.{format} becomes /pet/{petId}.json
            localVarPathParams.Add("format", "json");
            if (integer != null) localVarFormParams.Add("integer", ApiClient.ParameterToString(integer)); // form parameter
            if (int32 != null) localVarFormParams.Add("int32", ApiClient.ParameterToString(int32)); // form parameter
            if (int64 != null) localVarFormParams.Add("int64", ApiClient.ParameterToString(int64)); // form parameter
            if (number != null) localVarFormParams.Add("number", ApiClient.ParameterToString(number)); // form parameter
            if (_float != null) localVarFormParams.Add("float", ApiClient.ParameterToString(_float)); // form parameter
            if (_double != null) localVarFormParams.Add("double", ApiClient.ParameterToString(_double)); // form parameter
            if (_string != null) localVarFormParams.Add("string", ApiClient.ParameterToString(_string)); // form parameter
            if (_byte != null) localVarFormParams.Add("byte", ApiClient.ParameterToString(_byte)); // form parameter
            if (binary != null) localVarFormParams.Add("binary", ApiClient.ParameterToString(binary)); // form parameter
            if (date != null) localVarFormParams.Add("date", ApiClient.ParameterToString(date)); // form parameter
            if (dateTime != null) localVarFormParams.Add("dateTime", ApiClient.ParameterToString(dateTime)); // form parameter
            if (password != null) localVarFormParams.Add("password", ApiClient.ParameterToString(password)); // form parameter


            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) ApiClient.CallApi(localVarPath,
                Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("TestEndpointParameters", localVarResponse);
                if (exception != null) throw exception;
            }

            
            return new ApiResponse<Object>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                null);
        }

        /// <summary>
        /// Fake endpoint for testing various parameters 假端點 偽のエンドポイント 가짜 엔드 포인트  Fake endpoint for testing various parameters 假端點 偽のエンドポイント 가짜 엔드 포인트 
        /// </summary>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="number">None</param>
        /// <param name="_double">None</param>
        /// <param name="_string">None</param>
        /// <param name="_byte">None</param>
        /// <param name="integer">None (optional)</param>
        /// <param name="int32">None (optional)</param>
        /// <param name="int64">None (optional)</param>
        /// <param name="_float">None (optional)</param>
        /// <param name="binary">None (optional)</param>
        /// <param name="date">None (optional)</param>
        /// <param name="dateTime">None (optional)</param>
        /// <param name="password">None (optional)</param>
        /// <returns>Task of void</returns>
        public async System.Threading.Tasks.Task TestEndpointParametersAsync (decimal? number, double? _double, string _string, byte[] _byte, int? integer = null, int? int32 = null, long? int64 = null, float? _float = null, byte[] binary = null, DateTime? date = null, DateTime? dateTime = null, string password = null)
        {
             await TestEndpointParametersAsyncWithHttpInfo(number, _double, _string, _byte, integer, int32, int64, _float, binary, date, dateTime, password);

        }

        /// <summary>
        /// Fake endpoint for testing various parameters 假端點 偽のエンドポイント 가짜 엔드 포인트  Fake endpoint for testing various parameters 假端點 偽のエンドポイント 가짜 엔드 포인트 
        /// </summary>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="number">None</param>
        /// <param name="_double">None</param>
        /// <param name="_string">None</param>
        /// <param name="_byte">None</param>
        /// <param name="integer">None (optional)</param>
        /// <param name="int32">None (optional)</param>
        /// <param name="int64">None (optional)</param>
        /// <param name="_float">None (optional)</param>
        /// <param name="binary">None (optional)</param>
        /// <param name="date">None (optional)</param>
        /// <param name="dateTime">None (optional)</param>
        /// <param name="password">None (optional)</param>
        /// <returns>Task of ApiResponse</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Object>> TestEndpointParametersAsyncWithHttpInfo (decimal? number, double? _double, string _string, byte[] _byte, int? integer = null, int? int32 = null, long? int64 = null, float? _float = null, byte[] binary = null, DateTime? date = null, DateTime? dateTime = null, string password = null)
        {
            // verify the required parameter 'number' is set
            if (number == null)
                throw new ApiException(400, "Missing required parameter 'number' when calling FakeApi->TestEndpointParameters");
            // verify the required parameter '_double' is set
            if (_double == null)
                throw new ApiException(400, "Missing required parameter '_double' when calling FakeApi->TestEndpointParameters");
            // verify the required parameter '_string' is set
            if (_string == null)
                throw new ApiException(400, "Missing required parameter '_string' when calling FakeApi->TestEndpointParameters");
            // verify the required parameter '_byte' is set
            if (_byte == null)
                throw new ApiException(400, "Missing required parameter '_byte' when calling FakeApi->TestEndpointParameters");

            var localVarPath = "/fake";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new Dictionary<String, String>();
            var localVarHeaderParams = new Dictionary<String, String>(ApiClient.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
                "application/xml; charset=utf-8", 
                "application/json; charset=utf-8"
            };
            String localVarHttpContentType = ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/xml; charset=utf-8", 
                "application/json; charset=utf-8"
            };
            String localVarHttpHeaderAccept = ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            // set "format" to json by default
            // e.g. /pet/{petId}.{format} becomes /pet/{petId}.json
            localVarPathParams.Add("format", "json");
            if (integer != null) localVarFormParams.Add("integer", ApiClient.ParameterToString(integer)); // form parameter
            if (int32 != null) localVarFormParams.Add("int32", ApiClient.ParameterToString(int32)); // form parameter
            if (int64 != null) localVarFormParams.Add("int64", ApiClient.ParameterToString(int64)); // form parameter
            if (number != null) localVarFormParams.Add("number", ApiClient.ParameterToString(number)); // form parameter
            if (_float != null) localVarFormParams.Add("float", ApiClient.ParameterToString(_float)); // form parameter
            if (_double != null) localVarFormParams.Add("double", ApiClient.ParameterToString(_double)); // form parameter
            if (_string != null) localVarFormParams.Add("string", ApiClient.ParameterToString(_string)); // form parameter
            if (_byte != null) localVarFormParams.Add("byte", ApiClient.ParameterToString(_byte)); // form parameter
            if (binary != null) localVarFormParams.Add("binary", ApiClient.ParameterToString(binary)); // form parameter
            if (date != null) localVarFormParams.Add("date", ApiClient.ParameterToString(date)); // form parameter
            if (dateTime != null) localVarFormParams.Add("dateTime", ApiClient.ParameterToString(dateTime)); // form parameter
            if (password != null) localVarFormParams.Add("password", ApiClient.ParameterToString(password)); // form parameter


            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await ApiClient.CallApiAsync(localVarPath,
                Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("TestEndpointParameters", localVarResponse);
                if (exception != null) throw exception;
            }

            
            return new ApiResponse<Object>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                null);
        }

        /// <summary>
        /// To test enum query parameters 
        /// </summary>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="enumQueryString">Query parameter enum test (string) (optional, default to -efg)</param>
        /// <param name="enumQueryInteger">Query parameter enum test (double) (optional)</param>
        /// <param name="enumQueryDouble">Query parameter enum test (double) (optional)</param>
        /// <returns></returns>
        public void TestEnumQueryParameters (string enumQueryString = null, decimal? enumQueryInteger = null, double? enumQueryDouble = null)
        {
             TestEnumQueryParametersWithHttpInfo(enumQueryString, enumQueryInteger, enumQueryDouble);
        }

        /// <summary>
        /// To test enum query parameters 
        /// </summary>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="enumQueryString">Query parameter enum test (string) (optional, default to -efg)</param>
        /// <param name="enumQueryInteger">Query parameter enum test (double) (optional)</param>
        /// <param name="enumQueryDouble">Query parameter enum test (double) (optional)</param>
        /// <returns>ApiResponse of Object(void)</returns>
        public ApiResponse<Object> TestEnumQueryParametersWithHttpInfo (string enumQueryString = null, decimal? enumQueryInteger = null, double? enumQueryDouble = null)
        {

            var localVarPath = "/fake";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new Dictionary<String, String>();
            var localVarHeaderParams = new Dictionary<String, String>(ApiClient.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
                "application/json"
            };
            String localVarHttpContentType = ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            // set "format" to json by default
            // e.g. /pet/{petId}.{format} becomes /pet/{petId}.json
            localVarPathParams.Add("format", "json");
            if (enumQueryInteger != null) localVarQueryParams.Add("enum_query_integer", ApiClient.ParameterToString(enumQueryInteger)); // query parameter
            if (enumQueryString != null) localVarFormParams.Add("enum_query_string", ApiClient.ParameterToString(enumQueryString)); // form parameter
            if (enumQueryDouble != null) localVarFormParams.Add("enum_query_double", ApiClient.ParameterToString(enumQueryDouble)); // form parameter


            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) ApiClient.CallApi(localVarPath,
                Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("TestEnumQueryParameters", localVarResponse);
                if (exception != null) throw exception;
            }

            
            return new ApiResponse<Object>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                null);
        }

        /// <summary>
        /// To test enum query parameters 
        /// </summary>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="enumQueryString">Query parameter enum test (string) (optional, default to -efg)</param>
        /// <param name="enumQueryInteger">Query parameter enum test (double) (optional)</param>
        /// <param name="enumQueryDouble">Query parameter enum test (double) (optional)</param>
        /// <returns>Task of void</returns>
        public async System.Threading.Tasks.Task TestEnumQueryParametersAsync (string enumQueryString = null, decimal? enumQueryInteger = null, double? enumQueryDouble = null)
        {
             await TestEnumQueryParametersAsyncWithHttpInfo(enumQueryString, enumQueryInteger, enumQueryDouble);

        }

        /// <summary>
        /// To test enum query parameters 
        /// </summary>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="enumQueryString">Query parameter enum test (string) (optional, default to -efg)</param>
        /// <param name="enumQueryInteger">Query parameter enum test (double) (optional)</param>
        /// <param name="enumQueryDouble">Query parameter enum test (double) (optional)</param>
        /// <returns>Task of ApiResponse</returns>
        public async System.Threading.Tasks.Task<ApiResponse<Object>> TestEnumQueryParametersAsyncWithHttpInfo (string enumQueryString = null, decimal? enumQueryInteger = null, double? enumQueryDouble = null)
        {

            var localVarPath = "/fake";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new Dictionary<String, String>();
            var localVarHeaderParams = new Dictionary<String, String>(ApiClient.Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
                "application/json"
            };
            String localVarHttpContentType = ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json"
            };
            String localVarHttpHeaderAccept = ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            // set "format" to json by default
            // e.g. /pet/{petId}.{format} becomes /pet/{petId}.json
            localVarPathParams.Add("format", "json");
            if (enumQueryInteger != null) localVarQueryParams.Add("enum_query_integer", ApiClient.ParameterToString(enumQueryInteger)); // query parameter
            if (enumQueryString != null) localVarFormParams.Add("enum_query_string", ApiClient.ParameterToString(enumQueryString)); // form parameter
            if (enumQueryDouble != null) localVarFormParams.Add("enum_query_double", ApiClient.ParameterToString(enumQueryDouble)); // form parameter


            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await ApiClient.CallApiAsync(localVarPath,
                Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("TestEnumQueryParameters", localVarResponse);
                if (exception != null) throw exception;
            }

            
            return new ApiResponse<Object>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                null);
        }

    }
}
