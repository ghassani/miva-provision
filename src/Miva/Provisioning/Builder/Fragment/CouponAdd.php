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
 * CouponAdd
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
 */
class CouponAdd implements Model\StoreFragmentInterface
{
    const ELIGIBILITY_CUSTOMER  = 'customer';
    const ELIGIBILITY_LOGGEDIN  = 'loggedin';
    const ELIGIBILITY_ALL       = 'all';

    /** @var string */
    public $code;

    /** @var string */
    public $description;

    /** @var string */
    public $eligibility;

    /** @var DateTime */
    public $NotValidBefore;

    /** @var DateTime */
    public $NotValidAfter;

    /** @var int */
    public $maxUse = 0;

    /** @var int */
    public $maxPerShopper = 0;

    /** @var bool */
    public $active = false;

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
     * @return string
     */
    public function getEligibility()
    {
        return $this->eligibility;
    }

    /**
     * @param string $eligibility
     */
    public function setEligibility($eligibility)
    {
        $this->eligibility = $eligibility;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getNotValidBefore()
    {
        return $this->NotValidBefore;
    }

    /**
     * @param DateTime $NotValidBefore
     */
    public function setNotValidBefore(\DateTime $NotValidBefore = null)
    {
        $this->NotValidBefore = $NotValidBefore;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getNotValidAfter()
    {
        return $this->NotValidAfter;
    }

    /**
     * @param DateTime $NotValidAfter
     */
    public function setNotValidAfter(\DateTime $NotValidAfter = null)
    {
        $this->NotValidAfter = $NotValidAfter;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxUse()
    {
        return $this->maxUse;
    }

    /**
     * @param int $maxUse
     */
    public function setMaxUse($maxUse)
    {
        $this->maxUse = $maxUse;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxPerShopper()
    {
        return $this->maxPerShopper;
    }

    /**
     * @param int $maxPerShopper
     */
    public function setMaxPerShopper($maxPerShopper)
    {
        $this->maxPerShopper = $maxPerShopper;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }



    /**
     * {@inheritDoc}
     *
     * Format:
     *
     * <Coupon_Add>
     *      <Code>xxx</Code>
     *      <Description></Description>
     *      <Eligibility>Customer,LoggedIn,All</Eligibility>
     *      <NotValidBefore></NotValidBefore>
     *      <NotValidAfter></NotValidAfter>
     *      <MaxUse></MaxUse>
     *      <MaxPerShopper></MaxPerShopper>
     *      <Active>No</Active>
     *  </Coupon_Add>
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        if ($version < Version::NINE) {
            return;
        }

        $xmlObject = new SimpleXMLElement('<Coupon_Add />');

        $xmlObject->addChild('Description', $this->getDescription());
        $xmlObject->addChild('Code', $this->getCode());
        $xmlObject->addChild('Eligibility', $this->getEligibility());
        $xmlObject->addChild('MaxUse', $this->getMaxUse());
        $xmlObject->addChild('MaxPerShopper', $this->getMaxPerShopper());
        $xmlObject->addChild('Active', $this->getActive() ? 'Yes' : 'No');

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

        return $xmlObject;
    }
}
        