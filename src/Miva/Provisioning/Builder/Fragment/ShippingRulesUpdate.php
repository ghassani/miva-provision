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
* ShippingRulesUpdate
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ShippingRulesUpdate implements Model\StoreFragmentInterface
{
    
    
    /** @var string */
    public $requiredShippingRedirectPageCode;
    
    /** @var array */
    public $fallbackShippingMethod = array(
        'Description' => null,
        'Type' => null, 
        'Amount' => null
    );
    

    
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
     * @return array
    */
    public function getFallbackShippingMethod()
    {
        return $this->fallbackShippingMethod;
    }
    
    /**
     * setFallbackShippingMethod
     *
     * @param string $description
     * @param string $type
     * @param string $amount
     * 
     *
     * @return self
    */
    public function setFallbackShippingMethod($description, $type, $amount)
    {
        $this->fallbackShippingMethod = array($description, $type, $amount);
        return $this;
    }
    

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <ShippingRules_Update>
     *       <RequiredShippingRedirectPageCode>OCST</RequiredShippingRedirectPageCode>
     *       <FallbackShippingMethod>
     *           <Description>Estimated Shipping</Description>
     *           <Type>Fixed|PercentOfSubTotal</Type>
     *           <Amount>1.23</Amount>
     *       </FallbackShippingMethod>
     *  </ShippingRules_Update>
     *
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<ShippingRules_Update />');
        
        $xmlObject->addChild('RequiredShippingRedirectPageCode', $this->getRequiredShippingRedirectPageCode());
        
        $fallbackShipping = $this->getFallbackShippingMethod();
        $fallbackShippingXml = $xmlObject->addChild('FallbackShippingMethod');
       
        foreach (array('Description', 'Type', 'Amount') as $field) {
            $value = isset($fallbackShipping[$field]) && !empty($fallbackShipping[$field]) ? $fallbackShipping[$field] : null;
            $fallbackShippingXml->addChild($field, $value);
        }
               
        return $xmlObject;
    }
}        