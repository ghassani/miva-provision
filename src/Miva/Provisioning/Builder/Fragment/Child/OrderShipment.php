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
 * OrderShipment
 *
 * @author Gassan Idriss <gidriss@miva.com>
 */
class OrderShipment implements ChildFragmentInterface
{

    public $code;

    public $cost;

    public $markAsShipped;

    public $trackingNumber;

    public $trackingType;

    public $shipDate;

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
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param mixed $cost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMarkAsShipped()
    {
        return $this->markAsShipped;
    }

    /**
     * @param mixed $markAsShipped
     */
    public function setMarkAsShipped($markAsShipped)
    {
        $this->markAsShipped = $markAsShipped;
        return $this;
    }

    /**
     * @return null|DateTime
     */
    public function getShipDate()
    {
        return $this->shipDate;
    }

    /**
     * @param null|DateTime $shipDate
     */
    public function setShipDate(DateTime $shipDate = null)
    {
        $this->shipDate = $shipDate;
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
     * {@inheritDoc}
     *
     * Format:
     *
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
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<Shipment />');

        $xmlObject->addChild('TrackingNumber', $this->getTrackingNumber());
        $xmlObject->addChild('TrackingType',   $this->getTrackingType());
        $xmlObject->addChild('MarkAsShipped',  $this->getMarkAsShipped() ? 'Yes' : 'No');

        if ($this->getCode()) {
            $xmlObject->addChild('Code', $this->getCode());
        }

        if ($this->getCost()) {
            $xmlObject->addChild('Cost', $this->getCost());
        }

        if ($this->getShipDate() instanceof \DateTime) {
            $date =  $xmlObject->addChild('ShipDate');
            $date->addChild('Day',   $this->getShipDate()->format());
            $date->addChild('Month', $this->getShipDate()->format());
            $date->addChild('Year',  $this->getShipDate()->format());
        }

        return $xmlObject;
    }
} 