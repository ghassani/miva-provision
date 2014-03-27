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
* ProductVariantUpdate
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ProductVariantUpdate implements Model\StoreFragmentInterface
{
    /** @var string $productCode */
    public $productCode;
    
    /** @var array */
    public $options = array();
    
    /** @var array */
    public $parts = array();
    
    /** @var array */
    public $productVariantPricing = array(
        'Method' => null,
        'Price' => null,
        'Cost' => null,
        'Weight' => null
    );
    
    /**
     * Constructor
     * 
     * @param string $productCode
     * @param array $options
     * @param array $parts
     * @param array $productVariantPricing
     */
     public function __construct($productCode = null, array $options = array(), array $parts = array(), array $productVariantPricing = array())
     {
         $this->productCode = $productCode;
         $this->setOptions($options);
         $this->setParts($parts);
         
         foreach(array_keys($this->productVariantPricing) as $key) {
             if(isset($productVariantPricing[$key])){
                 $this->productVariantPricing = $productVariantPricing[$key];
             }
         }
     }

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
     * getOptions
     *
     * @return array
    */
    public function getOptions()
    {
    	return $this->options;
    }

    /**
     * setOptions
     *
     * @param array options
     *
     * @return self
    */
    public function setOptions(array $options)
    {
        foreach($options as $option) {
            if (!$option instanceof Model\ProductVariantOptionFragmentInterface) {
                throw new \InvalidArgumentException('ProductVariantUpdate::setOptions requires an array of ProductVariantOptionFragmentInterface');
            }
        }
	    $this->options = $options;
	    return $this;
    }
    
    /**
     * addOption
     *
     * @param ProductVariantOption options
     *
     * @return self
    */
    public function addOption(Model\ProductVariantOptionFragmentInterface $option)
    {
	    $this->options[] = $option;
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
            if (!$part instanceof ProductVariantPart) {
                throw new \InvalidArgumentException('ProductVariantUpdate::setParts Requires an array of ProductVariantPart');
            }
        }
	    $this->parts = $parts;
	    return $this;
    }
    
    /**
     * addPart
     *
     * @param ProductVariantPart parts
     *
     * @return self
    */
    public function addPart(ProductVariantPart $part)
    {
	    $this->parts[] = $part;
	    return $this;
    }
    
    /**
     * getProductVariantPricing
     *
     * @return array
    */
    public function getProductVariantPricing()
    {
    	return $this->productVariantPricing;
    }

    /**
     * setProductVariantPricing
     *
     * @param string $method 
     * @param float $price 
     * @param float $cost
     * @parma float $weight
     *
     * @return self
    */
    public function setProductVariantPricing($method = null, $price = null, $cost = null, $weight = null)
    {
	    $this->productVariantPricing =  array(
            'Method' => $method,
            'Price' => $price,
            'Cost' => $cost,
            'Weight' => $weight
        );
	    return $this;
    }
    
    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <ProductVariant_Update product_code="test">
     *      <Options>
     *          <Attribute_Option attribute_code="select" option_code="s1"/>
     *          <Attribute_Boolean attribute_code="text" present="true"/>
     *          <AttributeTemplateAttribute_Boolean attribute_code="test" attributetemplateattribute_code="checkbox" present="false"/>
     *          <AttributeTemplateAttribute_Option attribute_code="test" attributetemplateattribute_code="radio" option_code="r2"/>
     *      </Options>
     *      <Parts>
     *          <Part product_code="part" quantity="2"/>
     *          <Part product_code="test" quantity="100"/>
     *      </Parts>
     *      <ProductVariantPricing>
     *          <Method>master</Method>
     *          <Price>5.43</Price>
     *          <Cost>4.31</Cost>
     *          <Weight>3.21</Weight>
     *      </ProductVariantPricing>
     * </ProductVariant_Update>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<ProductVariant_Update />');

        $xmlObject->addAttribute('product_code', $this->getProductCode());
        
        if (count($this->getOptions())) {
            $optionsRootXml = $xmlObject->addChild('Options');
            foreach($this->getOptions() as $option) {
                XmlHelper::appendToParent($optionsRootXml, $option->toXml());
            }
        }
        
        if (count($this->getParts())) {
            $partsRootXml = $xmlObject->addChild('Parts');
            foreach($this->getParts() as $part) {
                XmlHelper::appendToParent($partsRootXml, $part->toXml());
            }
        }
        
        $productVariantPricing = $this->getProductVariantPricing();
        if (implode('', $productVariantPricing)) {
            $productVariantPricingXml = $xmlObject->addChild('ProductVariantPricing');
            foreach(array('Method','Price','Cost','Weight') as $field) {
                if (isset($productVariantPricing[$field]) && !empty($productVariantPricing[$field])) {
                    $productVariantPricingXml->addChild($field, $productVariantPricing[$field]);
                }
            }
        }
        return $xmlObject;
    }     
}
