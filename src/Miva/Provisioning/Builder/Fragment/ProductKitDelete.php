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
* ProductKitDelete
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ProductKitDelete implements Model\StoreFragmentInterface
{
        
    /** @var string */
    public $productCode;
    
    /** @var array */
    public $attributes = array();
    
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
            if (!$_attributes instanceof Model\ProductKitFragmentInterface) {
                throw new \InvalidArgumentException('ProductKitUpdate::setAttributes Requires an array of Model\ProductKitFragmentInterface');
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
    public function addAttribute(Model\ProductKitFragmentInterface $attribute)
    {
        $this->attributes[] = $attribute;
        return $this;
    }
    

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <ProductKit_Delete product_code="test">
     *      <AttributeTemplateAttribute_Boolean attribute_code="test" attributetemplateattribute_code="checkbox" present="true"/>
     * </ProductKit_Delete>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<ProductKit_Delete />');
        
        $xmlObject->addAttribute('product_code', $this->getProductCode());
                
        foreach($this->getAttributes() as $attribute) {
            XmlHelper::appendToParent($xmlObject, $attribute->toXml());
        }
        
        return $xmlObject;
    }

}
       
