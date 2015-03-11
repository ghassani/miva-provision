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
 * AttributeTemplateAttributeOptionDelete
 *
 * @author Gassan Idriss <gidriss@miva.com>
 */
class AttributeTemplateAttributeOptionDelete implements StoreFragmentInterface
{
    /**
     * @var string
     */
    protected $templateCode;

    /**
     * @var string
     */
    protected $attributeCode;

    /**
     * @var string
     */
    protected $optionCode;

    /**
     * @return string
     */
    public function getTemplateCode()
    {
        return $this->templateCode;
    }

    /**
     * @param string $templateCode
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
     * @return string
     */
    public function getOptionCode()
    {
        return $this->optionCode;
    }

    /**
     * @param string $optionCode
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
     * <AttributeTemplateAttributeOption_Delete template_code="FOO" attribute_code="BAR" option_code="BAZ" />
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<AttributeTemplateAttributeOption_Update />');

        $xmlObject->addAttribute('template_code', $this->getTemplateCode());
        $xmlObject->addAttribute('attribute_code', $this->getAttributeCode());
        $xmlObject->addAttribute('option_code', $this->getOptionCode());


        return $xmlObject;
    }
}

