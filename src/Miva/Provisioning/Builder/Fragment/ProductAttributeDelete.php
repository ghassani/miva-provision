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
use Miva\Provisioning\Builder\SimpleXMLElement;

/**
 * ProductAttributeDelete
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
 */
class ProductAttributeDelete implements Model\StoreFragmentInterface
{

    /** @var string */
    public $productCode;

    /** @var string */
    public $attributeCode;

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
     * @return string
     */
    public function getAttributeCode()
    {
        return $this->attributeCode;
    }

    /**
     * @param string $attributeCode
     */
    public function setAttributeCode($attributeCode)
    {
        $this->attributeCode = $attributeCode;
        return $this;
    }

    /**
     * {@inheritDoc}
     *
     * Format:
     *
     * <ProductAttribute_Delete product_code="chest" attribute_code="bar" />
     *
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<ProductAttribute_Delete />');

        $xmlObject->addAttribute('product_code', $this->getProductCode());
        $xmlObject->addAttribute('attribute_code', $this->getAttributeCode());

        return $xmlObject;
    }
}
