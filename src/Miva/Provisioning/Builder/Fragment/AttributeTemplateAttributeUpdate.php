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
 * AttributeTemplateAttributeAdd
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
 */
class AttributeTemplateAttributeAdd implements Model\StoreFragmentInterface
{
    /** @var string */
    public $templateCode;

    /** @var string */
    public $attributeCode;

    /** @var string */
    public $code;

    /** @var string */
    public $type;

    /** @var string */
    public $prompt;

    /** @var string */
    public $image;

    /** @var float */
    public $price;

    /** @var float */
    public $cost;

    /** @var float */
    public $weight;

    /** @var boolean  */
    public $required = false;

    /** @var boolean  */
    public $inventory = false;

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
     * @param string code
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
     * @param string prompt
     *
     * @return self
     */
    public function setPrompt($prompt)
    {
        $this->prompt = $prompt;
        return $this;
    }

    /**
     * getType
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * setType
     *
     * @param string type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
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
     * @param string image
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
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * setPrice
     *
     * @param float price
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
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * setCost
     *
     * @param float cost
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
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * setWeight
     *
     * @param float weight
     *
     * @return self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * getRequired
     *
     * @return boolean
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * setRequired
     *
     * @param boolean $required
     *
     * @return self
     */
    public function setRequired($required)
    {
        $this->required = true === $required ? $required : false;
        return $this;
    }

    /**
     * getInventory
     *
     * @return boolean
     */
    public function getInventory()
    {
        return $this->inventory;
    }

    /**
     * setInventory
     *
     * @param boolean $inventory
     *
     * @return self
     */
    public function setInventory($inventory)
    {
        $this->inventory = true === $inventory ? $inventory : false;
        return $this;
    }

    /**
     * {@inheritDoc}
     *
     * Format:
     *
     *     <AttributeTemplateAttribute_Update template_code="spikes-armor" attribute_code="armor">
     *        <Code>spikes</Code>
     *        <Type>checkbox</Type>
     *        <Prompt><![CDATA[Would you like to add spikes to the armor? (+500 sp)]]></Prompt>
     *        <Image></Image>
     *        <Price>500.00</Price>
     *        <Cost>375.00</Cost>
     *        <Weight>0.00</Weight>
     *        <Required>No</Required>
     *        <Inventory>No</Inventory>
     *    </AttributeTemplateAttribute_Update>
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<AttributeTemplateAttribute_Update />');

        $xmlObject->addAttribute('template_code', $this->getTemplateCode());
        $xmlObject->addAttribute('attribute_code', $this->getAttributeCode());

        if ($this->getCode()) {
            $xmlObject->addChild('Code',$this->getCode());
        }

        if ($this->getType()) {
            $xmlObject->addChild('Type',$this->getType());
        }

        if ($this->getPrompt()) {
            $xmlObject->addChild('Prompt', $this->getPrompt())->addAttribute('method-call', 'addCDATA');
        }

        if ($this->getImage()) {
            $xmlObject->addChild('Image',$this->getImage());
        }

        if ($this->getPrice()) {
            $xmlObject->addChild('Price',$this->getPrice());
        }

        if ($this->getCost()) {
            $xmlObject->addChild('Cost',$this->getCost());
        }

        if ($this->getWeight()) {
            $xmlObject->addChild('Weight',$this->getWeight());
        }

        $xmlObject->addChild('Required',$this->getRequired() ? 'Yes' : 'No');
        $xmlObject->addChild('Inventory',$this->getInventory() ? 'Yes' : 'No');




        return $xmlObject;
    }
}