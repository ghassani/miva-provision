<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@mivamerchant.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning\Builder\Fragment;

/**
* Module
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class Module implements FragmentInterface
{
    
    /** @var string */
    protected $code;
    
    /** @var string */
    protected $feature;
    
    /** @var string */
    protected $backgroundColor;
    
    /** @var string */
    protected $linkColor;
    
    /** @var string */
    protected $activeLinkColor;
    
    /** @var string */
    protected $viewedLinkColor;
    
    /** @var string */
    protected $backgroundImage;
    

    /**
     * getCode
     *
     * @return string
    */
    public function getCode()
    {
        return $this->code;
    }
    
    /**
     * setCode
     *
     * @param string $code
     *
     * @return self
    */
    public function setCode($code)
    {
    	$this->code = $code;
        return $this;
    }
    
    /**
     * getFeature
     *
     * @return string
    */
    public function getFeature()
    {
        return $this->feature;
    }
    
    /**
     * setFeature
     *
     * @param string $feature
     *
     * @return self
    */
    public function setFeature($feature)
    {
    	$this->feature = $feature;
        return $this;
    }


    /**
     * getBackgroundColor
     *
     * @return string
    */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }
    
    /**
     * setBackgroundColor
     *
     * @param string $backgroundColor
     *
     * @return self
    */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }
    
    /**
     * getLinkColor
     *
     * @return string
    */
    public function getLinkColor()
    {
        return $this->linkColor;
    }
    
    /**
     * setLinkColor
     *
     * @param string $linkColor
     *
     * @return self
    */
    public function setLinkColor($linkColor)
    {
        $this->linkColor = $linkColor;
        return $this;
    }
    
    /**
     * getActiveLinkColor
     *
     * @return string
    */
    public function getActiveLinkColor()
    {
        return $this->activeLinkColor;
    }
    
    /**
     * setActiveLinkColor
     *
     * @param string $activeLinkColor
     *
     * @return self
    */
    public function setActiveLinkColor($activeLinkColor)
    {
        $this->activeLinkColor = $activeLinkColor;
        return $this;
    }
    
    /**
     * getViewedLinkColor
     *
     * @return string
    */
    public function getViewedLinkColor()
    {
        return $this->viewedLinkColor;
    }
    
    /**
     * setViewedLinkColor
     *
     * @param string $viewedLinkColor
     *
     * @return self
    */
    public function setViewedLinkColor($viewedLinkColor)
    {
        $this->viewedLinkColor = $viewedLinkColor;
        return $this;
    }
    
    /**
     * getBackgroundImage
     *
     * @return string
    */
    public function getBackgroundImage()
    {
        return $this->backgroundImage;
    }
    
    /**
     * setBackgroundImage
     *
     * @param string $backgroundImage
     *
     * @return self
    */
    public function setBackgroundImage($backgroundImage)
    {
        $this->backgroundImage = $backgroundImage;
        return $this;
    }
    

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <Module code="cmp-mmui-body" feature="component">
     *    <BackgroundColor>navy</BackgroundColor>
     *    <LinkColor>yellow</LinkColor>
     *    <ActiveLinkColor>yellow</ActiveLinkColor>
     *    <ViewedLinkColor>yellow</ViewedLinkColor>
     *    <BackgroundImage></BackgroundImage>
     * </Module>
    */
    public function toXml()
    {

        $xml = null;
        $xmlObject = new \SimpleXmlElement('<Fragment></Fragment>');

        foreach ($xmlObject->children() as $child) {
            $xml .= $child->saveXml();
        }
        
        return $xml;
    }
}
        