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

/**
 * OrderItem
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class OrderItem implements FragmentInterface
{
    
    
    /** @var string */
    protected $code;
    
    /** @var string */
    protected $name;
    
    /** @var int */
    protected $price;
    
    /** @var int */
    protected $weight;
    
    /** @var int */
    protected $quantity;
    
    /** @var array */
    protected $options = array();
    

    
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
    */
    public function setOptions(array $options)
    {
        $this->options = $options;
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
        $xmlObject = new \SimpleXmlElement('<Item></Item>');
        
        $xmlObject->addChild('Code', $this->getCode());
        $xmlObject->addChild('Name', $this->getName());
        $xmlObject->addChild('Price', $this->getPrice());
        $xmlObject->addChild('Weight', $this->getWeight());
        $xmlObject->addChild('Quantity', $this->getQuantity());
        
        if($this->getOptions()) {
            foreach($this->getOptions() as $options) {
                
            }
        }
        
        return $xmlObject;
    }
}
        