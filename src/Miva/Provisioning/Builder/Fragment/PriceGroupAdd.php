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
use Miva\Provisioning\Builder\Helper\XmlHelper;
use Miva\Provisioning\Builder\SimpleXMLElement;

/**
* PriceGroupAdd
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class PriceGroupAdd implements Model\StoreFragmentInterface
{
    const ELIGIBILITY_COUPON    = 'coupon';
    const ELIGIBILITY_ALL       = 'all';
    const ELIGIBILITY_CUSTOMER  = 'customer';
    const ELIGIBILITY_LOGGEDIN  = 'loggedIn';

    const PRICING_RETAIL        = 'retail';
    const PRICING_COST          = 'cost';
    const PRICING_DISCOUNT      = 'discount';
    const PRICING_MARKUP        = 'markup';


    const MODULE_DISCOUNT_ADDON             = 'discount_addon';
    const MODULE_DISCOUNT_BASKET            = 'discount_basket';
    const MODULE_DISCOUNT_BUYXGETY          = 'discount_buyxgety';
    const MODULE_DISCOUNT_PRODUCT           = 'discount_product';
    const MODULE_DISCOUNT_SHIPPING_PRODUCT  = 'discount_shipping_product';
    const MODULE_DISCOUNT_SHIPPING_BASKET   = 'discount_shipping_basket';
    const MODULE_DISCOUNT_SALEPRICE         = 'discount_saleprice';
    const MODULE_DISCOUNT_VOLUME            = 'discount_volume';



    /** @var string */
    public $name;
    
    /** @var string */
    public $pricing;
    
    /** @var float */
    public $amount;

    /** @var string */
    public $eligbility;

    /** @var DateTime|null */
    public $notValidBefore;

    /** @var DateTime|null */
    public $notValidAfter;

    /** @var int */
    public $priority;

    /** @var string */
    public $module;

    /** @var string */
    public $description;

    /** @var bool */
    public $displayInBasket = false;

    /** @var float */
    public $qualifyingMinimumSubtotal = 0.00;

    /** @var float */
    public $qualifyingMaximumSubtotal = 0.00;

    /** @var int */
    public $qualifyingMinimumQuantity = 0;

    /** @var int */
    public $qualifyingMaximumQuantity = 0;

    /** @var float */
    public $qualifyingMinimumWeight = 0.00;

    /** @var float */
    public $qualifyingMaximumWeight = 0.00;

    /** @var float */
    public $basketMinimumSubtotal = 0.00;

    /** @var float */
    public $basketMaximumSubtotal = 0.00;

    /** @var float */
    public $basketMinimumQuantity = 0;

    /** @var float */
    public $basketMaximumQuantity = 0;

    /** @var float */
    public $basketMinimumWeight = 0.00;

    /** @var float */
    public $basketMaximumWeight = 0.00;

    /** @var array */
    public $settings = array();

    /** @var array */
    public $exclusions = array();



    /**
     * getName
     *
     * @return string
    */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * setName
     *
     * @param string $name
     *
     * @return self
    */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    
    /**
     * getPricing
     *
     * @return string
    */
    public function getPricing()
    {
        return $this->pricing;
    }
    
    /**
     * setPricing
     *
     * @param string $pricing
     *
     * @return self
    */
    public function setPricing($pricing)
    {
        $this->pricing = $pricing;
        return $this;
    }
    
    /**
     * getAmount
     *
     * @return int
    */
    public function getAmount()
    {
        return $this->amount;
    }
    
    /**
     * setAmount
     *
     * @param int $amount
     *
     * @return self
    */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getEligbility()
    {
        return $this->eligbility;
    }

    /**
     * @param string $eligbility
     */
    public function setEligbility($eligbility)
    {
        $this->eligbility = $eligbility;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getNotValidBefore()
    {
        return $this->notValidBefore;
    }

    /**
     * @param DateTime|null $notValidBefore
     */
    public function setNotValidBefore(\DateTime $notValidBefore = null)
    {
        $this->notValidBefore = $notValidBefore;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getNotValidAfter()
    {
        return $this->notValidAfter;
    }

    /**
     * @param DateTime|null $notValidAfter
     */
    public function setNotValidAfter(\DateTime $notValidAfter = null)
    {
        $this->notValidAfter = $notValidAfter;
        return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * @param string $module
     */
    public function setModule($module)
    {
        $this->module = $module;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDisplayInBasket()
    {
        return $this->displayInBasket;
    }

    /**
     * @param boolean $displayInBasket
     */
    public function setDisplayInBasket($displayInBasket)
    {
        $this->displayInBasket = $displayInBasket;
        return $this;
    }

    /**
     * @return float
     */
    public function getQualifyingMinimumSubtotal()
    {
        return $this->qualifyingMinimumSubtotal;
    }

    /**
     * @param float $qualifyingMinimumSubtotal
     */
    public function setQualifyingMinimumSubtotal($qualifyingMinimumSubtotal)
    {
        $this->qualifyingMinimumSubtotal = $qualifyingMinimumSubtotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getQualifyingMaximumSubtotal()
    {
        return $this->qualifyingMaximumSubtotal;
    }

    /**
     * @param float $qualifyingMaximumSubtotal
     */
    public function setQualifyingMaximumSubtotal($qualifyingMaximumSubtotal)
    {
        $this->qualifyingMaximumSubtotal = $qualifyingMaximumSubtotal;
        return $this;
    }

    /**
     * @return int
     */
    public function getQualifyingMinimumQuantity()
    {
        return $this->qualifyingMinimumQuantity;
    }

    /**
     * @param int $qualifyingMinimumQuantity
     */
    public function setQualifyingMinimumQuantity($qualifyingMinimumQuantity)
    {
        $this->qualifyingMinimumQuantity = $qualifyingMinimumQuantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getQualifyingMaximumQuantity()
    {
        return $this->qualifyingMaximumQuantity;
    }

    /**
     * @param int $qualifyingMaximumQuantity
     */
    public function setQualifyingMaximumQuantity($qualifyingMaximumQuantity)
    {
        $this->qualifyingMaximumQuantity = $qualifyingMaximumQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getQualifyingMinimumWeight()
    {
        return $this->qualifyingMinimumWeight;
    }

    /**
     * @param float $qualifyingMinimumWeight
     */
    public function setQualifyingMinimumWeight($qualifyingMinimumWeight)
    {
        $this->qualifyingMinimumWeight = $qualifyingMinimumWeight;
        return $this;
    }

    /**
     * @return float
     */
    public function getQualifyingMaximumWeight()
    {
        return $this->qualifyingMaximumWeight;
    }

    /**
     * @param float $qualifyingMaximumWeight
     */
    public function setQualifyingMaximumWeight($qualifyingMaximumWeight)
    {
        $this->qualifyingMaximumWeight = $qualifyingMaximumWeight;
        return $this;
    }

    /**
     * @return float
     */
    public function getBasketMinimumSubtotal()
    {
        return $this->basketMinimumSubtotal;
    }

    /**
     * @param float $basketMinimumSubtotal
     */
    public function setBasketMinimumSubtotal($basketMinimumSubtotal)
    {
        $this->basketMinimumSubtotal = $basketMinimumSubtotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getBasketMaximumSubtotal()
    {
        return $this->basketMaximumSubtotal;
    }

    /**
     * @param float $basketMaximumSubtotal
     */
    public function setBasketMaximumSubtotal($basketMaximumSubtotal)
    {
        $this->basketMaximumSubtotal = $basketMaximumSubtotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getBasketMinimumQuantity()
    {
        return $this->basketMinimumQuantity;
    }

    /**
     * @param float $basketMinimumQuantity
     */
    public function setBasketMinimumQuantity($basketMinimumQuantity)
    {
        $this->basketMinimumQuantity = $basketMinimumQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getBasketMaximumQuantity()
    {
        return $this->basketMaximumQuantity;
    }

    /**
     * @param float $basketMaximumQuantity
     */
    public function setBasketMaximumQuantity($basketMaximumQuantity)
    {
        $this->basketMaximumQuantity = $basketMaximumQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getBasketMinimumWeight()
    {
        return $this->basketMinimumWeight;
    }

    /**
     * @param float $basketMinimumWeight
     */
    public function setBasketMinimumWeight($basketMinimumWeight)
    {
        $this->basketMinimumWeight = $basketMinimumWeight;
        return $this;
    }

    /**
     * @return float
     */
    public function getBasketMaximumWeight()
    {
        return $this->basketMaximumWeight;
    }

    /**
     * @param float $basketMaximumWeight
     */
    public function setBasketMaximumWeight($basketMaximumWeight)
    {
        $this->basketMaximumWeight = $basketMaximumWeight;
        return $this;
    }

    /**
     * @return array
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * @param array $settings
     */
    public function setSettings(array $settings = array())
    {
        $this->settings = $settings;
        return $this;
    }

    public function addSetting($key, $value)
    {
        $this->settings[$key] = $value;
        return $this;
    }

    /**
     * @return array
     */
    public function getExclusions()
    {
        return $this->exclusions;
    }

    /**
     * @param array $exclusions
     */
    public function setExclusions(array $exclusions = array())
    {
        $this->exclusions = $exclusions;
        return $this;
    }

    public function addExclusion($group, $type)
    {
        $this->exclusions[$group] = $type;
    }

    /**
     * {@inheritDoc}
     * 
     * Format (Pre MM9):
     * 
     *  <PriceGroup_Add>
     *      <Name>Warrior</Name>
     *      <Pricing>Discount</Pricing>
     *      <Amount>10.00</Amount>
     *  </PriceGroup_Add>
     *
     *
     * Format (MM9):
     *
     *  <PriceGroup_Add>
     *      <Name>Warrior</Name>
     *      <Eligbility>Coupon,All,Customer,LoggedIn</Eligibility>
     *      <NotValidBefore>
     *          <Day>01</Day>									(required)
     *          <Month>01</Month>								(required)
     *          <Year>1970</Year>								(required)
     *          <Minute>30</Minute>								(optional)
     *          <Hour>12</Hour>									(optional)
     *      </NotValidBefore>
     *      <NotValidAfter>
     *          <Day>01</Day>									(required)
     *          <Month>01</Month>								(required)
     *          <Year>1970</Year>								(required)
     *          <Minute>30</Minute>								(optional)
     *          <Hour>12</Hour>									(optional)
     *      </NotValidAfter>
     *      <Priority>100</Priority>
     *
     *      <!-- One of the following -->
     *
     *      <Pricing>Retail,Cost,Discount,Markup</Pricing>
     *      <Amount>10.00</Amount>
     *
     *      <!-- or -->
     *
     *      <Module>discount_addon|discount_addon|discount_basket|discount_buyxgety|discount_product|discount_shipping_product|discount_shipping_basket| discount_saleprice|discount_volume</Module>

     *      <Description>Textual Description</Description>
     *      <DisplayInBasket>No</DisplayInBasket>
     *      <QualifyingMinimumSubtotal>0.00</QualifyingMinimumSubtotal>
     *      <QualifyingMaximumSubtotal>0.00</QualifyingMaximumSubtotal>
     *      <QualifyingMinimumQuantity>0</QualifyingMinimumQuantity>
     *      <QualifyingMaximumQuantity>0</QualifyingMaximumQuantity>
     *      <QualifyingMinimumWeight>0.00</QualifyingMinimumWeight>
     *      <QualifyingMaximumWeight>0.00</QualifyingMaximumWeight>
     *      <BasketMinimumSubtotal>0.00</BasketMinimumSubtotal>
     *      <BasketMaximumSubtotal>0.00</BasketMaximumSubtotal>
     *      <BasketMinimumQuantity>0</BasketMinimumQuantity>
     *      <BasketMaximumQuantity>0</BasketMaximumQuantity>
     *      <BasketMinimumWeight>0.00</BasketMinimumWeight>
     *      <BasketMaximumWeight>0.00</BasketMaximumWeight>
     *
     *      <Settings>
     *      <!-- Module-specific settings -->
     *      </Settings>

     *      <Exclusions>
     *          <Exclusion group_name="xxx" type="basket|group|item" />
     *      </Exclusions>
     *  </PriceGroup_Add>
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<PriceGroup_Add />');

        if ($version < Version::NINE) {
            $xmlObject->addChild('Name', $this->getName());
            $xmlObject->addChild('Pricing', $this->getPricing());
            $xmlObject->addChild('Amount', $this->getAmount());

            return $xmlObject;
        }

        $xmlObject->addChild('Name', $this->getName());
        $xmlObject->addChild('Eligbility', $this->getEligbility());

        if ($this->getNotValidBefore() instanceof \DateTime) {
            $date = $this->getNotValidBefore();
            $notValidBefore = $xmlObject->addChild('NotValidBefore');
            $notValidBefore->addChild('Day', $date->format('d'));
            $notValidBefore->addChild('Month', $date->format('m'));
            $notValidBefore->addChild('Year', $date->format('Y'));
            $notValidBefore->addChild('Minute', $date->format('i'));
            $notValidBefore->addChild('Hour', $date->format('h'));
        }

        if ($this->getNotValidAfter() instanceof \DateTime) {
            $date = $this->getNotValidAfter();
            $notValidAfter = $xmlObject->addChild('NotValidAfter');
            $notValidAfter->addChild('Day', $date->format('d'));
            $notValidAfter->addChild('Month', $date->format('m'));
            $notValidAfter->addChild('Year', $date->format('Y'));
            $notValidAfter->addChild('Minute', $date->format('i'));
            $notValidAfter->addChild('Hour', $date->format('h'));
        }

        if ($this->getPriority()) {
            $xmlObject->addChild('Priority', $this->getPriority());
        }

        if (!$this->getModule()) {
            $xmlObject->addChild('Pricing', $this->getPricing());
            $xmlObject->addChild('Amount', $this->getAmount());
            return $xmlObject;
        }


        $xmlObject->addChild('Module', $this->getModule());
        $xmlObject->addChild('Description', $this->getDescription());
        $xmlObject->addChild('DisplayInBasket', $this->getDisplayInBasket() ? 'Yes' : 'No');
        $xmlObject->addChild('QualifyingMinimumSubtotal', $this->getQualifyingMinimumSubtotal());
        $xmlObject->addChild('QualifyingMaximumSubtotal', $this->getQualifyingMaximumSubtotal());
        $xmlObject->addChild('QualifyingMinimumQuantity', $this->getQualifyingMinimumQuantity());
        $xmlObject->addChild('QualifyingMaximumQuantity', $this->getQualifyingMaximumQuantity());
        $xmlObject->addChild('QualifyingMinimumWeight',   $this->getQualifyingMinimumWeight());
        $xmlObject->addChild('QualifyingMaximumWeight',   $this->getQualifyingMaximumWeight());
        $xmlObject->addChild('BasketMinimumSubtotal',     $this->getBasketMinimumSubtotal());
        $xmlObject->addChild('BasketMaximumSubtotal',     $this->getBasketMaximumSubtotal());
        $xmlObject->addChild('BasketMinimumQuantity',     $this->getBasketMinimumQuantity());
        $xmlObject->addChild('BasketMaximumQuantity',     $this->getBasketMaximumQuantity());
        $xmlObject->addChild('BasketMinimumWeight',       $this->getBasketMinimumWeight());


        $settings = $xmlObject->addChild('Settings');

        foreach ($this->getSettings() as $key => $value) {
            $settings->addChild($key, $value);
        }

        if (count($this->getExclusions())) {
            $settings = $xmlObject->addChild('Exclusions');
            foreach ($this->getExclusions() as $group => $type) {
                $exclusion = $settings->addChild('Exclusion');
                $exclusion->addAttribute('group', $group);
                $exclusion->addAttribute('type',  $type);
            }
        }


        return $xmlObject;
    }
}
                