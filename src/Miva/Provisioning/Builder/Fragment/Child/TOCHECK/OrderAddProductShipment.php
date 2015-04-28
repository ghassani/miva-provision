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
 * OrderAddProductShipment
 *
 * @author Gassan Idriss <gidriss@miva.com>
*/
class OrderAddProductShipment implements FragmentInterface
{
    
    
    /** @var string */
    public $code;
    
    /** @var int */
    public $cost;
    
    /** @var boolean */
    public $markAsShipped = false;
    
    /** @var int */
    public $trackingNumber;
    
    /** @var string */
    public $trackingType;
    
    /** @var array */
    public $shipDate = array();

    
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
     * getCost
     *
     * @return int
    */
    public function getCost()
    {
        return $this->cost;
    }
    
    /**
     * setCost
     *
     * @param int $cost
     *
     * @return self
    */
    public function setCost($cost)
    {
        $this->cost = $cost;
        return $this;
    }
    
    /**
     * getMarkAsShipped
     *
     * @return boolean
    */
    public function getMarkAsShipped()
    {
        return $this->markAsShipped;
    }
    
    /**
     * setMarkAsShipped
     *
     * @param boolean $markAsShipped
     *
     * @return self
    */
    public function setMarkAsShipped($markAsShipped)
    {
        $this->markAsShipped = $markAsShipped;
        return $this;
    }
    
    /**
     * getTrackingNumber
     *
     * @return int
    */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }
    
    /**
     * setTrackingNumber
     *
     * @param int $trackingNumber
     *
     * @return self
    */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * getTrackingType
     *
     * @return string
    */
    public function getTrackingType()
    {
        return $this->trackingType;
    }
    
    /**
     * setTrackingType
     *
     * @param string $trackingType
     *
     * @return self
    */
    public function setTrackingType($trackingType)
    {
        $this->trackingType = $trackingType;
        return $this;
    }
    
    /**
     * getShipDate
     *
     * @return DateTime|null
    */
    public function getShipDate()
    {
        return $this->shipDate;
    }
    
    /**
     * setShipDate
     *
     * @param DateTime|null $shipDate
     *
     * @return self
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
     * <Shipment>                                                  (Optional)
     *      <Code>Ship_Code</Code>                                 (Optional)
     *      <Cost>1</Cost>                                         (Optional)
     *      <MarkAsShipped>Yes</MarkAsShipped>                     (Optional)
     *      <TrackingNumber>1111111111</TrackingNumber>            (Required)
     *      <TrackingType>FedEx</TrackingType>                     (Required)
     *      <ShipDate>                                             (Optional)
     *          <Day>7</Day>
     *          <Month>9</Month>
     *          <Year>2012</Year>
     *      </ShipDate>
     * </Shipment>
    */
    public function toXml()
    {
        $xmlObject = new SimpleXmlElement('<Shipment />');
        
        if($this->getCode()) {
            $xmlObject->addChild('Code', $this->getCode());
        }
        
        if($this->getCost()) {
            $xmlObject->addChild('Cost', $this->getCost());
        }
        
        $markedAsShipped = $this->getMarkAsShipped();
        if(!is_null($markedAsShipped)||is_bool($markedAsShipped)) {
            $xmlObject->addChild('MarkAsShipped', $this->getMarkAsShipped() ? 'Yes' : 'No');
        }
        
        $xmlObject->addChild('TrackingNumber', $this->getTrackingNumber());
        $xmlObject->addChild('TrackingType', $this->getTrackingType());
        
        if ($this->getShipDate() instanceof \DateTime) {
           $dateXml = $xmlObject->addChild('ShipDate'); 
           $dateXml->addChild('Day', $this->getShipDate()-format('d'));
           $dateXml->addChild('Month', $this->getShipDate()-format('m'));
           $dateXml->addChild('Year', $this->getShipDate()-format('Y'));
        }
        
        return $xmlObject;
    }
}
        