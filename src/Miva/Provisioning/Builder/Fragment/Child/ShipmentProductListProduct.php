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
 * ShipmentProductListProduct
 *
 * @author Gassan Idriss <gidriss@miva.com>
 */
class ShipmentProductListProduct implements ChildFragmentInterface
{

    /** @var string */
    public $code;

    /** @var int */
    public $quantity;

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
     * getQuantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * setQuantity
     *
     * @param int $quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }


    /**
     * {@inheritDoc}
     *
     * Format:
     *
     * <Product product_code="p1" quantity="1" />      (required)
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<Product />');

        $xmlObject->addChild('Code', $this->getCode());
        $xmlObject->addChild('Quantity', $this->getQuantity());

        return $xmlObject;
    }
}


