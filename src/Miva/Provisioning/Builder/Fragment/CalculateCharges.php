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
* CalculateCharges
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class CalculateCharges implements FragmentInterface
{
    
    
    /** @var string */
    protected $shippingModule;
    
    /** @var string */
    protected $shippingModuleData;
    

    
    /**
     * getShippingModule
     *
     * @return string
    */
    public function getShippingModule()
    {
        return $this->shippingModule;
    }
    
    /**
     * setShippingModule
     *
     * @param string $shippingModule
     *
     * @return self
    */
    public function setShippingModule($shippingModule)
    {
        $this->shippingModule = $shippingModule;
        return $this;
    }
    
    /**
     * getShippingModuleData
     *
     * @return string
    */
    public function getShippingModuleData()
    {
        return $this->shippingModuleData;
    }
    
    /**
     * setShippingModuleData
     *
     * @param string $shippingModuleData
     *
     * @return self
    */
    public function setShippingModuleData($shippingModuleData)
    {
        $this->shippingModuleData = $shippingModuleData;
        return $this;
    }
    

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <CalculateCharges>
     *      <ShippingModule>flatrate</ShippingModule>
     *      <ShippingModuleData>test</ShippingModuleData>
     * </CalculateCharges>
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
        