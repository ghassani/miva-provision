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
* ProductFieldValue
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ProductFieldValue implements Model\StoreFragmentInterface
{

    public $productCode;
    
    public $fieldCode;
    
    public $value;

    /**
     * @param mixed $fieldCode
     */
    public function setFieldCode($fieldCode)
    {
        $this->fieldCode = $fieldCode;
        return $this;
    }

    /**
     * @param mixed $productCode
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
    


    
    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <Module code="customfields" feature="fields_prod">
     *  <ProductField_Value product="FOIL-HYDRANGEA-4OZ" field="shippingexemptind">No</ProductField_Value>
     * </Module>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<Module />');
        
        $xmlObject->addAttribute('code',    'customfields');
        $xmlObject->addAttribute('feature', 'fields_prod');
        
        
        $mainTag = $xmlObject->addChild('ProductField_Value', $this->getValue());
        
        $mainTag->addAttribute('product', $this->getProductCode());
        $mainTag->addAttribute('field', $this->getFieldCode());

        
        return $xmlObject;
    }
}