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
* ShippingMethodRules
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ShippingMethodRulesExclusion implements FragmentInterface
{
    
    /** @var string */
    protected $moduleCode;
    
    /** @var string */
    protected $methodCode;
    
    
   
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
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <Excludes module_code="flatrate" method_code="flat_2day" />      
     * <ExcludedBy module_code="baseunit" method_code="base_2day" />  
     *
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