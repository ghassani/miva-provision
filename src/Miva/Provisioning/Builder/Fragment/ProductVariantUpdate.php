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
use Miva\Provisioning\Builder\Fragment\Model\StoreFragmentInterface;

/**
* ProductVariantUpdate
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class ProductVariantUpdate implements Model\StoreFragmentInterface
{
    /** @var string $productCode */
    protected $productCode;

    /** @var array of ProductVariantOption */
    protected $options = array();

    /** @var array ProductVariantPart */
    protected $parts = array();

    /** @var array */
    protected $productVariantPricing = null;

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
            if (!$this->isValidOption($option)) {
                throw new \InvalidArgumentException('ProductVariantAdd::setOptions requires an array of ProductVariantAttributeOption, ProductVariantAttributeBoolean, ProductVariantAttributeTemplateAttributeBoolean or ProductVariantAttributeTemplateAttributeOption');
            }
        }
        $this->options = $options;
        return $this;
    }

    /**
     * addOption
     *
     * @param mixed option
     *
     * @return self
     */
    public function addOption($option)
    {
        if (!$this->isValidOption($option)){
            throw new \InvalidArgumentException('ProductVariantAdd::addOption requires one of ProductVariantAttributeOption, ProductVariantAttributeBoolean, ProductVariantAttributeTemplateAttributeBoolean or ProductVariantAttributeTemplateAttributeOption');
        }

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
                throw new \InvalidArgumentException('ProductVariantAdd::setParts Requires an array of ProductVariantAddPart');
            }
        }
        $this->parts = $parts;
        return $this;
    }

    /**
     * addPart
     *
     * @param ProductVariantAddPart parts
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
     * @return ProductVariantProductVariantPricing
     */
    public function getProductVariantPricing()
    {
        return $this->productVariantPricing;
    }

    /**
     * setProductVariantPricing
     *
     * @param ProductVariantProductVariantPricing $productVariantPricing
     *
     * @return self
     */
    public function setProductVariantPricing(ProductVariantProductVariantPricing $productVariantPricing)
    {
        $this->productVariantPricing =  $productVariantPricing;
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
        return $option instanceof ProductVariantAttributeOption
        || $option instanceof ProductVariantAttributeBoolean
        || $option instanceof ProductVariantAttributeTemplateAttributeBoolean
        || $option instanceof ProductVariantAttributeTemplateAttributeOption;
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

        if ($this->getProductVariantPricing()) {
            XmlHelper::appendToParent($xmlObject, $this->getProductVariantPricing()->toXml());
        }

        return $xmlObject;
    }     
}
