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
 * ShippingMethodRulesUpdate
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
 */
class ProductShippingRulesUpdate implements Model\StoreFragmentInterface
{
    /** @var string */
    public $productCode;

    /** @var bool */
    public $shipsInOwnPackaging;

    /** @var string */
    public $width;

    /** @var string */
    public $length;

    /** @var string */
    public $height;
    
    /** @var bool */
    public $limitShippingMethods;

    /** @var array[ShippingMethod] */
    public $shippingMethods = array();

    /**
     * @return mixed
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * @param mixed $productCode
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param mixed $length
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLimitShippingMethods()
    {
        return $this->limitShippingMethods;
    }

    /**
     * @param mixed $limitShippingMethods
     */
    public function setLimitShippingMethods($limitShippingMethods)
    {
        $this->limitShippingMethods = $limitShippingMethods;
        return $this;
    }

    /**
     * @return array
     */
    public function getShippingMethods()
    {
        return $this->shippingMethods;
    }

    /**
     * @param array $shippingMethods
     */
    public function setShippingMethods(array $shippingMethods = array())
    {
        foreach ($shippingMethods as $method) {
            if(!$method instanceof ShippingMethod) {
                throw \InvalidArgumentException(sprintf('ProductShippingRulesUpdate::setShippingMethods requires an array of ShippingMethod'));
            }
        }
        $this->shippingMethods = $shippingMethods;
        return $this;
    }
    
    /**
     * @param ShippingMethod $method
     */
    public function addShippingMethod(ShippingMethod $shippingMethod)
    {
        $this->shippingMethods[] = $shippingMethod;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipsInOwnPackaging()
    {
        return $this->shipsInOwnPackaging;
    }

    /**
     * @param mixed $shipsInOwnPackaging
     */
    public function setShipsInOwnPackaging($shipsInOwnPackaging)
    {
        $this->shipsInOwnPackaging = $shipsInOwnPackaging;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }


    /**
     * {@inheritDoc}
     *
     * Format:
     *
     * <ProductShippingRules_Update product_code="prod">
     *  <ShipsInOwnPackaging>Yes</ShipsInOwnPackaging>
     *  <Width>1.23</Width>
     *  <Length>1.23</Length>
     *  <Height>1.23</Height>
     *  <LimitShippingMethods>No</LimitShippingMethods>
     *  <ShippingMethods>
     *      <ShippingMethod module_code="upsxml" method_code="02" />    (multiple allowed)
     *  </ShippingMethods>
     * </ProductShippingRules_Update>
     *
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<ProductShippingRules_Update />');

        $xmlObject->addAttribute('product_code', $this->getProductCode());

        $xmlObject->addChild('ShipsInOwnPackaging', $this->getShipsInOwnPackaging() ? 'Yes' : 'No');
        $xmlObject->addChild('Width',  $this->getWidth());
        $xmlObject->addChild('Length', $this->getLength());
        $xmlObject->addChild('Height', $this->getHeight());
        $xmlObject->addChild('LimitShippingMethods', $this->getLimitShippingMethods() ? 'Yes' : 'No');

        if (count($this->getShippingMethods())) {
            $shippingMethodsXml = $xmlObject->addChild('ShippingMethods');
            foreach ($this->getLimitShippingMethods() as $shippingMethod) {
                $shippingMethodXml = $shippingMethodsXml->addChild('ShippingMethod');
                $shippingMethodXml->addAttribute('module_code', $shippingMethod->getModuleCode());
                $shippingMethodXml->addAttribute('method_code', $shippingMethod->getMethodCode());
            }
        }


        return $xmlObject;
    }
}
