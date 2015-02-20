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
 * ProductAttributeOptionAdd
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
 */
class ProductAttributeOptionAdd implements Model\StoreFragmentInterface
{

    /** @var string */
    public $productCode;

    /** @var string */
    public $attributeCode;

    public $optionCode;

    /** @var string */
    public $code;

    /** @var string */
    public $prompt;

    /** @var string */
    public $image;

    /** @var int */
    public $price;

    /** @var int */
    public $cost;

    /** @var int */
    public $weight;

    /** @var bool */
    public $defaultOption = false;


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
     * setAttributeCode
     *
     * @param string $attributeCode
     *
     * @return self
     */
    public function setAttributeCode($attributeCode)
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
     * getImage
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * setImage
     *
     * @param string $image
     *
     * @return self
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * getPrice
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * setPrice
     *
     * @param int $price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * getCost
     *
     * @return int
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * setCost
     *
     * @param int $cost
     *
     * @return self
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * getWeight
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * setWeight
     *
     * @param int $weight
     *
     * @return self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
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
     * {@inheritDoc}
     *
     * Format:
     *
     * <ProductAttributeOption_Update product_code="chest" attribute_code="lock" option_code="bar">
     *       <Code>simple</Code> <!-- Required -->
     *       <Prompt><![CDATA[Simple (+200 sp)]]></Prompt> <!-- Required -->
     *       <Image/> <!-- Optional -->
     *       <Price>200.00</Price> <!-- Optional -->
     *       <Cost>100.00</Cost> <!-- Optional -->
     *       <Weight>0.00</Weight> <!-- Optional -->
     *       <DefaultOption>Yes|No</DefaultOption> <!-- Optional -->
     *   </ProductAttributeOption_Add>
     *
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<AttributeTemplateAttributeOption_Add />');

        $xmlObject->addAttribute('product_code', $this->getProductCode());
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

        if ($this->getWeight()) {
            $xmlObject->addChild('Image', $this->getWeight());
        }

        $xmlObject->addChild('DefaultOption', $this->getDefaultOption() ? 'Yes' : 'No');


        return $xmlObject;
    }
}
