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
* InventorySettingsUpdate
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class InventorySettingsUpdate implements StoreFragmentInterface
{
    
    
    /** @var boolean */
    protected $trackInventory = false;
    
    /** @var string */
    protected $inStockMessageShort;
    
    /** @var string */
    protected $inStockMessageLong;
    
    /** @var boolean */
    protected $trackLowStockLevel = false;
    
    /** @var int */
    protected $lowStockLevel;
    
    /** @var string */
    protected $lowStockMessageShort;
    
    /** @var string */
    protected $lowStockMessageLong;
    
    /** @var string */
    protected $trackOutOfStockProducts = false;
    
    /** @var int */
    protected $trackOutOfStockLevel;
    
    /** @var string */
    protected $hideOutOfStockProducts = false;
    
    /** @var string */
    protected $outOfStockMessageShort;
    
    /** @var string */
    protected $outOfStockMessageLong;
    
    /** @var string */
    protected $limitedStockMessage;
    

    
    /**
     * getTrackInventory
     *
     * @return boolean
    */
    public function getTrackInventory()
    {
        return $this->trackInventory;
    }
    
    /**
     * setTrackInventory
     *
     * @param boolean $trackInventory
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
     * @return boolean
    */
    public function getTrackLowStockLevel()
    {
        return $this->trackLowStockLevel;
    }
    
    /**
     * setTrackLowStockLevel
     *
     * @param boolean $trackLowStockLevel
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
     * @return boolean
    */
    public function getTrackOutOfStockProducts()
    {
        return $this->trackOutOfStockProducts;
    }
    
    /**
     * setTrackOutOfStockProducts
     *
     * @param boolean $trackOutOfStockProducts
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
     * @return boolean
    */
    public function getHideOutOfStockProducts()
    {
        return $this->hideOutOfStockProducts;
    }
    
    /**
     * setHideOutOfStockProducts
     *
     * @param boolean $hideOutOfStockProducts
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
     *  <InventorySettings_Update>
     *      <TrackInventory>Yes</TrackInventory>
     *      <InStockMessageShort><![CDATA[Fully stocked]]></InStockMessageShort>
     *      <InStockMessageLong><![CDATA[We've got plenty so order away]]></InStockMessageLong>
     *      <TrackLowStockLevel>Yes</TrackLowStockLevel>
     *      <LowStockLevel>10</LowStockLevel><LowStockMessageShort><![CDATA[Limited supply]]></LowStockMessageShort>
     *      <LowStockMessageLong><![CDATA[There are only a few left in stock, so you better get em while you can]]></LowStockMessageLong>
     *      <TrackOutOfStockProducts>Yes</TrackOutOfStockProducts>
     *      <TrackOutOfStockLevel>-5</TrackOutOfStockLevel>
     *      <HideOutOfStockProducts>No</HideOutOfStockProducts>
     *      <OutOfStockMessageShort><![CDATA[Out Of Stock]]></OutOfStockMessageShort>
     *      <OutOfStockMessageLong><![CDATA[This product is <B>SOLD OUT</B> but hopefully we'll get more in soon]]></OutOfStockMessageLong>
     *      <LimitedStockMessage><![CDATA[I know you want these, but we only have %inv_available% left. Try ordering a smaller amount]]></LimitedStockMessage>
     *  </InventorySettings_Update>
     *
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<InventorySettings_Update></InventorySettings_Update>');
                
        $xmlObject->addChild('TrackInventory', $this->getTrackInventory() ? 'Yes' : 'No');
        $xmlObject->addChild('InStockMessageShort', $this->getInStockMessageShort())->addAttribute('method-call', 'addCDATA');
        $xmlObject->addChild('InStockMessageLong', $this->getInStockMessageLong())->addAttribute('method-call', 'addCDATA');
        $xmlObject->addChild('TrackLowStockLevel', $this->getTrackLowStockLevel() ? 'Yes' : 'No');
        $xmlObject->addChild('LowStockLevel', $this->getLowStockLevel());
        $xmlObject->addChild('LowStockMessageShort', $this->getLowStockMessageShort())->addAttribute('method-call', 'addCDATA');;
        $xmlObject->addChild('LowStockMessageLong', $this->getLowStockMessageLong())->addAttribute('method-call', 'addCDATA');;
        $xmlObject->addChild('TrackOutOfStockProducts', $this->getTrackOutOfStockProducts() ? 'Yes' : 'No');
        $xmlObject->addChild('TrackOutOfStockLevel', $this->getTrackOutOfStockLevel());
        $xmlObject->addChild('HideOutOfStockProducts', $this->getHideOutOfStockProducts() ? 'Yes' : 'No');
        $xmlObject->addChild('OutOfStockMessageShort', $this->getOutOfStockMessageShort())->addAttribute('method-call', 'addCDATA');;
        $xmlObject->addChild('OutOfStockMessageLong', $this->getOutOfStockMessageLong())->addAttribute('method-call', 'addCDATA');;
        $xmlObject->addChild('LimitedStockMessage', $this->getLimitedStockMessage())->addAttribute('method-call', 'addCDATA');;

        return $xmlObject;
    }
}