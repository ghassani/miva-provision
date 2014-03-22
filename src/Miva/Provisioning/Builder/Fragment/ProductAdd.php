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
* Product
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ProductAdd implements FragmentInterface
{

    /** @var string */
    protected $code;
    
    /** @var string */
    protected $name;
    
    /** @var int */
    protected $price;
    
    /** @var int */
    protected $cost;
    
    /** @var int */
    protected $weight;
    
    /** @var string */
    protected $description;
    
    /** @var boolean */
    protected $taxable = false;
    
    /** @var boolean */
    protected $active = true;
    
    /** @var string */
    protected $canonicalCategoryCode;
    
    /** @var string */
    protected $alternateDisplayPage;
    
    /** @var string */
    protected $thumbnailImage;
    
    /** @var string */
    protected $fullSizeImage;
    

    
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
     * getName
     *
     * @return string
    */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * setName
     *
     * @param string $name
     *
     * @return self
    */
    public function setName($name)
    {
        $this->name = $name;
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
     * getDescription
     *
     * @return string
    */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * setDescription
     *
     * @param string $description
     *
     * @return self
    */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
    
    /**
     * getTaxable
     *
     * @return boolean
    */
    public function getTaxable()
    {
        return $this->taxable;
    }
    
    /**
     * setTaxable
     *
     * @param boolean $taxable
     *
     * @return self
    */
    public function setTaxable(boolean $taxable)
    {
        $this->taxable = $taxable;
        return $this;
    }
    
    /**
     * getActive
     *
     * @return boolean
    */
    public function getActive()
    {
        return $this->active;
    }
    
    /**
     * setActive
     *
     * @param boolean $active
     *
     * @return self
    */
    public function setActive(boolean $active)
    {
        $this->active = $active;
        return $this;
    }
    
    /**
     * getCanonicalCategoryCode
     *
     * @return string
    */
    public function getCanonicalCategoryCode()
    {
        return $this->canonicalCategoryCode;
    }
    
    /**
     * setCanonicalCategoryCode
     *
     * @param string $canonicalCategoryCode
     *
     * @return self
    */
    public function setCanonicalCategoryCode($canonicalCategoryCode)
    {
        $this->canonicalCategoryCode = $canonicalCategoryCode;
        return $this;
    }
    
    /**
     * getAlternateDisplayPage
     *
     * @return string
    */
    public function getAlternateDisplayPage()
    {
        return $this->alternateDisplayPage;
    }
    
    /**
     * setAlternateDisplayPage
     *
     * @param string $alternateDisplayPage
     *
     * @return self
    */
    public function setAlternateDisplayPage($alternateDisplayPage)
    {
        $this->alternateDisplayPage = $alternateDisplayPage;
        return $this;
    }
    
    /**
     * getThumbnailImage
     *
     * @return string
    */
    public function getThumbnailImage()
    {
        return $this->thumbnailImage;
    }
    
    /**
     * setThumbnailImage
     *
     * @param string $thumbnailImage
     *
     * @return self
    */
    public function setThumbnailImage($thumbnailImage)
    {
        $this->thumbnailImage = $thumbnailImage;
        return $this;
    }
    
    /**
     * getFullSizeImage
     *
     * @return string
    */
    public function getFullSizeImage()
    {
        return $this->fullSizeImage;
    }
    
    /**
     * setFullSizeImage
     *
     * @param string $fullSizeImage
     *
     * @return self
    */
    public function setFullSizeImage($fullSizeImage)
    {
        $this->fullSizeImage = $fullSizeImage;
        return $this;
    }
    

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <Product_Add>
     *       <Code>ale-gallon</Code>
     *       <Name><![CDATA[Ale, gallon jug]]></Name>
     *       <Price>2.00</Price>
     *       <Cost>1.50</Cost>
     *       <Weight>8.00</Weight>
     *       <Description><![CDATA[A gallon jug of quality ale.]]></Description>
     *       <Taxable>Yes</Taxable>
     *       <Active>Yes</Active>
     *       <CanonicalCategoryCode>food</CanonicalCategoryCode>
     *       <AlternateDisplayPage>PROD</AlternateDisplayPage>
     *       <ThumbnailImage></ThumbnailImage>
     *       <FullSizeImage></FullSizeImage>
     *   </Product_Add>
     *
    */
    public function toXml()
    {
        $xmlObject = new \SimpleXmlElement('<Product_Add></Product_Add>');

        $xmlObject->addChild('Code', $this->getCode());
        $xmlObject->addChild('Name', sprintf('<![CDATA[%s]]>', $this->getName()));
        $xmlObject->addChild('Price', $this->getPrice());
        $xmlObject->addChild('Cost', $this->getCost());
        $xmlObject->addChild('Weight', $this->getWeight());
        $xmlObject->addChild('Description', sprintf('<![CDATA[%s]]>', $this->getDescription()));
        $xmlObject->addChild('Taxable', $this->getTaxable() ? 'Yes' : 'No');
        $xmlObject->addChild('Active', $this->getActive() ? 'Yes' : 'No');
        $xmlObject->addChild('CanonicalCategoryCode', $this->getCanonicalCategoryCode());
        $xmlObject->addChild('AlternateDisplayPage', $this->getAlternateDisplayPage());
        $xmlObject->addChild('ThumbnailImage', $this->getThumbnailImage());
        $xmlObject->addChild('FullSizeImage', $this->getFullSizeImage());
        
        return $xmlObject;
    }
}