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
* ProductVariantGenerate
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class ProductVariantGenerate implements StoreFragmentInterface
{
        
    /** @var string */
    protected $productCode;
        
    /** @var string */
    protected $pricingMethod;

    /** @var string */
    protected $delimiter = '_';
        
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
     * getPricingMethod
     *
     * @return string
    */
    public function getPricingMethod()
    {
        return $this->pricingMethod;
    }

    /**
     * setPricingMethod
     *
     * @param string pricingMethod
     *
     * @return self
    */
    public function setPricingMethod($pricingMethod)
    {
        $this->pricingMethod = $pricingMethod;
        return $this;
    }

    /**
     * getDelimiter
     *
     * @return string
    */
    public function getDelimiter()
    {
    	return $this->delimiter;
    }

    /**
     * setDelimiter
     *
     * @param string delimiter
     *
     * @return self
    */
    public function setDelimiter($delimiter)
    {
	    $this->delimiter = $delimiter;
	    return $this;
    }
    
    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <ProductVariant_Generate product_code="test" pricing_method="master" delimiter="_"/>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<ProductVariant_Generate />');

        $xmlObject->addAttribute('product_code', $this->getProductCode());
        $xmlObject->addAttribute('pricing_method', $this->getPricingMethod());
         $xmlObject->addAttribute('delimiter', $this->getDelimiter());
        
        return $xmlObject;
    }
}