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
* ProductRelatedProductAssign
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ProductRelatedProductAssign implements FragmentInterface
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