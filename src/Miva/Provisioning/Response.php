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
    /** @var array */
    protected $response = array();
    
    /**
     * Constructor
     * 
     * @param string $content
     * @param int $status
     */
     public function __construct($content)
     {
         $this->response = json_decode($content, true);
     }
     
    /**
     * getContent
     *
     * @return string
    */
    public function getContent()
    {
        return $this->content;
    }
    
    /**
     * setContent
     *
     * @param string $content
     *
     * @return self
    */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }
    
    /**
     * getStatus
     *
     * @return int
    */
    public function isSuccess()
    {
        return isset($this->response['success']) && $this->response['success'] == 1;
    }
    

    public function getErrorMessage()
    {
        return isset($this->response['error_message']) ? $this->response['error_message'] : null;
    }

    public function getErrorCode()
    {
        return isset($this->response['error_code']) ? $this->response['error_code'] : null;
    }

    
}