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
* AttributeTemplateAttributeOption
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class AttributeTemplateAttributeOption implements Model\ProductVariantOptionFragmentInterface
{
    /** @var string */
    protected $attributeCode;
    
    /** @var string */
    protected $attributeTemplateAttributeCode;

    /** @var string */
    protected $optionCode;
    
    /**
     * Constructor
     * 
     * @param string $attributeCode
     * @parma string $attributeTemplateAttributeCode
     * @param string $optionCode
    */
    public function __construct($attributeCode = null, $attributeTemplateAttributeCode = null, $optionCode = null)
    {
        $this->attributeCode = $attributeCode;
        $this->attributeTemplateAttributeCode = $attributeTemplateAttributeCode;
        $this->optionCode = $optionCode;
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
     * getOptionCode
     *
     * @return string
    */
    public function getOptionCode()
    {
    	return $this->optionCode;
    }

    /**
     * setOptionCode
     *
     * @param string optionCode
     *
     * @return self
    */
    public function setOptionCode($optionCode)
    {
	    $this->optionCode = $optionCode;
	    return $this;
    }
    
    
         
    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <AttributeTemplateAttribute_Option attribute_code="test" attributetemplateattribute_code="radio" option_code="r2" />
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<AttributeTemplateAttribute_Option />');

        $xmlObject->addAttribute('attribute_code', $this->getAttributeCode());
        $xmlObject->addAttribute('attributetemplateattribute_code', $this->getAttributeTemplateAttributeCode());
        $xmlObject->addAttribute('option_code', $this->getOptionCode());        
                
        return $xmlObject;
    }     
}