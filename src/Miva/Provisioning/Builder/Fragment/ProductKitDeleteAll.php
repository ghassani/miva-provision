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
* ProductKitDelete
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ProductKitDelete implements StoreFragmentInterface
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
     *  <ProductKit_Delete_All product_code="test"/>
    */
    public function toXml()
    {
        $xmlObject = new \SimpleXmlElement('<ProductKit_Delete_All></ProductKit_Delete_All>');

        $xmlObject->addAttribute('product_code', $this->getProductCode());
        
        return $xmlObject;
    }
}