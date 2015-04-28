<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@miva.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning\Builder\Fragment\Module\CustomFields;

use Miva\Version;
use Miva\Provisioning\Builder\Helper\XmlHelper;
use Miva\Provisioning\Builder\SimpleXMLElement;
use Miva\Provisioning\Builder\Fragment\Model\StoreFragmentInterface;

/**
* ProductFieldValue
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class ProductFieldValue implements StoreFragmentInterface
{

    public $productCode;
    
    public $fieldCode;
    
    public $value;

    /**
     * @return mixed
     */
    public function getFieldCode()
    {
        return $this->fieldCode;
    }

    /**
     * @param mixed $fieldCode
     */
    public function setFieldCode($fieldCode)
    {
        $this->fieldCode = $fieldCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProductCode()
    {
        return $this->productCode;
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
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
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