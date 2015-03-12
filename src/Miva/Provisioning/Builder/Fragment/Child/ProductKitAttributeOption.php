<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@miva.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning\Builder\Fragment\Child;

use Miva\Version;
use Miva\Provisioning\Builder\Helper\XmlHelper;
use Miva\Provisioning\Builder\SimpleXMLElement;
use Miva\Provisioning\Builder\Fragment\Model\ChildFragmentInterface;

/**
* ProductVariantAttributeOption
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class ProductVariantAttributeOption implements ChildFragmentInterface
{
    /** @var string */
    public $attributeCode;

    /** @var string */
    public $optionCode;

    
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
     *  <Attribute_Option attribute_code="select" option_code="s1" />
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<Attribute_Option />');

        $xmlObject->addAttribute('attribute_code', $this->getAttributeCode());
        $xmlObject->addAttribute('option_code', $this->getOptionCode());        
                
        return $xmlObject;
    }     
}