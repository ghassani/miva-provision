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
* ShippingMethod
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ShippingMethod implements FragmentInterface
{

    /** @var string */
    protected $moduleCode;
    
    /** @var string */
    protected $methodCode;
      
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
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <ShippingMethod module_code="upsxml" method_code="02" />  
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