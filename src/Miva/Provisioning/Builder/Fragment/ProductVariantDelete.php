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
* ProductVariantDelete
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ProductVariantDelete implements Model\StoreFragmentInterface
{
    /** @var string $productCode */
    protected $productCode;
    
    /** @var array */
    protected $options = array();
    
        
    /**
     * Constructor
     * 
     * @param string $productCode
     * @param array $options
     */
     public function __construct($productCode = null, array $options = array())
     {
         $this->productCode = $productCode;
         $this->setOptions($options);
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
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <ProductVariant_Delete product_code="test">
     *       <Options>
     *           <Attribute_Option attribute_code="select" option_code="s1"/>
     *           <Attribute_Boolean attribute_code="text" present="true"/>
     *           <AttributeTemplateAttribute_Boolean attribute_code="test" attributetemplateattribute_code="checkbox" present="false"/>
     *           <AttributeTemplateAttribute_Option attribute_code="test" attributetemplateattribute_code="radio" option_code="r2"/>
     *       </Options>
     * </ProductVariant_Delete>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<ProductVariant_Delete />');

        $xmlObject->addAttribute('product_code', $this->getProductCode());
        
        if (count($this->getOptions())) {
            $optionsRootXml = $xmlObject->addChild('Options');
            foreach($this->getOptions() as $option) {
                XmlHelper::appendToParent($optionsRootXml, $option->toXml());
            }
        }
        
        return $xmlObject;
    }     
}