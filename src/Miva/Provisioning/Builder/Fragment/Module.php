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

use Miva\Version;
use Miva\Provisioning\Builder\Helper\XmlHelper;
use Miva\Provisioning\Builder\SimpleXMLElement;

/**
 * Module
 * 
 * Since these items vary from module to module we just use an array to xml
 * to make a generic item. Maybe in the future something for specific
 * modules can be added
 * 
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class Module implements Model\StoreFragmentInterface
{

    /** @var string */
    public $code;

    /** @var string */
    public $feature;
    
    /** @var array */
    public $data = array();
    
    /**
     * Constructor
     * 
     * @param string $code
     * @param string $feature
     * @param array $data
     */
    public function __construct($code = null, $feature = null, array $data = array())
    {
        $this->code = $code;
        $this->feature = $feature;
        $this->data = $data;
    }
    
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
     * @param string code
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
     * @param string feature
     *
     * @return self
    */
    public function setFeature($feature)
    {
	    $this->feature = $feature;
	    return $this;
    }
        
    /**
     * getData
     * 
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }
    
    /**
     * setData
     * 
     * @param array $data
     * 
     * @return self
     */
    public function setData(array $data)
    {
        $this->data = $data;
        return $this;
    }
    
    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <Module code="packbyweight" feature="boxpacking">
     *     
     * </Module>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<Module />');
        
        $xmlObject->addAttribute('code', $this->getCode());
        $xmlObject->addAttribute('feature', $this->getFeature());
        
        foreach ($this->getData() as $data) {
            XmlHelper::appendToParent($xmlObject, $data->toXml($version, $options));
        }
        
                
        return $xmlObject;
    }

}

        
