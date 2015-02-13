<?php

namespace Miva\Json;

use Guzzle\Http\Client as HttpClient;

class Client
{

    protected $endpoint;
    
    protected $username;
    
    protected $password;

    protected $storeCode;

    protected $requestStack = array();

    /**
     * @param string $entryPoint - The Entry Point URL to json.mvc
     * @param string|null $username - Username for Admin Requests
     * @param string|null $password - Password for Admin Requests
     * @param string|null $storeCode - Store Code
     */
    public function __construct($entryPoint, $username = null, $password = null, $storeCode = null)
    {
        $this->entryPoint   = $entryPoint;
        $this->username     = $username;
        $this->password     = $password;
        $this->storeCode    = $storeCode;
        $this->httpClient   = new HttpClient();
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @param string $endpoint
     * @return $this
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password = null)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username = null)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreCode()
    {
        return $this->storeCode;
    }

    /**
     * @param string $storeCode
     */
    public function setStoreCode($storeCode = null)
    {
        $this->storeCode = $storeCode;
        return $this;
    }

    public function createRequest($requestType)
    {

    }

    public function send(RequestInterface $request)
    {

    }
    
}