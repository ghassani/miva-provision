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

/**
* Request
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class Request
{
    
    /** @var string */
    protected $url = null;
    
    /** @var string */
    protected $content = null;
    
    /**
     * Constructor
     * 
     * @param string $content - Content of the request
     * @param string $url - Can override the default request URL
     */
    public function __construct($content = null, $url = null)
    {
        $this->content = $content;
        $this->url = $url;
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


}