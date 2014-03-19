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
    
    /** @var int */
    protected $status = null;
    
    /** @var string */
    protected $content = null;
    
    /**
     * Constructor
     * 
     * @param string $content
     * @param int $status
     */
     public function __construct($content, $status = null)
     {
         $this->content = $content;
         $this->status = $status;
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
    public function getStatus()
    {
        return $this->status;
    }
    
    /**
     * setStatus
     *
     * @param int $status
     *
     * @return self
    */
    public function setStatus($status)
    {
    	$this->status = $status;
        return $this;
    }


    
}