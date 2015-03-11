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
* ProductAdd
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class ProductAdd implements StoreFragmentInterface
{

    /** @var string */
    public $code;
    
    /** @var string */
    public $name;
    
    /** @var string */
    public $sku;
    
    /** @var int */
    public $price;
    
    /** @var int */
    public $cost;
    
    /** @var int */
    public $weight;
    
    /** @var string */
    public $description;
    
    /** @var boolean */
    public $taxable = false;
    
    /** @var boolean */
    public $active = true;
    
    /** @var string */
    public $canonicalCategoryCode;
    
    /** @var string */
    public $alternateDisplayPage;
    
    /** @var string */
    public $thumbnailImage;
    
    /** @var string */
    public $fullSizeImage;
    

    
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
     * getSku
     *
     * @return string
    */
    public function getSku()
    {
        return $this->sku;
    }
    
    /**
     * setSku
     *
     * @param string $sku
     *
     * @return self
    */
    public function setSku($sku)
    {
    	$this->sku = $sku;
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
    public function setTaxable($taxable)
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
    public function setActive($active)
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
     *       <SKU>sku</SKU>
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
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXmlElement('<Product_Add />');
        
        $xmlObject->addChild('Code',    $this->getCode());
        $xmlObject->addChild('Name',    $this->getName())->addAttribute('method-call', 'addCDATA');        
        $xmlObject->addChild('Price',   $this->getPrice());
        $xmlObject->addChild('Taxable', $this->getTaxable() ? 'Yes' : 'No');
        $xmlObject->addChild('Active',  $this->getActive()  ? 'Yes' : 'No');

        if ($this->getSku()) {
            $xmlObject->addChild('SKU', $this->getSku());
        }

        if ($this->getCost()) {
            $xmlObject->addChild('Cost', $this->getCost());
        }

        if ($this->getWeight()) {
            $xmlObject->addChild('Weight', $this->getWeight());
        }
        if ($this->getDescription()) {
            $xmlObject->addChild('Description', $this->getDescription())->addAttribute('method-call', 'addCDATA');
        }

        if ($this->getCanonicalCategoryCode()) {
            $xmlObject->addChild('CanonicalCategoryCode', $this->getCanonicalCategoryCode());
        }
        
        if ($this->getAlternateDisplayPage()) {
            $xmlObject->addChild('AlternateDisplayPage', $this->getAlternateDisplayPage());
        }

        if ($this->getThumbnailImage()) {
           $xmlObject->addChild('ThumbnailImage', $this->getThumbnailImage());
        }
        
        if ($this->getFullSizeImage()) {
            $xmlObject->addChild('FullSizeImage', $this->getFullSizeImage());
        }

        return $xmlObject;
    }
}