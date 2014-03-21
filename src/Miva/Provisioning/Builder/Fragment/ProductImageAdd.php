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
* ProductImageAdd
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ProductImageAdd implements FragmentInterface
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
     *  <ProductImage_Delete product_code="test" filepath="graphics/00000001/s2k_silver_front.jpg" />
     *  <ProductImage_Delete_File product_code="test" filepath="graphics/00000001/s2k_silver_front.gif" />
     *  <ProductImage_Update_Type product_code="test" filepath="graphics/00000001/s2k_silver_front.jpg" type_code="type_2" />
     *  <ProductImage_Delete_All_Product product_code="p1" />
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
    