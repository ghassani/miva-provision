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

use Miva\Provisioning\Builder\Fragment\Child\ProductKitPart;
use Miva\Version;
use Miva\Provisioning\Builder\Helper\XmlHelper;
use Miva\Provisioning\Builder\SimpleXMLElement;
use Miva\Provisioning\Builder\Fragment\Model\StoreFragmentInterface;
use Miva\Provisioning\Builder\Fragment\Child\ProductKitAttributeOption;
use Miva\Provisioning\Builder\Fragment\Child\ProductKitAttributeBoolean;
use Miva\Provisioning\Builder\Fragment\Child\ProductKitAttributeTemplateAttributeBoolean;
use Miva\Provisioning\Builder\Fragment\Child\ProductKitTemplateAttributeOption;

/**
* ProductKitUpdate
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class ProductKitUpdate implements StoreFragmentInterface
{
        
    /** @var string */
    public $productCode;
    
    /** @var array */
    public $attributes = array();
    
    /** @var array */
    public $parts = array();
    
    /**
     * getProductCode
     *
     * @return string
    */
    public function getProductCode()
    {
    	return $this->productCode;
    }

    /**
     * setProductCode
     *
     * @param string productCode
     *
     * @return self
    */
    public function setProductCode($productCode)
    {
	    $this->productCode = $productCode;
	    return $this;
    }
    
    /**
     * getAttributes
     *
     * @return array
    */
    public function getAttributes()
    {
    	return $this->attributes;
    }

    /**
     * setAttributes
     *
     * @param array attributes
     *
     * @return self
    */
    public function setAttributes(array $attributes)
    {
        foreach($attributes as $_attributes) {
            if (!$this->isValidOption($_attributes)) {
                throw new \InvalidArgumentException('ProductKitAdd::addOption requires one of ProductKitAttributeOption, ProductKitAttributeBoolean, ProductKitAttributeTemplateAttributeBoolean or ProductKitAttributeTemplateAttributeOption');
            }
        }
	    $this->attributes = $attributes;
	    return $this;
    }
    
    /**
     * addAttribute
     *
     * @param Model\ProductKitFragmentInterface attributes
     *
     * @return self
    */
    public function addAttribute($attribute)
    {
        if (!$this->isValidOption($attribute)) {
            throw new \InvalidArgumentException('ProductKitAdd::addOption requires one of ProductKitAttributeOption, ProductKitAttributeBoolean, ProductKitAttributeTemplateAttributeBoolean or ProductKitAttributeTemplateAttributeOption');
        }
        $this->attributes[] = $attribute;
	    return $this;
    }
    
    
    /**
     * getParts
     *
     * @return array
    */
    public function getParts()
    {
        return $this->parts;
    }

    /**
     * setParts
     *
     * @param array parts
     *
     * @return self
    */
    public function setParts(array $parts)
    {
        foreach($parts as $part) {
            if (!$part instanceof ProductKitPart) {
                throw new \InvalidArgumentException('ProductKitUpdate::setParts Requires an array of ProductKitPart');
            }
        }
        $this->parts = $parts;
        return $this;
    }
    
    /**
     * addPart
     *
     * @param ProductKitPart parts
     *
     * @return self
    */
    public function addPart(ProductKitPart $part)
    {
        $this->parts[] = $part;
        return $this;
    }

    /**
     * isValidOption
     *
     * @param $option
     * @return bool
     */
    private function isValidOption($option)
    {
        return $option instanceof ProductKitAttributeOption
        || $option instanceof ProductKitAttributeBoolean
        || $option instanceof ProductKitAttributeTemplateAttributeBoolean
        || $option instanceof ProductKitAttributeTemplateAttributeOption;
    }

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <ProductKit_Update product_code="test">
     *      <AttributeTemplateAttribute_Option attribute_code="test" attributetemplateattribute_code="radio" option_code="r2"/>
     *      <Parts>
     *          <Part product_code="part" quantity="4"/>
     *      </Parts>
     * </ProductKit_Update>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<ProductKit_Update />');
        
        $xmlObject->addAttribute('product_code', $this->getProductCode());
                
        foreach($this->getAttributes() as $attribute) {
            XmlHelper::appendToParent($xmlObject, $attribute->toXml());
        }
        
        if (count($this->getParts())) {
            $partsXmlRoot = $xmlObject->addChild('Parts');
            foreach($this->getParts() as $part) {
                XmlHelper::appendToParent($partsXmlRoot, $part->toXml());
            }
        }
        
        return $xmlObject;
    }

}
       
