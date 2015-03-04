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
 * AttributeTemplateAttributeOptionAdd
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
 */
class AttributeTemplateAttributeOptionAdd implements Model\StoreFragmentInterface
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
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $prompt;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var float
     */
    protected $cost;

    /**
     * @var float
     */
    protected $weight;

    /**
     * @var string
     */
    protected $image;

    /**
     * @var bool
     */
    protected $defaultOption = false;

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
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrompt()
    {
        return $this->prompt;
    }

    /**
     * @param string $prompt
     */
    public function setPrompt($prompt)
    {
        $this->prompt = $prompt;
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
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isDefaultOption()
    {
        return $this->defaultOption;
    }

    /**
     * @return boolean
     */
    public function getDefaultOption()
    {
        return $this->defaultOption;
    }
    /**
     * @param boolean $defaultOption
     */
    public function setDefaultOption($defaultOption)
    {
        $this->defaultOption = $defaultOption;
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
     * <AttributeTemplateAttributeOption_Update template_code="FOO" attribute_code="BAR" option_code="BAZ">
     *  <Code></Code> <!-- Required -->
     * <Prompt></Prompt> <!-- Required -->
     * <Price></Price> <!-- Optional -->
     * <Cost></Cost> <!-- Optional -->
     * <Weight></Weight> <!-- Optional -->
     * <Image></Image> <!-- Optional -->
     * <DefaultOption>Yes|No</DefaultOption> <!-- Optional -->
     * </AttributeTemplateAttributeOption_Update>
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<AttributeTemplateAttributeOption_Update />');

        $xmlObject->addAttribute('template_code', $this->getTemplateCode());
        $xmlObject->addAttribute('attribute_code', $this->getAttributeCode());
        $xmlObject->addAttribute('option_code', $this->getOptionCode());

        if ($this->getCode()) {
            $xmlObject->addChild('Code', $this->getCode());
        }

        if ($this->getPrompt()) {
            $xmlObject->addChild('Prompt', $this->getPrompt());
        }

        if ($this->getPrice()) {
            $xmlObject->addChild('Price', $this->getPrice());
        }

        if ($this->getCost()) {
            $xmlObject->addChild('Cost', $this->getCost());
        }

        if ($this->getWeight()) {
            $xmlObject->addChild('Weight', $this->getWeight());
        }

        if ($this->getImage()) {
            $xmlObject->addChild('Image', $this->getImage());
        }

        $xmlObject->addChild('DefaultOption', $this->getDefaultOption() ? 'Yes' : 'No');


        return $xmlObject;
    }
}

