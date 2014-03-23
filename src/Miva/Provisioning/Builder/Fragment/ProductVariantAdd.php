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
* ProductVariantAdd
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ProductVariantAdd implements StoreFragmentInterface
{
    
    /** @var string */
    protected $productCode;
    
    /** @var array */
    protected $options;
    
    /** @var array */
    protected $parts = array();
    
    /** @var array */
    protected $productVariantPricing = array(null, null, null, null);
    
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
     * @param string $productCode
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
     * @param array $options
     *
     * @return self
    */
    public function setOptions(array $options)
    {
        $this->options = $options;
        return $this;
    }
    
    /**
     * addOption
     *
     * @param ProductVariantOption $option
     *
     * @return self
    */
    public function addOption(ProductVariantOption $option)
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
     * @param string $parts
     *
     * @return array
    */
    public function setParts(array $parts)
    {
        $this->parts = $parts;
        return $this;
    }
    /**
     * addPart
     *
     * @param Part $part
     * 
     * @return self
    */
    public function addPart(Part $part)
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
     * @param float $weight
     *
     * @return self
    */
    public function setProductVariantPricing($method, $price, $cost, $weight)
    {
        $this->productVariantPricing = array($method, $price, $cost, $weight);
        return $this;
    }
    

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <ProductVariant_Add product_code="test">
     *       <Options>
     *           <Attribute_Option attribute_code="select" option_code="s1" />
     *           <Attribute_Boolean attribute_code="text" present="true" />
     *           <AttributeTemplateAttribute_Boolean attribute_code="test" attributetemplateattribute_code="checkbox" present="false" />
     *           <AttributeTemplateAttribute_Option attribute_code="test" attributetemplateattribute_code="radio" option_code="r2" />
     *       </Options>
     *
     *       <Parts>
     *           <Part product_code="part" quantity="5" />
     *       </Parts>
     *
     *       <ProductVariantPricing>
     *           <Method>specific</Method>
     *           <Price>5.43</Price>
     *           <Cost>4.31</Cost>
     *           <Weight>3.21</Weight>
     *       </ProductVariantPricing>
     *   </ProductVariant_Add>
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