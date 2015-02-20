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
 * ProductAttributeOptionDelete
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
 */
class ProductAttributeOptionDelete implements Model\StoreFragmentInterface
{

    /** @var string */
    public $productCode;

    /** @var string */
    public $attributeCode;

    public $optionCode;

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
     * getAttributeCode
     *
     * @return string
     */
    public function getAttributeCode()
    {
        return $this->attributeCode;
    }

    /**
     * addAttributeCode
     *
     * @param string $attributeCode
     *
     * @return self
     */
    public function addAttributeCode($attributeCode)
    {
        $this->attributeCode = $attributeCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOptionCode()
    {
        return $this->optionCode;
    }

    /**
     * @param mixed $optionCode
     */
    public function setOptionCode($optionCode)
    {
        $this->optionCode = $optionCode;
        return $this;
    }



    /**
     * {@inheritDoc}
     *
     * Format:
     *
     * <ProductAttributeOption_Delete product_code="chest" attribute_code="lock" option_code="bar" />
     *
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<ProductAttributeOption_Delete />');

        $xmlObject->addAttribute('product_code', $this->getProductCode());
        $xmlObject->addAttribute('attribute_code', $this->getAttributeCode());
        $xmlObject->addAttribute('option_code', $this->getOptionCode());


        return $xmlObject;
    }
}
