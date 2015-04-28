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
* AttributeTemplateAttributeAdd
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class AttributeTemplateAttributeAdd implements StoreFragmentInterface
{
    /** @var string */
    protected $templateCode;
    
    /** @var string */
    protected $code;

    /** @var string */
    protected $type;

    /** @var string */
    protected $prompt;

    /** @var string */
    protected $image;

    /** @var float */
    protected $price;

    /** @var float */
    protected $cost;

    /** @var float */
    protected $weight;

    /** @var boolean  */
    protected $required = false;

    /** @var boolean  */
    protected $inventory = false;

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
     *     <AttributeTemplateAttribute_Add template_code="spikes-armor">
     *        <Code>spikes</Code>
     *        <Type>checkbox</Type>
     *        <Prompt><![CDATA[Would you like to add spikes to the armor? (+500 sp)]]></Prompt>
     *        <Image></Image>
     *        <Price>500.00</Price>
     *        <Cost>375.00</Cost>
     *        <Weight>0.00</Weight>
     *        <Required>No</Required>
     *        <Inventory>No</Inventory>
     *    </AttributeTemplateAttribute_Add>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<AttributeTemplateAttribute_Add />');

        $xmlObject->addAttribute('template_code', $this->getTemplateCode());
        
        $xmlObject->addChild('Code',$this->getCode());
        $xmlObject->addChild('Type',$this->getType());
        $xmlObject->addChild('Prompt', $this->getPrompt())->addAttribute('method-call', 'addCDATA');

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