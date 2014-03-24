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
* AttributeTemplateAttributeBoolean
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class AttributeTemplateAttributeBoolean implements Model\ProductVariantOptionFragmentInterface
{
    /** @var string */
    protected $attributeCode;
    
    /** @var string */
    protected $attributeTemplateAttributeCode;

    /** @var bool */
    protected $present = false;
   
    /**
     * Constructor
     * 
     * @param string $attributeCode
     * @param string $attributeTemplateAttributeCode
     * @param bool $present
    */
    public function __construct($attributeCode = null, $attributeTemplateAttributeCode = null, $present = false)
    {
        $this->attributeCode = $attributeCode;
        $this->attributeTemplateAttributeCode = $attributeTemplateAttributeCode;
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
     * getAttributeTemplateAttributeCode
     *
     * @return string
    */
    public function getAttributeTemplateAttributeCode()
    {
    	return $this->attributeTemplateAttributeCode;
    }

    /**
     * setAttributeTemplateAttributeCode
     *
     * @param string attributeTemplateAttributeCode
     *
     * @return self
    */
    public function setAttributeTemplateAttributeCode($attributeTemplateAttributeCode)
    {
	    $this->attributeTemplateAttributeCode = $attributeTemplateAttributeCode;
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
	    $this->present = $present;
	    return $this;
    }
    
         
    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <AttributeTemplateAttribute_Boolean attribute_code="test" attributetemplateattribute_code="checkbox" present="false" />
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<AttributeTemplateAttribute_Boolean />');

        $xmlObject->addAttribute('attribute_code', $this->getAttributeCode());
        $xmlObject->addAttribute('attributetemplateattribute_code', $this->getAttributeTemplateAttributeCode());
        $xmlObject->addAttribute('present', $this->getPresent() ? true : false);        
                
        return $xmlObject;
    }     
}