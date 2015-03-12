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
use Miva\Provisioning\Model\ChildFragmentInterface;

/**
 * OrderAddItemShipment
 *
 * @author Gassan Idriss <gidriss@miva.com>
*/
class OrderAddItemShipment implements ChildFragmentInterface
{
    
   /** @var string */
   protected $code;
   
   /** @var float */
   protected $cost;
   
   /** @var bool */
   protected $markAsShipped = false;
   
   /** @var string */
   protected $trackingNumber;
   
   /** @var string */
   protected $trackingType;
   
   /** @var DateTime|null */
   protected $shipDate = null;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isMarkAsShipped()
    {
        return $this->markAsShipped;
    }

    /**
     * @param boolean $markAsShipped
     */
    public function setMarkAsShipped($markAsShipped)
    {
        $this->markAsShipped = $markAsShipped;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * @param string $trackingNumber
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingType()
    {
        return $this->trackingType;
    }

    /**
     * @param string $trackingType
     */
    public function setTrackingType($trackingType)
    {
        $this->trackingType = $trackingType;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getShipDate()
    {
        return $this->shipDate;
    }

    /**
     * @param DateTime|null $shipDate
     */
    public function setShipDate(\DateTime $shipDate = null)
    {
        $this->shipDate = $shipDate;
        return $this;
    }


    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <Shipment>                                                  (Optional)
     *    <Code>Ship_Code</Code>                                  (Optional)
     *    <Cost>1</Cost>                                          (Optional)
     *    <MarkAsShipped>Yes</MarkAsShipped>                      (Optional)
     *    <TrackingNumber>1111111111</TrackingNumber>             (Required)
     *    <TrackingType>FedEx</TrackingType>                      (Required)
     *    <ShipDate>                                              (Optional)
     *       <Day>7</Day>
     *       <Month>9</Month>
     *       <Year>2012</Year>
     *    </ShipDate>
     * </Shipment>
    */
    public function toXml()
    {
        $xmlObject = new SimpleXmlElement('<Shipment />');

        if ($this->getCode()) {
            $xmlObject->addChild('Code', $this->getCode());
        }

        if ($this->getCost()) {
            $xmlObject->addChild('Cost', $this->getCost());
        }

        if ($this->getMarkAsShipped()) {
            $xmlObject->addChild('MarkAsShipped', $this->MarkAsShipped() ? 'Yes' : 'No');
        }

        $xmlObject->addChild('TrackingNumber', $this->getTrackingNumber());
        $xmlObject->addChild('TrackingType', $this->getTrackingType());

        if ($this->getShipDate() instanceof \DateTime) {
            $shipDateXml = $xmlObject->addChild('ShipDate');
            $shipDateXml->addChild('Year', $this->getShipDate()->format('Y'));
            $shipDateXml->addChild('Month', $this->getShipDate()->format('m'));
            $shipDateXml->addChild('Day', $this->getShipDate()->format('d'));
            $shipDateXml->addChild('Hour', $this->getShipDate()->format('h'));
            $shipDateXml->addChild('Minute', $this->getShipDate()->format('i'));
            $shipDateXml->addChild('Second', $this->getShipDate()->format('s'));
        }

        return $xmlObject;
    }
}
        
        
        
