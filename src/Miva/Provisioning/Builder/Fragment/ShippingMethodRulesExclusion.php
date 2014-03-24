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
* ShippingMethodRules
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ShippingMethodRulesExclusion implements Model\FragmentFragmentInterface
{
    
    /** @var string */
    protected $moduleCode;
    
    /** @var string */
    protected $methodCode;
    
    /** @var bool */
    protected $excludedBy = false;
   
    /**
     * getMethodCode
     *
     * @return string
    */
    public function getMethodCode()
    {
        return $this->methodCode;
    }
    
    /**
     * setMethodCode
     *
     * @param string $methodCode
     *
     * @return self
    */
    public function setMethodCode($methodCode)
    {
        $this->methodCode = $methodCode;
        return $this;
    }


    /**
     * getModuleCode
     *
     * @return string
    */
    public function getModuleCode()
    {
        return $this->moduleCode;
    }
    
    /**
     * setModuleCode
     *
     * @param string $moduleCode
     *
     * @return self
    */
    public function setModuleCode($moduleCode)
    {
        $this->moduleCode = $moduleCode;
        return $this;
    }

    /**
     * getExcludedBy
     *
     * @return bool
    */
    public function getExcludedBy()
    {
    	return $this->excludedBy;
    }

    /**
     * setExcludedBy
     *
     * @param bool excludedBy
     *
     * @return self
    */
    public function setExcludedBy($excludedBy)
    {
	    $this->excludedBy = $excludedBy;
	    return $this;
    }
    
    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <Excludes module_code="flatrate" method_code="flat_2day" />      
     * <ExcludedBy module_code="baseunit" method_code="base_2day" />  
     *
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        if (true === $this->getExcludedBy()) {
            $xmlObject = new SimpleXMLElement('<ExcludedBy />');
        } else {
            $xmlObject = new SimpleXMLElement('<Excludes />');
        }
        
        $xmlObject->addAttribute('module_code', $this->getModuleCode());
        $xmlObject->addAttribute('method_code', $this->getMethodCode());
        
        return $xmlObject;
    }
}