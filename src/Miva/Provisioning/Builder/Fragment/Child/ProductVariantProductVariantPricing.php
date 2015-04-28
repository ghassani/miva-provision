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
 * ProductVariantProductVariantPricing
 *
 * @author Gassan Idriss <gidriss@miva.com>
 */
class ProductVariantProductVariantPricing implements ChildFragmentInterface
{
    /** @var string */
    public $method;

    /** @var float */
    public $price;

    /** @var float */
    public $cost;

    /** @var float */
    public $weight;

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * {@inheritDoc}
     *
     * Format:
     *
     *  <ProductVariantPricing>
     *      <Method>sum</Method>
     *      <Price>25</Price>
     *      <Cost>0</Cost>
     *      <Weight>0</Weight>
     *  </ProductVariantPricing>
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<ProductVariantPricing />');

        $xmlObject->addChild('Method', $this->getMethod());

        if ($this->getPrice()) {
            $xmlObject->addChild('Price', $this->getPrice());
        }

        if ($this->getCost()) {
            $xmlObject->addChild('Cost', $this->getCost());
        }

        if ($this->getWeight()) {
            $xmlObject->addChild('Weight', $this->getWeight());
        }

        return $xmlObject;
    }
}