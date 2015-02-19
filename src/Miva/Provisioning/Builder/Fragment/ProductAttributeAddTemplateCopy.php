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
 * ProductAttributeAddTemplateCopy
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
 */
class ProductAttributeAddTemplateCopy implements Model\FragmentInterface
{

    /** @var string */
    public $productCode;

    /** @var string */
    public $code;

    /** @var string */
    public $prompt;

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
     * getPrompt
     *
     * @return string
     */
    public function getPrompt()
    {
        return $this->prompt;
    }

    /**
     * setPrompt
     *
     * @param string $prompt
     *
     * @return self
     */
    public function setPrompt($prompt)
    {
        $this->prompt = $prompt;
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
     * <ProductAttribute_Add_TemplateCopy product_code="shield-small">
     *      <Code>att_spikes</Code>
     *      <Prompt><![CDATA[Fear Factor]]></Prompt>
     *      <AttributeTemplateCode>spikes-shield</AttributeTemplateCode>
     * </ProductAttribute_Add_TemplateCopy>
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<ProductAttribute_Add_TemplateCopy />');

        $xmlObject->addAttribute('product_code', $this->getProductCode());

        $xmlObject->addChild('Code', $this->getCode());
        $xmlObject->addChild('Prompt', $this->getPrompt())->addAttribute('method-call', 'addCDATA');
        $xmlObject->addChild('AttributeTemplateCode', $this->getAttributeTemplateCode());


        return $xmlObject;
    }
}
