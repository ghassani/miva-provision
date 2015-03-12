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
* ProductKitGenerateVariants
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class ProductKitGenerateVariants implements StoreFragmentInterface
{
        
    /** @var string */
    public $productCode;
        
    /** @var string */
    public $pricingMethod;
        
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
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <ProductKit_Generate_Variants product_code="test" pricing_method="master"/>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<ProductKit_Generate_Variants />');

        $xmlObject->addAttribute('product_code', $this->getProductCode());
        $xmlObject->addAttribute('pricing_method', $this->getPricingMethod());
        
        return $xmlObject;
    }
}