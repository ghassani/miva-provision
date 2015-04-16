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
 * OrderUpdateItem
 *
 * @author Gassan Idriss <gidriss@miva.com>
 */
class OrderUpdateItem implements StoreFragmentInterface
{

    protected $orderId;

    protected $lineId;

    protected $code;

    protected $name;

    protected $price;

    protected $weight;

    protected $taxable = false;

    protected $upsold = false;

    protected $quantity;

    protected $options = array();

    protected $shipments = array();

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param mixed $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param array $options
     */
    public function setOptions(array $options = array())
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @param OrderItemOption $option
     * @return $this
     */
    public function addOption(OrderItemOption $option)
    {
        $this->options[] = $option;
        return $this;
    }

    /**
     * @return array
     */
    public function getShipments()
    {
        return $this->shipments;
    }

    /**
     * @param array $shipments
     */
    public function setShipments(array $shipments = array())
    {
        $this->shipments = $shipments;
        return $this;
    }

    /**
     * @param OrderItemShipment $shipment
     */
    public function addShipment(OrderAddItemShipment $shipment)
    {
        $this->shipments[] = $shipment;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLineId()
    {
        return $this->lineId;
    }

    /**
     * @param mixed $lineId
     */
    public function setLineId($lineId)
    {
        $this->lineId = $lineId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getTaxable()
    {
        return $this->taxable;
    }

    /**
     * @param boolean $taxable
     */
    public function setTaxable($taxable)
    {
        $this->taxable = $taxable;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpsold()
    {
        return $this->upsold;
    }

    /**
     * @param boolean $upsold
     */
    public function setUpsold($upsold)
    {
        $this->upsold = $upsold;
        return $this;
    }




    /**
     * {@inheritDoc}
     *
     * Format:
     *
     * <Order_Update_Item order_id="1000" line_id="1000">                                (Required - order_id, line_id)
     *  <Code>test</Code>
     *  <Name>Test Product #1</Name>
     *  <Price>1</Price>
     *  <Weight>0</Weight>
     *  <Quantity>1</Quantity>
     *
     *  <Taxable>0|1</Taxable>
     *  <Upsold>0|1</Upsold>
     *  <Options>
     *      <Option>
     *          <AttributeCode>test</AttributeCode>
     *      </Option>
     *      <Option>
     *          <AttributeCode>template_attr</AttributeCode>
     *          <Price>1.00</Price>
     *          <OptionCode>v1</OptionCode>
     *      </Option>
     *  </Options>
     *  <Shipment>                                                  (Optional)
     *      <Code>Ship_Code</Code>                                  (Optional)
     *      <Cost>1</Cost>                                          (Optional)
     *      <MarkAsShipped>Yes</MarkAsShipped>                      (Optional)
     *      <TrackingNumber>1111111111</TrackingNumber>             (Required)
     *      <TrackingType>FedEx</TrackingType>                      (Required)
     *      <ShipDate>                                              (Optional)
     *          <Day>7</Day>
     *          <Month>9</Month>
     *          <Year>2012</Year>
     *      </ShipDate>
     *  </Shipment>
     *  <Shipment />                                                (Optional)
     * </Order_Add_Item>
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<Order_Update_Item />');



        return $xmlObject;
    }
}

