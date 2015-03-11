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

/**
* OrderItemOption
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class OrderItemOption implements Model\ChildFragmentInterface
{
    
    
    /** @var string */
    public $attributeCode;
    
    /** @var int */
    public $price;
    
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
     * addAttributeCode
     *
     * @param string $attributeCode
     *
     * @return self
    */
    public function addAttributeCode($attributeCode)
    {
        $this->attributeCode = $attributeCode;
        return $this;
    }
    
    /**
     * getPrice
     *
     * @return int
    */
    public function getPrice()
    {
        return $this->price;
    }
    
    /**
     * setPrice
     *
     * @param int $price
     *
     * @return self
    */
    public function setPrice($price)
    {
        $this->price = $price;
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
     * @param string $optionCode
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
     * <Option>
     *      <AttributeCode>template_attr</AttributeCode>
     *      <Price>1.00</Price>
     *      <OptionCode>v1</OptionCode>
     * </Option>
     *
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<Option />');

        $xmlObject->addChild('AttributeCode', $this->getAttributeCode());
        
        if (0 <= $this->getPrice()) {
            $xmlObject->addChild('Price', $this->getPrice());
        }

        if ($this->getOptionCode()) {
            $xmlObject->addChild('OptionCode', $this->getOptionCode());
        }

        return $xmlObject;
    }
}
        