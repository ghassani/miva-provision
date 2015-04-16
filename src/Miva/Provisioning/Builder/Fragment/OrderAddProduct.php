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

use Miva\Provisioning\Builder\Fragment\Child\OrderShipment;
use Miva\Version;
use Miva\Provisioning\Builder\Helper\XmlHelper;
use Miva\Provisioning\Builder\SimpleXMLElement;
use Miva\Provisioning\Builder\Fragment\Model\StoreFragmentInterface;

/**
 * OrderAddProduct
 *
 * @author Gassan Idriss <gidriss@miva.com>
 */
class OrderAddProduct implements StoreFragmentInterface
{

    protected $orderId;

    protected $code;

    protected $status;

    protected $trackingNumber;

    protected $trackingType;

    protected $shipment;

    private $allowedStatuses = array(
        'pending',
        'picking',
        'shipped',
        'cancelled',
        'backordered',
        'rma issued',
        'returned',
        '000',
        '100',
        '200',
        '300',
        '400',
        '500',
        '600',
    );

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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        if (!in_array(strtolower($status), $this->allowedStatuses)) {
            throw new \InvalidArgumentException(sprintf('Invalid Status %s. Available Statuses: %s',
                $status,
                implode(', ', $this->allowedStatuses)
            ));
        }

        $this->status = $status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * @param mixed $trackingNumber
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTrackingType()
    {
        return $this->trackingType;
    }

    /**
     * @param mixed $trackingType
     */
    public function setTrackingType($trackingType)
    {
        $this->trackingType = $trackingType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * @param mixed $shipment
     */
    public function setShipment(OrderShipment $shipment = null)
    {
        $this->shipment = $shipment;
        return $this;
    }





    /**
     * {@inheritDoc}
     *
     * Format:
     *  <Order_Add_Product order_id="X">
     *      <Code></Code>
     *      <Status></Status>
     *      <Quantity></Quantity>
     *      <TrackingNumber></TrackingNumber> <!-- optional -->
     *      <TrackingType></TrackingType> <!-- optional -->
     *      <Shipment>
     *          <!-- SEE Child/OrderShipment -->
     *      </Shipment>
     * </Order_Add_Product>
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<Order_Add_Product />');

        $xmlObject->addAttribute('order_id', $this->getOrderId());

        $xmlObject->addChild('Code', $this->getCode());
        $xmlObject->addChild('Status', $this->getStatus());

        if ($this->getTrackingNumber()) {
            $xmlObject->addChild('TrackingNumber', $this->getTrackingNumber());
        }

        if ($this->getTrackingType()) {
            $xmlObject->addChild('TrackingType', $this->getTrackingType());
        }

        if ($this->getShipment()) {
            XmlHelper::appendToParent($xmlObject, $this->getShipment()->toXml());
        }

        return $xmlObject;
    }

}

