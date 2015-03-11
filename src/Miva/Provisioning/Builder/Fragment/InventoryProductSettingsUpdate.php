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
 * InventoryProductSettingsUpdate
 *
 * @author Gassan Idriss <gidriss@miva.com>
 */
class InventoryProductSettingsUpdate implements StoreFragmentInterface
{

    const VALUE_DEFAULT = 'default';

    /** @var string */
    public $productCode;

    /** @var boolean */
    public $trackProduct = false;

    /** @var int */
    public $adjustStockBy;

    /** @var string */
    public $inStockMessageShort;

    /** @var string */
    public $inStockMessageLong;

    /** @var boolean */
    public $trackLowStockLevel = self::VALUE_DEFAULT;

    /** @var string */
    public $lowStockLevel = self::VALUE_DEFAULT;

    /** @var string */
    public $lowStockMessageShort;

    /** @var string */
    public $lowStockMessageLong;

    /** @var boolean */
    public $trackOutOfStockLevel = self::VALUE_DEFAULT;

    /** @var string */
    public $hideOutOfStockProducts = self::VALUE_DEFAULT;

    /** @var string */
    public $outOfStockLevel = self::VALUE_DEFAULT;

    /** @var string */
    public $outOfStockMessageShort;

    /** @var string */
    public $outOfStockMessageLong;

    /** @var string */
    public $limitedStockMessage;

    /**
     * @return int
     */
    public function getAdjustStockBy()
    {
        return $this->adjustStockBy;
    }

    /**
     * @param int $adjustStockBy
     */
    public function setAdjustStockBy($adjustStockBy)
    {
        $this->adjustStockBy = $adjustStockBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getHideOutOfStockProducts()
    {
        return $this->hideOutOfStockProducts;
    }

    /**
     * @param string $hideOutOfStockProducts
     */
    public function setHideOutOfStockProducts($hideOutOfStockProducts)
    {
        $this->hideOutOfStockProducts = $hideOutOfStockProducts;
        return $this;
    }

    /**
     * @return string
     */
    public function getInStockMessageLong()
    {
        return $this->inStockMessageLong;
    }

    /**
     * @param string $inStockMessageLong
     */
    public function setInStockMessageLong($inStockMessageLong)
    {
        $this->inStockMessageLong = $inStockMessageLong;
        return $this;
    }

    /**
     * @return string
     */
    public function getInStockMessageShort()
    {
        return $this->inStockMessageShort;
    }

    /**
     * @param string $inStockMessageShort
     */
    public function setInStockMessageShort($inStockMessageShort)
    {
        $this->inStockMessageShort = $inStockMessageShort;
        return $this;
    }

    /**
     * @return string
     */
    public function getLimitedStockMessage()
    {
        return $this->limitedStockMessage;
    }

    /**
     * @param string $limitedStockMessage
     */
    public function setLimitedStockMessage($limitedStockMessage)
    {
        $this->limitedStockMessage = $limitedStockMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getLowStockLevel()
    {
        return $this->lowStockLevel;
    }

    /**
     * @param string $lowStockLevel
     */
    public function setLowStockLevel($lowStockLevel)
    {
        $this->lowStockLevel = $lowStockLevel;
        return $this;
    }

    /**
     * @return string
     */
    public function getLowStockMessageLong()
    {
        return $this->lowStockMessageLong;
    }

    /**
     * @param string $lowStockMessageLong
     */
    public function setLowStockMessageLong($lowStockMessageLong)
    {
        $this->lowStockMessageLong = $lowStockMessageLong;
        return $this;
    }

    /**
     * @return string
     */
    public function getLowStockMessageShort()
    {
        return $this->lowStockMessageShort;
    }

    /**
     * @param string $lowStockMessageShort
     */
    public function setLowStockMessageShort($lowStockMessageShort)
    {
        $this->lowStockMessageShort = $lowStockMessageShort;
        return $this;
    }

    /**
     * @return string
     */
    public function getOutOfStockLevel()
    {
        return $this->outOfStockLevel;
    }

    /**
     * @param string $outOfStockLevel
     */
    public function setOutOfStockLevel($outOfStockLevel)
    {
        $this->outOfStockLevel = $outOfStockLevel;
        return $this;
    }

    /**
     * @return string
     */
    public function getOutOfStockMessageLong()
    {
        return $this->outOfStockMessageLong;
    }

    /**
     * @param string $outOfStockMessageLong
     */
    public function setOutOfStockMessageLong($outOfStockMessageLong)
    {
        $this->outOfStockMessageLong = $outOfStockMessageLong;
        return $this;
    }

    /**
     * @return string
     */
    public function getOutOfStockMessageShort()
    {
        return $this->outOfStockMessageShort;
    }

    /**
     * @param string $outOfStockMessageShort
     */
    public function setOutOfStockMessageShort($outOfStockMessageShort)
    {
        $this->outOfStockMessageShort = $outOfStockMessageShort;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * @param string $productCode
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getTrackLowStockLevel()
    {
        return $this->trackLowStockLevel;
    }

    /**
     * @param boolean $trackLowStockLevel
     */
    public function setTrackLowStockLevel($trackLowStockLevel)
    {
        $this->trackLowStockLevel = $trackLowStockLevel;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getTrackOutOfStockLevel()
    {
        return $this->trackOutOfStockLevel;
    }

    /**
     * @param boolean $trackOutOfStockLevel
     */
    public function setTrackOutOfStockLevel($trackOutOfStockLevel)
    {
        $this->trackOutOfStockLevel = $trackOutOfStockLevel;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getTrackProduct()
    {
        return $this->trackProduct;
    }

    /**
     * @param boolean $trackProduct
     */
    public function setTrackProduct($trackProduct)
    {
        $this->trackProduct = $trackProduct;
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

        $booleanValues = array('yes','no', '1', '0');

        $xmlObject = new SimpleXMLElement('<InventoryProductSettings_Update />');

        $xmlObject->addAttribute('product_code', $this->getProductCode());

        $xmlObject->addChild('TrackProduct', $this->getTrackProduct() ? 'Yes' : 'No');
        $xmlObject->addChild('AdjustStockBy', $this->getAdjustStockBy());

        $xmlObject->addChild('InStockMessageShort', $this->getInStockMessageShort())->addAttribute('method-call', 'addCDATA');
        $xmlObject->addChild('InStockMessageLong', $this->getInStockMessageLong())->addAttribute('method-call', 'addCDATA');

        if (is_bool($this->getTrackLowStockLevel()) || in_array(strtolower($this->getTrackLowStockLevel()),  $booleanValues)) {
            $xmlObject->addChild('TrackLowStockLevel', $this->getTrackLowStockLevel() ? 'Yes' : 'No');
        } else {
            $xmlObject->addChild('TrackLowStockLevel', static::VALUE_DEFAULT);
        }

        if (is_numeric($this->getLowStockLevel())) {
            $xmlObject->addChild('LowStockLevel', $this->getLowStockLevel());
        } else {
            $xmlObject->addChild('LowStockLevel', static::VALUE_DEFAULT);
        }


        $xmlObject->addChild('LowStockMessageShort', $this->getLowStockMessageShort())->addAttribute('method-call', 'addCDATA');
        $xmlObject->addChild('LowStockMessageLong', $this->getLowStockMessageLong())->addAttribute('method-call', 'addCDATA');

        if (is_bool($this->getTrackOutOfStockLevel()) || in_array(strtolower($this->getTrackOutOfStockLevel()), $booleanValues)) {
            $xmlObject->addChild('TrackOutOfStockLevel', $this->getTrackOutOfStockLevel() ? 'Yes' : 'No');
        } else {
            $xmlObject->addChild('TrackOutOfStockLevel', static::VALUE_DEFAULT);
        }

        if (is_bool($this->getHideOutOfStockProducts()) || in_array(strtolower($this->getHideOutOfStockProducts()), $booleanValues)) {
            $xmlObject->addChild('HideOutOfStockProducts', $this->getHideOutOfStockProducts() ? 'Yes' : 'No');
        } else {
            $xmlObject->addChild('HideOutOfStockProducts', static::VALUE_DEFAULT);
        }

        if (is_numeric($this->getOutOfStockLevel())) {
            $xmlObject->addChild('OutOfStockLevel', $this->getOutOfStockLevel());
        } else {
            $xmlObject->addChild('OutOfStockLevel', static::VALUE_DEFAULT);
        }

        $xmlObject->addChild('OutOfStockMessageShort', $this->getOutOfStockMessageShort())->addAttribute('method-call', 'addCDATA');
        $xmlObject->addChild('OutOfStockMessageLong', $this->getOutOfStockMessageLong())->addAttribute('method-call', 'addCDATA');
        $xmlObject->addChild('LimitedStockMessage', $this->getLimitedStockMessage())->addAttribute('method-call', 'addCDATA');

        return $xmlObject;
    }

}
        