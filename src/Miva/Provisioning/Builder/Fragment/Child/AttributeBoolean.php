<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@miva.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning\Builder\Fragment;

use Miva\Version;
use Miva\Provisioning\Builder\Helper\XmlHelper;
use Miva\Provisioning\Builder\SimpleXMLElement;

/**
* AttributeBoolean
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class AttributeBoolean implements Model\ProductVariantOptionFragmentInterface
{
    
    /** @var string */
    public $attributeCode;
    
    /** @var bool */
    public $present = false;
   
    /**
     * Constructor
     * 
     * @param string $attributeCode
     * @param bool $present
    */
    public function __construct($attributeCode = null, $present = false)
    {
        $this->attributeCode = $attributeCode;
        $this->present = true == $present ? true : false;
    }
   
   /**
     * getAttributeCode
     *
     * @return string
    */
    public function getAttributeCode()
    {
        return $this->attributeCode;
    }

    /**
     * setAttributeCode
     *
     * @param string attributeCode
     *
     * @return self
    */
    public function setAttributeCode($attributeCode)
    {
        $this->attributeCode = $attributeCode;
        return $this;
    }
    
    /**
     * getPresent
     *
     * @return bool
    */
    public function getPresent()
    {
        return $this->present;
    }

    /**
     * setPresent
     *
     * @param bool present
     *
     * @return self
    */
    public function setPresent($present)
    {
        $this->present = true == $present ? true : false;;
        return $this;
    }

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <Attribute_Boolean attribute_code="text" present="true" />
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<Attribute_Boolean />');

        $xmlObject->addAttribute('attribute_code', $this->getAttributeCode());
        $xmlObject->addAttribute('present', $this->getPresent() ? 'true' : 'false');        
                
        return $xmlObject;
    }     
}