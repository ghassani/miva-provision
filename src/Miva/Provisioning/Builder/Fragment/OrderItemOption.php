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
* OrderItemOption
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class OrderItemOption implements FragmentInterface
{
    
    
    /** @var string */
    protected $attributeCode;
    
    /** @var int */
    protected $price;
    
    /** @var string */
    protected $optionCode;
    

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
        