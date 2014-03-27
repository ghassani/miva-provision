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

use Miva\Version;
use Miva\Provisioning\Builder\Helper\XmlHelper;
use Miva\Provisioning\Builder\SimpleXMLElement;

/**
* ProductKitPart
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ProductKitPart implements Model\FragmentFragmentInterface
{
    /** @var string */
    public $productCode;

    /** @var int */
    public $quantity;
    
    /**
     * 
     */
     public function __construct($productCode = null, $quantity = null)
     {
        $this->productCode = $productCode;
        $this->quantity = $quantity;    
     }
     
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
     * @param string productCode
     *
     * @return self
    */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }
    
    /**
     * getQuantity
     *
     * @return int
    */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * setQuantity
     *
     * @param int quantity
     *
     * @return self
    */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }
    
    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <Part product_code="part" quantity="2"/>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<Part />');

        $xmlObject->addAttribute('product_code', $this->getProductCode());
        $xmlObject->addAttribute('quantity', $this->getQuantity());        
                
        return $xmlObject;
    }     
}