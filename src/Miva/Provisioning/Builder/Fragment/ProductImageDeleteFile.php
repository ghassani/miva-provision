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
* ProductImageDeleteFile
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class ProductImageDeleteFile implements StoreFragmentInterface
{
        
    /** @var string */
    protected $productCode;
    
    /** @var string */
    protected $filePath;
      
        
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
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <ProductImage_Delete_File product_code="test" filepath="graphics/00000001/s2k_silver_front.gif"/>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<ProductImage_Delete_File></ProductImage_Delete_File>');

        $xmlObject->addAttribute('product_code', $this->getProductCode());
        $xmlObject->addAttribute('filepath', $this->getFilePath());
        
        return $xmlObject;
    }
    
} 
  