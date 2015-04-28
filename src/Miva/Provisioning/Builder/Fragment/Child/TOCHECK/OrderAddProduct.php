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
use Miva\Provisioning\Builder\Fragment\Model\FragmentInterface;

/**
 * OrderAddProduct
 *
 * @author Gassan Idriss <gidriss@miva.com>
*/
class OrderAddProduct implements FragmentInterface
{
    
    
    /** @var int */
    protected $orderId;
    
    /** @var string */
    protected $code;
    
    /** @var int */
    protected $quantity;
    
    /** @var array */
    protected $options = array();
    
    /** @var OrderAddProductShipment|null */
    public $shipment;
    
    /**
     * getOrderId
     *
     * @return int
    */
    public function getOrderId()
    {
        return $this->orderId;
    }
    
    /**
     * setOrderId
     *
     * @param int $orderId
     *
     * @return self
    */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }
    
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
     * @param array options
     *
     * @return self
    */
    public function setOptions(array $options)
    {
        foreach($options as $_options) {
            if (!$_options instanceof OrderItemOption) {
                throw new \InvalidArgumentException('Requires an array of OrderItemOption');
            }
        }
        $this->options = $options;
        return $this;
    }
    
    /**
     * addOption
     *
     * @param OrderItemOption options
     *
     * @return self
    */
    public function addOption(OrderItemOption $options)
    {
        $this->options[] = $options;
        return $this;
    }
    
    
    /**
     * getShipment
     *
     * @return OrderAddProductShipment|null
    */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * setShipment
     *
     * @param OrderAddProductShipment|null shipment
     *
     * @return self
    */
    public function setShipment(OrderAddProductShipment $shipment = null)
    {
        $this->shipment = $shipment;
        return $this;
    }
    

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <Order_Add_Product order_id="1000" code="test">                 (Required, order_id, code)
     *       <Quantity>1</Quantity>   
     *       <Options>
     *           <Option>
     *               <AttributeCode>test</AttributeCode>
     *               <Value>Yes</Value>
     *           </Option>
     *           <Option>
     *               <AttributeCode>template</AttributeCode>
     *               <AttributeTemplateAttributeCode>template_attr</AttributeTemplateAttributeCode>
     *               <Value>v1</Value>
     *           </Option>
     *       </Options>
     *       <Shipment>                                                  (Optional)
     *           <Code>Ship_Code</Code>                                  (Optional)
     *           <Cost>1</Cost>                                          (Optional)
     *           <MarkAsShipped>Yes</MarkAsShipped>                      (Optional)
     *           <TrackingNumber>1111111111</TrackingNumber>             (Required)
     *           <TrackingType>FedEx</TrackingType>                      (Required)
     *           <ShipDate>                                              (Optional)
     *               <Day>7</Day>
     *               <Month>9</Month>
     *               <Year>2012</Year>
     *           </ShipDate>
     *       </Shipment>
     *       <Shipment />                                                (Optional)
     *   </Order_Add_Product>
    */
    public function toXml()
    {
        $xmlObject = new SimpleXmlElement('<Order_Add_Product />');
        
        $xmlObject->addAttribute('order_id', $this->getOrderId());
        $xmlObject->addAttribute('code', $this->getCode());
        
        $xmlObject->addChild('Quantity', $this->getQuantity());
        
        return $xmlObject;
    }
}
        
        