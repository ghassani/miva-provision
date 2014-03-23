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
* InventoryProductSettingsUpdate
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class InventoryProductSettingsUpdate implements StoreFragmentInterface
{
    /** @var string */
    protected $productCode;
    
    /** @var boolean */
    protected $trackProduct = false;
    
    /** @var int */
    protected $adjustStockBy;
    
    /** @var string */
    protected $inStockMessageShort;
    
    /** @var string */
    protected $inStockMessageLong;
    
    /** @var boolean */
    protected $trackLowStockLevel = false;
    
    /** @var string */
    protected $lowStockLevel;
    
    /** @var string */
    protected $lowStockMessageShort;
    
    /** @var string */
    protected $lowStockMessageLong;
    
    /** @var boolean */
    protected $trackOutOfStockLevel = false;
    
    /** @var string */
    protected $hideOutOfStockProducts = false;
    
    /** @var string */
    protected $outOfStockLevel;
    
    /** @var string */
    protected $outOfStockMessageShort;
    
    /** @var string */
    protected $outOfStockMessageLong;
    
    /** @var string */
    protected $limitedStockMessage;
    
    /**
     * getProductCode
     *
     * @return string
    */
    public function getProductCode()
    {
        return $this->productCode;
    }
    
    /**
     * setProductCode
     *
     * @param string $productCode
     *
     * @return self
    */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * getTrackProduct
     *
     * @return boolean
    */
    public function getTrackProduct()
    {
        return $this->trackProduct;
    }
    
    /**
     * setTrackProduct
     *
     * @param boolean $trackProduct
     *
     * @return self
    */
    public function setTrackProduct(boolean $trackProduct)
    {
        $this->trackProduct = $trackProduct;
        return $this;
    }

    /**
     * getAdjustStockBy
     *
     * @return int
    */
    public function getAdjustStockBy()
    {
        return $this->adjustStockBy;
    }
    
    /**
     * setAdjustStockBy
     *
     * @param int $adjustStockBy
     *
     * @return self
    */
    public function setAdjustStockBy($adjustStockBy)
    {
        $this->adjustStockBy = $adjustStockBy;
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
     * getLowStockLevel
     *
     * @return string
    */
    public function getLowStockLevel()
    {
        return $this->lowStockLevel;
    }
    
    /**
     * setLowStockLevel
     *
     * @param string $lowStockLevel
     *
     * @return self
    */
    public function setLowStockLevel($lowStockLevel)
    {
        $this->lowStockLevel = $lowStockLevel;
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
    public function setTrackLowStockLevel(boolean $trackLowStockLevel)
    {
        $this->trackLowStockLevel = $trackLowStockLevel;
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
     * getTrackOutOfStockLevel
     *
     * @return boolean
    */
    public function getTrackOutOfStockLevel()
    {
        return $this->trackOutOfStockLevel;
    }
    
    /**
     * setTrackOutOfStockLevel
     *
     * @param boolean $trackOutOfStockLevel
     *
     * @return self
    */
    public function setTrackOutOfStockLevel(boolean $trackOutOfStockLevel)
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
    public function setHideOutOfStockProducts(boolean $hideOutOfStockProducts)
    {
    	$this->hideOutOfStockProducts = $hideOutOfStockProducts;
        return $this;
    }



    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <InventoryProductSettings_Update product_code="ale-gallon">
     *     <TrackProduct>Yes</TrackProduct>
     *     <AdjustStockBy>500</AdjustStockBy>
     *     <InStockMessageShort><![CDATA[]]></InStockMessageShort>
     *     <InStockMessageLong><![CDATA[]]></InStockMessageLong>
     *     <TrackLowStockLevel>Yes</TrackLowStockLevel>
     *     <LowStockLevel>Default</LowStockLevel>
     *     <LowStockMessageShort><![CDATA[]]></LowStockMessageShort>
     *     <LowStockMessageLong><![CDATA[]]></LowStockMessageLong>
     *     <TrackOutOfStockLevel>Yes</TrackOutOfStockLevel>
     *     <HideOutOfStockProducts>Yes</HideOutOfStockProducts>
     *     <OutOfStockLevel>Default</OutOfStockLevel>
     *     <OutOfStockMessageShort><![CDATA[]]></OutOfStockMessageShort>
     *     <OutOfStockMessageLong><![CDATA[]]></OutOfStockMessageLong>
     *     <LimitedStockMessage><![CDATA[]]></LimitedStockMessage>
     * </InventoryProductSettings_Update>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new \SimpleXmlElement('<InventoryProductSettings_Update></InventoryProductSettings_Update>');
        
        $xmlObject->addAttribute('product_code', $this->getProductCode());
        
        $xmlObject->addChild('TrackProduct', $this->getTrackProduct() ? 'Yes' : 'No');
        $xmlObject->addChild('AdjustStockBy', $this->getAdjustStockBy());
        $xmlObject->addChild('InStockMessageShort', sprintf('<![CDATA[%s]]>',$this->getInStockMessageShort()));
        $xmlObject->addChild('InStockMessageLong', sprintf('<![CDATA[%s]]>',$this->getInStockMessageLong()));
        $xmlObject->addChild('TrackLowStockLevel', $this->getTrackLowStockLevel() ? 'Yes' : 'No');
        $xmlObject->addChild('LowStockLevel', $this->getLowStockLevel());
        $xmlObject->addChild('LowStockMessageShort', sprintf('<![CDATA[%s]]>',$this->getLowStockMessageShort()));
        $xmlObject->addChild('LowStockMessageLong', sprintf('<![CDATA[%s]]>',$this->getLowStockMessageLong()));
        $xmlObject->addChild('TrackOutOfStockLevel', $this->getTrackOutOfStockLevel() ? 'Yes' : 'No');
        $xmlObject->addChild('HideOutOfStockProducts', $this->getHideOutOfStockProducts() ? 'Yes' : 'No');
        $xmlObject->addChild('OutOfStockLevel', $this->getOutOfStockLevel());
        $xmlObject->addChild('OutOfStockMessageShort', sprintf('<![CDATA[%s]]>',$this->getOutOfStockMessageShort()));
        $xmlObject->addChild('OutOfStockMessageLong', sprintf('<![CDATA[%s]]>',$this->getOutOfStockMessageLong()));
        $xmlObject->addChild('LimitedStockMessage', sprintf('<![CDATA[%s]]>',$this->getLimitedStockMessage()));

        return $xmlObject;
    }
}
        