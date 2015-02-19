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
 * AttributeTemplateAttributeDelete
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
 */
class AttributeTemplateAttributeDelete implements Model\StoreFragmentInterface
{
    /** @var string */
    public $templateCode;

    /** @var string */
    public $attributeCode;

    /**
     * getTemplateCode
     *
     * @return string
     */
    public function getTemplateCode()
    {
        return $this->templateCode;
    }

    /**
     * setTemplateCode
     *
     * @param string $templateCode
     *
     * @return self
     */
    public function setTemplateCode($templateCode)
    {
        $this->templateCode = $templateCode;
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
     *     <AttributeTemplateAttribute_Delete template_code="spikes-armor" attribute_code="armor" />
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<AttributeTemplateAttribute_Delete />');

        $xmlObject->addAttribute('template_code', $this->getTemplateCode());
        $xmlObject->addAttribute('attribute_code', $this->getAttributeCode());


        return $xmlObject;
    }
}