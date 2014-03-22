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
* ProductImageUpdateType
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ProductImageUpdateType implements FragmentInterface
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
     *  <ProductImage_Update_Type product_code="test" filepath="graphics/00000001/s2k_silver_front.jpg" type_code="type_2" />
    */
    public function toXml()
    {
        $xmlObject = new \SimpleXmlElement('<ProductImage_Update_Type></ProductImage_Update_Type>');

        $xmlObject->addAttribute('product_code', $this->getProductCode());
        $xmlObject->addAttribute('filepath', $this->getFilePath());
        $xmlObject->addAttribute('type_code', $this->getTypeCode());
        
        return $xmlObject;
    }
    
} 
    