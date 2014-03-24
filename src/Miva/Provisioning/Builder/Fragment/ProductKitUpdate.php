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
* ProductKitUpdate
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ProductKitUpdate implements Model\StoreFragmentInterface
{
        
    /** @var string */
    protected $productCode;
    
    /** @var array */
    protected $attributes = array();
    
    /** @var array */
    protected $parts = array();
    
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
       
