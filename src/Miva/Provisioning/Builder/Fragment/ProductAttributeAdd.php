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

/**
* ProductAttributeAdd
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ProductAttributeAdd implements FragmentInterface
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
    
    /** @var string */
    protected $required;
    
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
     * @return string
    */
    public function getRequired()
    {
        return $this->required;
    }
    
    /**
     * setRequired
     *
     * @param string $required
     *
     * @return self
    */
    public function setRequired($required)
    {
        $this->required = $required;
        return $this;
    }
    

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <ProductAttribute_Add product_code="chest">
     *       <Code>lock</Code>
     *       <Type>select</Type>
     *       <Prompt><![CDATA[Lock]]></Prompt>
     *       <Image/>
     *       <Price>0.00</Price>
     *       <Cost>0.00</Cost>
     *       <Weight>0.00</Weight>
     *       <Required>Yes</Required>
     * </ProductAttribute_Add>
     *
    */
    public function toXml()
    {

        $xml = null;
        $xmlObject = new \SimpleXmlElement('<Fragment></Fragment>');

        foreach ($xmlObject->children() as $child) {
            $xml .= $child->saveXml();
        }
        
        return $xml;
    }
}
        