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
* OrderShipmentSetStatus
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class OrderShipmentSetStatus implements StoreFragmentInterface
{
    
    /** @var string */
    protected $code;
    
    /** @var int */
    protected $markAsShipped;
    
    /** @var int */
    protected $trackingNumber;
    
    /** @var string */
    protected $trackingType;
    
    /** @var DateTime|null */
    protected $shipDate;

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
     * getMarkAsShipped
     *
     * @return int
    */
    public function getMarkAsShipped()
    {
        return $this->markAsShipped;
    }
    
    /**
     * setMarkAsShipped
     *
     * @param int $markAsShipped
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
     * @param DateTime $shipDate
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
     * <OrderShipment_SetStatus code="SHIPMENT_CODE">
     *       <MarkAsShipped>1</MarkAsShipped>                (Optional)
     *       <TrackingNumber>0123456</TrackingNumber>        (Optional)
     *       <TrackingType>FedEx</TrackingType>              (Optional)
     *       <ShipDate>                                      (Optional)
     *           <Day>01</Day>                                   (required)
     *           <Month>01</Month>                               (required)
     *           <Year>1970</Year>                               (required)
     *           <Minute>30</Minute>                             (optional)
     *           <Hour>12</Hour>                                 (optional)
     *       </ShipDate>
     *   </OrderShipment_SetStatus>
     *
    */
    public function toXml()
    {

        $xmlObject = new \SimpleXmlElement('<OrderShipment_SetStatus></OrderShipment_SetStatus>');

        $xmlObject->addAttribute('code', $this->getCode());
        
        $xmlObject->addChild('MarkAsShipped', $this->getMarkAsShipped());
        $xmlObject->addChild('TrackingNumber', $this->getTrackingNumber());
        $xmlObject->addChild('TrackingType', $this->getTrackingType());
        
        if ($this->getShipDate() instanceof \DateTime) {
            $shipDateXml = $xmlObject->addChild('ShipDate');
            $shipDateXml->addChild('Day', $this->getShipDate()->format('d'));
            $shipDateXml->addChild('Month', $this->getShipDate()->format('m'));
            $shipDateXml->addChild('Year', $this->getShipDate()->format('Y'));
            $shipDateXml->addChild('Minute', $this->getShipDate()->format('i'));
            $shipDateXml->addChild('Hour', $this->getShipDate()->format('h'));
        }
        
        return $xmlObject;
    }
}
        