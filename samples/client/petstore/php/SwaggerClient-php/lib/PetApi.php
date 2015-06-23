<?php
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */

namespace SwaggerClient;

class PetApi {

  function __construct($apiClient = null) {
    if (null === $apiClient) {
      if (Configuration::$apiClient === null) {
        Configuration::$apiClient = new ApiClient(); // create a new API client if not present
        $this->apiClient = Configuration::$apiClient;
      }
      else
        $this->apiClient = Configuration::$apiClient; // use the default one
    } else {
      $this->apiClient = $apiClient; // use the one provided by the user
    }
  }

  private $apiClient; // instance of the ApiClient

  /**
   * get the API client
   */
  public function getApiClient() {
    return $this->apiClient;
  }

  /**
   * set the API client
   */
  public function setApiClient($apiClient) {
    $this->apiClient = $apiClient;
  }

  
  /**
   * updatePet
   *
   * Update an existing pet
   *
   * @param Pet $body Pet object that needs to be added to the store (required)
   * @return void
   */
   public function updatePet($body) {
      

      // parse inputs
      $resourcePath = "/pet";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "PUT";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','application/xml'));

      
      
      
      
      // body params
      $_tempBody = null;
      if (isset($body)) {
        $_tempBody = $body;
      }

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array('petstore_auth');

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      
  }
  
  /**
   * addPet
   *
   * Add a new pet to the store
   *
   * @param Pet $body Pet object that needs to be added to the store (required)
   * @return void
   */
   public function addPet($body) {
      

      // parse inputs
      $resourcePath = "/pet";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','application/xml'));

      
      
      
      
      // body params
      $_tempBody = null;
      if (isset($body)) {
        $_tempBody = $body;
      }

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array('petstore_auth');

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      
  }
  
  /**
   * findPetsByStatus
   *
   * Finds Pets by status
   *
   * @param array[string] $status Status values that need to be considered for filter (required)
   * @return array[Pet]
   */
   public function findPetsByStatus($status) {
      

      // parse inputs
      $resourcePath = "/pet/findByStatus";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($status !== null) {
        $queryParams['status'] = $this->apiClient->toQueryValue($status);
      }
      
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array('petstore_auth');

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'array[Pet]');
      return $responseObject;
  }
  
  /**
   * findPetsByTags
   *
   * Finds Pets by tags
   *
   * @param array[string] $tags Tags to filter by (required)
   * @return array[Pet]
   */
   public function findPetsByTags($tags) {
      

      // parse inputs
      $resourcePath = "/pet/findByTags";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($tags !== null) {
        $queryParams['tags'] = $this->apiClient->toQueryValue($tags);
      }
      
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array('petstore_auth');

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'array[Pet]');
      return $responseObject;
  }
  
  /**
   * getPetById
   *
   * Find pet by ID
   *
   * @param int $pet_id ID of pet that needs to be fetched (required)
   * @return SplFileObject
   */
   public function getPetById($pet_id) {
      
      // verify the required parameter 'pet_id' is set
      if ($pet_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $pet_id when calling getPetById');
      }
      

      // parse inputs
      $resourcePath = "/pet/{petId}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      
      
      // path params
      if($pet_id !== null) {
        $resourcePath = str_replace("{" . "petId" . "}",
                                    $this->apiClient->toPathValue($pet_id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array('api_key', 'petstore_auth');

      // make the API Call
      list($response, $httpHeader) = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings, 'SplFileObject');

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'SplFileObject', $httpHeader);
      return $responseObject;
  }
  
  /**
   * updatePetWithForm
   *
   * Updates a pet in the store with form data
   *
   * @param string $pet_id ID of pet that needs to be updated (required)
   * @param string $name Updated name of the pet (required)
   * @param string $status Updated status of the pet (required)
   * @return void
   */
   public function updatePetWithForm($pet_id, $name, $status) {
      
      // verify the required parameter 'pet_id' is set
      if ($pet_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $pet_id when calling updatePetWithForm');
      }
      

      // parse inputs
      $resourcePath = "/pet/{petId}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

      
      
      // path params
      if($pet_id !== null) {
        $resourcePath = str_replace("{" . "petId" . "}",
                                    $this->apiClient->toPathValue($pet_id), $resourcePath);
      }
      // form params
      if ($name !== null) {
        $formParams['name'] = $this->apiClient->toFormValue($name);
      }// form params
      if ($status !== null) {
        $formParams['status'] = $this->apiClient->toFormValue($status);
      }
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array('petstore_auth');

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      
  }
  
  /**
   * deletePet
   *
   * Deletes a pet
   *
   * @param string $api_key  (required)
   * @param int $pet_id Pet id to delete (required)
   * @return void
   */
   public function deletePet($api_key, $pet_id) {
      
      // verify the required parameter 'pet_id' is set
      if ($pet_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $pet_id when calling deletePet');
      }
      

      // parse inputs
      $resourcePath = "/pet/{petId}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "DELETE";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      
      // header params
      if($api_key !== null) {
        $headerParams['api_key'] = $this->apiClient->toHeaderValue($api_key);
      }
      // path params
      if($pet_id !== null) {
        $resourcePath = str_replace("{" . "petId" . "}",
                                    $this->apiClient->toPathValue($pet_id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array('petstore_auth');

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      
  }
  
  /**
   * uploadFile
   *
   * uploads an image
   *
   * @param int $pet_id ID of pet to update (required)
   * @param string $additional_metadata Additional data to pass to server (required)
   * @param SplFileObject $file file to upload (required)
   * @return void
   */
   public function uploadFile($pet_id, $additional_metadata, $file) {
      
      // verify the required parameter 'pet_id' is set
      if ($pet_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $pet_id when calling uploadFile');
      }
      

      // parse inputs
      $resourcePath = "/pet/{petId}/uploadImage";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('multipart/form-data'));

      
      
      // path params
      if($pet_id !== null) {
        $resourcePath = str_replace("{" . "petId" . "}",
                                    $this->apiClient->toPathValue($pet_id), $resourcePath);
      }
      // form params
      if ($additional_metadata !== null) {
        $formParams['additionalMetadata'] = $this->apiClient->toFormValue($additional_metadata);
      }// form params
      if ($file !== null) {
        $formParams['file'] = '@'.$this->apiClient->toFormValue($file);
      }
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array('petstore_auth');

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      
  }
  

}
