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
 * ProductAttributeAddTemplateCopy
 *
 * @author Gassan Idriss <gidriss@miva.com>
 */
class ProductAttributeAddTemplateCopy implements StoreFragmentInterface
{

    /** @var string */
    public $productCode;

    /** @var string */
    public $attributeTemplateCode;

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
     * @param string productCode
     *
     * @return self
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }


    /**
     * getAttributeTemplateCode
     *
     * @return string
     */
    public function getAttributeTemplateCode()
    {
        return $this->attributeTemplateCode;
    }

    /**
     * setAttributeTemplateCode
     *
     * @param string $attributeTemplateCode
     *
     * @return self
     */
    public function setAttributeTemplateCode($attributeTemplateCode)
    {
        $this->attributeTemplateCode = $attributeTemplateCode;
        return $this;
    }


    /**
     * {@inheritDoc}
     *
     * Format:
     *
     * <ProductAttribute_Add_TemplateCopy product_code="shield-small" attribute_template_code="" />
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<ProductAttribute_Add_TemplateCopy />');

        $xmlObject->addAttribute('product_code', $this->getProductCode());
        $xmlObject->addAttribute('attribute_template_code', $this->getAttributeTemplateCode());


        return $xmlObject;
    }
}
