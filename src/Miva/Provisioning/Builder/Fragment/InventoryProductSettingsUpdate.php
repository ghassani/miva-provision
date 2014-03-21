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
* InventoryProductSettingsUpdate
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class InventoryProductSettingsUpdate implements FragmentInterface
{
    /** @var string */
    protected $productCode;
    
    /** @var string */
    protected $trackProduct;
    
    /** @var int */
    protected $adjustStockBy;
    
    /** @var string */
    protected $inStockMessageShort;
    
    /** @var string */
    protected $inStockMessageLong;
    
    /** @var string */
    protected $trackLowStockLevel;
    
    /** @var string */
    protected $lowStockLevel;
    
    /** @var string */
    protected $lowStockMessageShort;
    
    /** @var string */
    protected $lowStockMessageLong;
    
    /** @var string */
    protected $trackOutOfStockLevel;
    
    /** @var string */
    protected $hideOutOfStockProducts;
    
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
     * @return string
    */
    public function getTrackProduct()
    {
        return $this->trackProduct;
    }
    
    /**
     * setTrackProduct
     *
     * @param string $trackProduct
     *
     * @return self
    */
    public function setTrackProduct($trackProduct)
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
     * @return string
    */
    public function getTrackOutOfStockLevel()
    {
        return $this->trackOutOfStockLevel;
    }
    
    /**
     * setTrackOutOfStockLevel
     *
     * @param string $trackOutOfStockLevel
     *
     * @return self
    */
    public function setTrackOutOfStockLevel($trackOutOfStockLevel)
    {
        $this->trackOutOfStockLevel = $trackOutOfStockLevel;
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
    public function toXml()
    {

        $xml = null;
        $xmlObject = new \SimpleXmlElement('<Fragment></Fragment>');
        

        $xmlObject->addChild('EmailFrom', $this->getEmailFrom());
        $xmlObject->addChild('EmailCC', $this->getEmailCC());
        $xmlObject->addChild('Subject', $this->getSubject());
        $xmlObject->addChild('HeaderText', $this->getHeaderText());
        
        foreach ($xmlObject->children() as $child) {
            $xml .= $child->saveXml();
        }
        
        return $xml;
    }
}
        