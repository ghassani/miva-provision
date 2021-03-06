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
* ProductImageDelete
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class ProductImageDelete implements StoreFragmentInterface
{
        
    /** @var string */
    protected $productCode;
        
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
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <ProductImage_Delete_All_Product product_code="p1"/>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<ProductImage_Delete_All_Product></ProductImage_Delete_All_Product>');

        $xmlObject->addAttribute('product_code', $this->getProductCode());
        
        return $xmlObject;
    }
    
}  