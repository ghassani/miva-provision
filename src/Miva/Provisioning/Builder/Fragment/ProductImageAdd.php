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
* ProductImageAdd
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ProductImageAdd implements StoreFragmentInterface
{
        
    /** @var string */
    protected $productCode;
    
    /** @var string */
    protected $filePath;
    
    /** @var string */
    protected $typeCode;    
        
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
     * getFilePath
     *
     * @return string
    */
    public function getFilePath()
    {
        return $this->filePath;
    }
    
    /**
     * setFilePath
     *
     * @param string $filePath
     *
     * @return self
    */
    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;
        return $this;
    }
   
    /**
     * getTypeCode
     *
     * @return string
    */
    public function getTypeCode()
    {
        return $this->typeCode;
    }
    
    /**
     * setTypeCode
     *
     * @param string $typeCode
     *
     * @return self
    */
    public function setTypeCode($typeCode)
    {
        $this->typeCode = $typeCode;
        return $this;
    }

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <ProductImage_Add product_code="test" filepath="graphics/00000001/s2k_silver_front.jpg" type_code="test_3" />
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<ProductImage_Add></ProductImage_Add>');

        $xmlObject->addAttribute('product_code', $this->getProductCode());
        $xmlObject->addAttribute('filepath', $this->getFilePath());
        $xmlObject->addAttribute('type_code', $this->getTypeCode());
        
        return $xmlObject;
    }
    
} 
    