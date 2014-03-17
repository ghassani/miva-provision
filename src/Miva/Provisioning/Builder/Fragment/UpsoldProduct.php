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
* UpsoldProduct
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class UpsoldProduct implements FragmentInterface
{
    
    
    /** @var string */
    protected $productCode;
    
    /** @var string */
    protected $display;
    
    /** @var int */
    protected $requiredAmount;
    
    /** @var string */
    protected $pricing;
    
    /** @var int */
    protected $price;
    

    
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
     * getDisplay
     *
     * @return string
    */
    public function getDisplay()
    {
        return $this->display;
    }
    
    /**
     * setDisplay
     *
     * @param string $display
     *
     * @return self
    */
    public function setDisplay($display)
    {
        $this->display = $display;
        return $this;
    }
    
    /**
     * getRequiredAmount
     *
     * @return int
    */
    public function getRequiredAmount()
    {
        return $this->requiredAmount;
    }
    
    /**
     * setRequiredAmount
     *
     * @param int $requiredAmount
     *
     * @return self
    */
    public function setRequiredAmount($requiredAmount)
    {
        $this->requiredAmount = $requiredAmount;
        return $this;
    }
    
    /**
     * getPricing
     *
     * @return string
    */
    public function getPricing()
    {
        return $this->pricing;
    }
    
    /**
     * setPricing
     *
     * @param string $pricing
     *
     * @return self
    */
    public function setPricing($pricing)
    {
        $this->pricing = $pricing;
        return $this;
    }
    
    /**
     * getPrice
     *
     * @return int
    */
    public function getPrice()
    {
        return $this->price;
    }
    
    /**
     * setPrice
     *
     * @param int $price
     *
     * @return self
    */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
    

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <UpsoldProduct_Add>
     *      <ProductCode>backpack</ProductCode>
     *      <Display>Total</Display>
     *      <RequiredAmount>50.00</RequiredAmount>
     *      <Pricing>AbsolutePrice</Pricing>
     *      <Price>17.00</Price>
     *  </UpsoldProduct_Add>
     *
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