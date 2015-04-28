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
* ProductRelatedProductAssign
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class ProductRelatedProductAssign implements StoreFragmentInterface
{
    
    /** @var string */
    protected $productCode;

    /** @var string */
    protected $relatedProductCode;
    
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
     * getRelatedProductCode
     *
     * @return string
    */
    public function getRelatedProductCode()
    {
        return $this->relatedProductCode;
    }
    
    /**
     * setRelatedProductCode
     *
     * @param string $relatedProductCode
     *
     * @return self
    */
    public function setRelatedProductCode($relatedProductCode)
    {
        $this->relatedProductCode = $relatedProductCode;
        return $this;
    }


    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <ProductRelatedProduct_Assign product_code="bolts" relatedproduct_code="bolts-silver" />
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<ProductRelatedProduct_Assign />');


        $xmlObject->addAttribute('product_code', $this->getProductCode());
        $xmlObject->addAttribute('relatedproduct_code', $this->getRelatedProductCode());
        
        return $xmlObject;
    }

}