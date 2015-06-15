<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@miva.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning\Builder\Fragment\Child;

use Miva\Version;
use Miva\Provisioning\Builder\Helper\XmlHelper;
use Miva\Provisioning\Builder\SimpleXMLElement;
use Miva\Provisioning\Builder\Fragment\Model\ChildFragmentInterface;

/**
 * OrderCharge
 *
 * @author Gassan Idriss <gidriss@miva.com>
 */
class OrderCharge implements ChildFragmentInterface
{
    /** @var string */
    public $type;

    /** @var string */
    public $description;

    /** @var float */
    public $amount;

    /** @var float */
    public $displayAmount;

    /** @var bool */
    public $taxExempt;

    /** @var string */
    public $module;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
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
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getDisplayAmount()
    {
        return $this->displayAmount;
    }

    /**
     * @param float $displayAmount
     */
    public function setDisplayAmount($displayAmount)
    {
        $this->displayAmount = $displayAmount;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getTaxExempt()
    {
        return $this->taxExempt;
    }

    /**
     * @param boolean $taxExempt
     */
    public function setTaxExempt($taxExempt)
    {
        $this->taxExempt = $taxExempt;
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
     * {@inheritDoc}
     *
     * Format:
     *
     *  <Charge>
     *      <Type>SHIPPING|TAX|etc</Type>
     *      <Description>TEST</Description>
     *      <Amount>x.xx</Amount>
     *      <DisplayAmount>x.xx</DisplayAmount>
     *      <TaxExempt>Yes|No</Code>
     *  </Charge>
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<Charge />');

        $xmlObject->addChild('Type', $this->getType());
        $xmlObject->addChild('Description',   $this->getDescription());
        $xmlObject->addChild('Amount',  number_format($this->getAmount(), 2, '.', ''));
        $xmlObject->addChild('DisplayAmount',  number_format($this->getDisplayAmount(), 2, '.', ''));
        $xmlObject->addChild('TaxExempt',  $this->getTaxExempt() ? 'Yes' : 'No');
        $xmlObject->addChild('Module',  $this->getModule());

        return $xmlObject;
    }
} 

