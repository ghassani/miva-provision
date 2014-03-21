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
* InventorySettings
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class InventorySettings implements FragmentInterface
{
    
    
    /** @var string */
    protected $trackInventory;
    
    /** @var string */
    protected $inStockMessageShort;
    
    /** @var string */
    protected $inStockMessageLong;
    
    /** @var string */
    protected $trackLowStockLevel;
    
    /** @var int */
    protected $lowStockLevel;
    
    /** @var string */
    protected $lowStockMessageShort;
    
    /** @var string */
    protected $lowStockMessageLong;
    
    /** @var string */
    protected $trackOutOfStockProducts;
    
    /** @var int */
    protected $trackOutOfStockLevel;
    
    /** @var string */
    protected $hideOutOfStockProducts;
    
    /** @var string */
    protected $outOfStockMessageShort;
    
    /** @var string */
    protected $outOfStockMessageLong;
    
    /** @var string */
    protected $limitedStockMessage;
    

    
    /**
     * getTrackInventory
     *
     * @return string
    */
    public function getTrackInventory()
    {
        return $this->trackInventory;
    }
    
    /**
     * setTrackInventory
     *
     * @param string $trackInventory
     *
     * @return self
    */
    public function setTrackInventory($trackInventory)
    {
        $this->trackInventory = $trackInventory;
        return $this;
    }
    
    /**
     * getInStockMessageShort
     *
     * @return string
    */
    public function getInStockMessageShort()
    {
        return $this->inStockMessageShort;
    }
    
    /**
     * setInStockMessageShort
     *
     * @param string $inStockMessageShort
     *
     * @return self
    */
    public function setInStockMessageShort($inStockMessageShort)
    {
        $this->inStockMessageShort = $inStockMessageShort;
        return $this;
    }
    
    /**
     * getInStockMessageLong
     *
     * @return string
    */
    public function getInStockMessageLong()
    {
        return $this->inStockMessageLong;
    }
    
    /**
     * setInStockMessageLong
     *
     * @param string $inStockMessageLong
     *
     * @return self
    */
    public function setInStockMessageLong($inStockMessageLong)
    {
        $this->inStockMessageLong = $inStockMessageLong;
        return $this;
    }
    
    /**
     * getTrackLowStockLevel
     *
     * @return string
    */
    public function getTrackLowStockLevel()
    {
        return $this->trackLowStockLevel;
    }
    
    /**
     * setTrackLowStockLevel
     *
     * @param string $trackLowStockLevel
     *
     * @return self
    */
    public function setTrackLowStockLevel($trackLowStockLevel)
    {
        $this->trackLowStockLevel = $trackLowStockLevel;
        return $this;
    }
    
    /**
     * getLowStockLevel
     *
     * @return int
    */
    public function getLowStockLevel()
    {
        return $this->lowStockLevel;
    }
    
    /**
     * setLowStockLevel
     *
     * @param int $lowStockLevel
     *
     * @return self
    */
    public function setLowStockLevel($lowStockLevel)
    {
        $this->lowStockLevel = $lowStockLevel;
        return $this;
    }
    
    /**
     * getLowStockMessageShort
     *
     * @return string
    */
    public function getLowStockMessageShort()
    {
        return $this->lowStockMessageShort;
    }
    
    /**
     * setLowStockMessageShort
     *
     * @param string $lowStockMessageShort
     *
     * @return self
    */
    public function setLowStockMessageShort($lowStockMessageShort)
    {
        $this->lowStockMessageShort = $lowStockMessageShort;
        return $this;
    }
    
    /**
     * getLowStockMessageLong
     *
     * @return string
    */
    public function getLowStockMessageLong()
    {
        return $this->lowStockMessageLong;
    }
    
    /**
     * setLowStockMessageLong
     *
     * @param string $lowStockMessageLong
     *
     * @return self
    */
    public function setLowStockMessageLong($lowStockMessageLong)
    {
        $this->lowStockMessageLong = $lowStockMessageLong;
        return $this;
    }
    
    /**
     * getTrackOutOfStockProducts
     *
     * @return string
    */
    public function getTrackOutOfStockProducts()
    {
        return $this->trackOutOfStockProducts;
    }
    
    /**
     * setTrackOutOfStockProducts
     *
     * @param string $trackOutOfStockProducts
     *
     * @return self
    */
    public function setTrackOutOfStockProducts($trackOutOfStockProducts)
    {
        $this->trackOutOfStockProducts = $trackOutOfStockProducts;
        return $this;
    }
    
    /**
     * getTrackOutOfStockLevel
     *
     * @return int
    */
    public function getTrackOutOfStockLevel()
    {
        return $this->trackOutOfStockLevel;
    }
    
    /**
     * setTrackOutOfStockLevel
     *
     * @param int $trackOutOfStockLevel
     *
     * @return self
    */
    public function setTrackOutOfStockLevel($trackOutOfStockLevel)
    {
        $this->trackOutOfStockLevel = $trackOutOfStockLevel;
        return $this;
    }
    
    /**
     * getHideOutOfStockProducts
     *
     * @return string
    */
    public function getHideOutOfStockProducts()
    {
        return $this->hideOutOfStockProducts;
    }
    
    /**
     * setHideOutOfStockProducts
     *
     * @param string $hideOutOfStockProducts
     *
     * @return self
    */
    public function setHideOutOfStockProducts($hideOutOfStockProducts)
    {
        $this->hideOutOfStockProducts = $hideOutOfStockProducts;
        return $this;
    }
    
    /**
     * getOutOfStockMessageShort
     *
     * @return string
    */
    public function getOutOfStockMessageShort()
    {
        return $this->outOfStockMessageShort;
    }
    
    /**
     * setOutOfStockMessageShort
     *
     * @param string $outOfStockMessageShort
     *
     * @return self
    */
    public function setOutOfStockMessageShort($outOfStockMessageShort)
    {
        $this->outOfStockMessageShort = $outOfStockMessageShort;
        return $this;
    }
    
    /**
     * getOutOfStockMessageLong
     *
     * @return string
    */
    public function getOutOfStockMessageLong()
    {
        return $this->outOfStockMessageLong;
    }
    
    /**
     * setOutOfStockMessageLong
     *
     * @param string $outOfStockMessageLong
     *
     * @return self
    */
    public function setOutOfStockMessageLong($outOfStockMessageLong)
    {
        $this->outOfStockMessageLong = $outOfStockMessageLong;
        return $this;
    }
    
    /**
     * getLimitedStockMessage
     *
     * @return string
    */
    public function getLimitedStockMessage()
    {
        return $this->limitedStockMessage;
    }
    
    /**
     * setLimitedStockMessage
     *
     * @param string $limitedStockMessage
     *
     * @return self
    */
    public function setLimitedStockMessage($limitedStockMessage)
    {
        $this->limitedStockMessage = $limitedStockMessage;
        return $this;
    }
    

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <InventorySettings_Update><TrackInventory>Yes</TrackInventory><InStockMessageShort><![CDATA[Fully stocked]]></InStockMessageShort><InStockMessageLong><![CDATA[We've got plenty so order away]]></InStockMessageLong><TrackLowStockLevel>Yes</TrackLowStockLevel><LowStockLevel>10</LowStockLevel><LowStockMessageShort><![CDATA[Limited supply]]></LowStockMessageShort><LowStockMessageLong><![CDATA[There are only a few left in stock, so you better get em while you can]]></LowStockMessageLong>
     *       <TrackOutOfStockProducts>Yes</TrackOutOfStockProducts>
     *       <TrackOutOfStockLevel>-5</TrackOutOfStockLevel>
     *       <HideOutOfStockProducts>No</HideOutOfStockProducts>
     *       <OutOfStockMessageShort><![CDATA[Out Of Stock]]></OutOfStockMessageShort>
     *       <OutOfStockMessageLong><![CDATA[This product is <B>SOLD OUT</B> but hopefully we'll get more in soon]]></OutOfStockMessageLong>
     *       <LimitedStockMessage><![CDATA[I know you want these, but we only have %inv_available% left. Try ordering a smaller amount]]></LimitedStockMessage>
     *  </InventorySettings_Update>
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