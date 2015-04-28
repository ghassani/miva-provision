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
use Miva\Provisioning\Builder\SimpleXMLElement;
use Miva\Provisioning\Builder\Fragment\Model\StoreFragmentInterface;

/**
* ProductAttributeAdd
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class ProductAttributeAdd implements StoreFragmentInterface
{
    
    /** @var string */
    protected $productCode;
    
    /** @var string */
    protected $code;
    
    /** @var string */
    protected $type;
    
    /** @var string */
    protected $prompt;
    
    /** @var string */
    protected $image;
    
    /** @var int */
    protected $price;
    
    /** @var int */
    protected $cost;
    
    /** @var int */
    protected $weight;

    /** @var boolean */
    protected $required = false;

    /** @var boolean */
    protected $inventory = false;
    
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
     * @param string $type
     *
     * @return self
    */
    public function setType($type)
    {
        $this->type = $type;
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
        $this->required = $required;
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
     * <ProductAttribute_Add product_code="chest">
     *       <Code>lock</Code> <!-- Required -->
     *       <Type>select</Type> <!-- Required -->
     *       <Prompt><![CDATA[Lock]]></Prompt> <!-- Required -->
     *       <Image/> <!-- Optional -->
     *       <Price>0.00</Price> <!-- Optional -->
     *       <Cost>0.00</Cost> <!-- Optional -->
     *       <Weight>0.00</Weight> <!-- Optional -->
     *       <Required>Yes</Required> <!-- Optional -->
     *       <Inventory>Yes</Inventory> <!-- Optional -->
     * </ProductAttribute_Add>
     *
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<ProductAttribute_Add />');

        $xmlObject->addAttribute('product_code', $this->getProductCode());

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
        