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
* Response
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class Response
{
    const RESPONSE_XML = 'xml';

    const RESPONSE_JSON = 'json';

    /** @var array */
    protected $response = array();

    protected $format = 'xml';


    /**
     * Constructor
     * 
     * @param string $content
     * @param int $status
     */
     public function __construct(\Guzzle\Http\Message\Response $httpResponse)
     {
         $this->httpResponse = $httpResponse;
         if ($this->httpResponse->getHeader('Content-Type') == 'text/xml') {
             $this->response = simplexml_load_string($this->httpResponse->getBody(true));
             $this->format = static::RESPONSE_XML;
         } else {
             $this->response = json_decode($this->httpResponse->getBody(true), true);
             $this->format = static::RESPONSE_JSON;
         }
     }

    /**
     * getContent
     *
     * @return string
    */
    public function getContent()
    {
        return $this->httpResponse->getBody(true);
    }

    /**
     * getStatus
     *
     * @return int
    */
    public function isSuccess()
    {
        if ($this->httpResponse->getStatusCode() !== 200) {
            return false;
        }

        if ($this->format == static::RESPONSE_XML) {
            if (property_exists($this->response->attributes(), 'status') && (string) $this->response->attributes()->status == 'error') {
                return false;
            }
        } else if($this->format == static::RESPONSE_JSON) {
            if (isset($this->response['success']) && $this->response['success'] != true) {
                return false;
            }
        }

        if (count($this->getErrorMessage())) {
            return false;
        }

        return true;
    }
    

    public function getErrorMessage()
    {
        if ($this->format == static::RESPONSE_XML) {
            if (property_exists($this->response, 'Error')) {
                return (string) $this->response->Error;
            }
        } else if($this->format == static::RESPONSE_JSON) {
            return isset($this->response['error_message']) ? $this->response['error_message'] : null;
        }

        return false;
    }

    /**
     * 
     */
    public function getErrorCode()
    {
        if ($this->format == static::RESPONSE_XML) {
            if (property_exists($this->response, 'Error')) {
                return (string) $this->response->Error->attributes()->code;
            }
        } else if($this->format == static::RESPONSE_JSON) {
            return isset($this->response['error_code']) ? $this->response['error_code'] : null;
        }

        return false;

    }

    /**
     *
     */
    public function getMessages()
    {
        $return = array();

        if (!$this->response instanceof \SimpleXMLElement) {
            return $return;
        }

        foreach($this->response->xpath('Message') as $message) {
            $attributes = $message->attributes();
            $return[] = 'Line: '.$attributes['lineno'].' - '.((string) $message);
        }

        return $return;
    }

    
}