<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@mivamerchant.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning;

/**
* Client
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class Client
{
    
    /** @var string */
    protected $uri;

    /** @var string */
    protected $token;

    /**
    * Constructor
    * 
    * @param string $uri - The Entry Point to MM5 Root, ex: http://mydomain.com/mm5
    * @param string $token - The Access Token to the API
    */
    public function __construct($uri, $token)
    {
        $this->uri = $uri;
        $this->token = $token;        
    }
    
    /**
     * getUri
     *
     * @return string
    */
    public function getUri()
    {
        return $this->uri;
    }
    
    /**
     * setUri
     *
     * @param string $uri
     *
     * @return self
    */
    public function setUri($uri)
    {
    	$this->uri = $uri;
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
     * getUrl
     * 
     * @return string
     */
     public function getUrl()
     {
         return sprintf('%s/json.mvc?Function=Module&Module_Code=remoteprovisioning&Module_Function=XML',
            $this->getUri()
         );
     }

    /**
     * doRequest
     * 
     * @param Request|string $request - String Request content or Request Object
     * 
     * @return Response
     * @throws Exception - When content length is 0
     */
    public function doRequest($request)
    {
        $url = $this->getUrl();
        
        if ($request instanceof Request) {
           $content = (string) $request->getContent();
           if($request->getUrl()) {
               $url = $request->getUrl();
           }
        } elseif (class_exists('\Symfony\Component\HttpFoundation\Request') && $request instanceof \Symfony\Component\HttpFoundation\Request) { 
            // support a symfony2 request object
            $content = (string) $request->getContent();
        } else {
            $content = (string) $request;   
        }
        
        $ch = curl_init($url);
                
        
        if(!strlen($content)) {
            throw new \Exception('Request object has no content to send');
        }
        
        curl_setopt_array($ch, array(
            CURLOPT_POST => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_POSTFIELDS => $content,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array(
                'Content-type: text/xml',
                'Content-length: '.strlen($content),
                'MMProvision-Access-Token: '.$this->getToken(),
            )
        ));
        

        $response = curl_exec($ch);
        
        // get the response status code
        $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        
        curl_close($ch);
        
        return new Response($response, $statusCode);
    }

}