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
 * OrderItem
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class OrderItem implements Model\FragmentInterface
{
    
    
    /** @var string */
    public $code;
    
    /** @var string */
    public $name;
    
    /** @var int */
    public $price;
    
    /** @var int */
    public $weight;
    
    /** @var int */
    public $quantity;
    
    /** @var array */
    public $options = array();
    

    
    /**
     * getCode
     *
     * @return string
    */
    public function getCode()
    {
        return $this->code;
    }
    
    /**
     * setCode
     *
     * @param string $code
     *
     * @return self
    */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }
    
    /**
     * getName
     *
     * @return string
    */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * setName
     *
     * @param string $name
     *
     * @return self
    */
    public function setName($name)
    {
        $this->name = $name;
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
     * getWeight
     *
     * @return int
    */
    public function getWeight()
    {
        return $this->weight;
    }
    
    /**
     * setWeight
     *
     * @param int $weight
     *
     * @return self
    */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }
    
    /**
     * getQuantity
     *
     * @return int
    */
    public function getQuantity()
    {
        return $this->quantity;
    }
    
    /**
     * setQuantity
     *
     * @param int $quantity
     *
     * @return self
    */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
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
     * @throws InvalidArgumentException
    */
    public function setOptions(array $options)
    {
        foreach ($options as $option) {
            if(!$option instanceof OrderItemOption) {
                throw new \InvalidArgumentException('OrderItem::setOptions must be an array of OrderItemOption');
            }
        }
        $this->options = $options;
        return $this;
    }
    
    /**
     * addOption
     *
     * @param OrderItemOption $option
     *
     * @return self
    */
    public function addOption(OrderItemOption $option)
    {
        $this->options[] = $options;
        return $this;
    }
    
    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <Item>
     *      <Code>test</Code>
     *      <Name>Test Product #1</Name>
     *      <Price>1</Price>
     *      <Weight>0</Weight>
     *      <Quantity>1</Quantity>
     *      <Options>
     *          <Option>
     *              <AttributeCode>test</AttributeCode>
     *          </Option>
     *          <Option>
     *              <AttributeCode>template_attr</AttributeCode>
     *              <Price>1.00</Price>
     *              <OptionCode>v1</OptionCode>
     *          </Option>
     *      </Options>
     * </Item>
     *
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<Item></Item>');
        
        $xmlObject->addChild('Code', $this->getCode());
        $xmlObject->addChild('Name', $this->getName());
        $xmlObject->addChild('Price', $this->getPrice());
        $xmlObject->addChild('Weight', $this->getWeight());
        $xmlObject->addChild('Quantity', $this->getQuantity());
        
        if(count($this->getOptions())) {
            $optionsXmlRoot = $xmlObject->addChild('Options');
            foreach($this->getOptions() as $option) {
                XmlHelper::appendToParent($optionsXmlRoot, $option->toXml($version, $options));
            }
        }
        
        return $xmlObject;
    }
}
        