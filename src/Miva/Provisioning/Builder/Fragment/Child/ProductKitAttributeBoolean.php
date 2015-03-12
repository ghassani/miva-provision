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
 * ProductVariantAttributeBoolean
 *
 * @author Gassan Idriss <gidriss@miva.com>
 */
class ProductVariantAttributeBoolean implements ChildFragmentInterface
{
    /** @var string */
    public $attributeCode;

    /** @var boolean */
    public $present;

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
     * @return boolean
     */
    public function isPresent()
    {
        return $this->present;
    }

    /**
     * @param boolean $present
     */
    public function setPresent($present)
    {
        $this->present = $present;
        return $this;
    }


    /**
     * {@inheritDoc}
     *
     * Format:
     *
     *  <Attribute_Boolean attribute_code="text" present="true"/>
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<Attribute_Boolean />');

        $xmlObject->addAttribute('attribute_code', $this->getAttributeCode());
        $xmlObject->addAttribute('present', $this->getPresent() ? 'true' : 'false');

        return $xmlObject;
    }
}