<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@miva.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning;

use Guzzle\Http\Client as HttpClient;

/**
* Client
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class Client
{
    
    /** @var string */
    protected $url;

    /** @var string */
    protected $token;
    
    /** @var Guzzle\Http\Client */
    protected $httpClient;

    /**
    * Constructor
    * 
    * @param string $url - The URL to Miva Merchant's json.mvc
    * @param string $token - The Access Token to the API
    */
    public function __construct($url, $token)
    {
        $this->url = $url;
        $this->token = $token;
        $this->httpClient = new HttpClient($url);
    }

    /**
     * getUrl
     *
     * @return string
    */
    public function getUrl()
    {
        return $this->url;
    }
    
    /**
     * setUrl
     *
     * @param string $url
     *
     * @return self
    */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * getToken
     *
     * @return string
    */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * setToken
     *
     * @param string $token
     *
     * @return self
    */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }
    

    /**
     * doRequest
     *
     * @param $content - Content to be sent
     *
     * @return Response
     * @throws Exception - When content length is 0
     */
    public function doRequest($content)
    {
        $request = $this->httpClient->post(
            null,
            array(
                'MMProvision-Access-Token' => $this->getToken(),
                'Content-Type' => 'text/xml'
            ),
            $content,
            array()
        );

        $request->getQuery()
            ->set('Function', 'Module')
            ->set('Module_Code', 'remoteprovisioning')
            ->set('Module_Function', 'XML');


        $response = $request->send();


        return new Response($response);
    }

}