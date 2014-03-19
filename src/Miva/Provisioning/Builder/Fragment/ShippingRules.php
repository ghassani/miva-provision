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
* ShippingRules
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ShippingRules implements FragmentInterface
{
    
    
    /** @var string */
    protected $requiredShippingRedirectPageCode;
    
    /** @var string */
    protected $fallbackShippingMethod;
    

    
    /**
     * getRequiredShippingRedirectPageCode
     *
     * @return string
    */
    public function getRequiredShippingRedirectPageCode()
    {
        return $this->requiredShippingRedirectPageCode;
    }
    
    /**
     * setRequiredShippingRedirectPageCode
     *
     * @param string $requiredShippingRedirectPageCode
     *
     * @return self
    */
    public function setRequiredShippingRedirectPageCode($requiredShippingRedirectPageCode)
    {
        $this->requiredShippingRedirectPageCode = $requiredShippingRedirectPageCode;
        return $this;
    }
    
    /**
     * getFallbackShippingMethod
     *
     * @return string
    */
    public function getFallbackShippingMethod()
    {
        return $this->fallbackShippingMethod;
    }
    
    /**
     * setFallbackShippingMethod
     *
     * @param string $fallbackShippingMethod
     *
     * @return self
    */
    public function setFallbackShippingMethod($fallbackShippingMethod)
    {
        $this->fallbackShippingMethod = $fallbackShippingMethod;
        return $this;
    }
    

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <?xml version="1.0"?>
<ShippingRules_Update>
            <RequiredShippingRedirectPageCode>OCST</RequiredShippingRedirectPageCode>
            <FallbackShippingMethod>
                <Description>Estimated Shipping</Description>
                <Type>Fixed|PercentOfSubTotal</Type>
                <Amount>1.23</Amount>
            </FallbackShippingMethod>
        </ShippingRules_Update>

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
        