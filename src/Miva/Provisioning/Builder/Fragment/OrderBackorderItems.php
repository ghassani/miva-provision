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
* OrderBackorderItems
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class OrderBackorderItems implements StoreFragmentInterface
{
    
    /** @var int */
    public $orderId;
    
    /** @var array */
    public $products = array();

    /**
     * getOrderId
     *
     * @return int
    */
    public function getOrderId()
    {
        return $this->orderId;
    }
    
    /**
     * setOrderId
     *
     * @param int $orderId
     *
     * @return self
    */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * getProducts
     *
     * @return array
    */
    public function getProducts()
    {
        return $this->products;
    }
    
    /**
     * setProducts
     *
     * @param array $products
     *
     * @return self
    */
    public function setProducts(array $products)
    {
        foreach($products as $product) {
            if (!$product instanceof ProductListProduct) {
                throw new \InvalidArgumentException('OrderBackorderItems::setProducts requires an array of ProductListProduct');
            }
        }
        $this->products = $products;
        return $this;
    }
    
    /**
     * addProduct
     *
     * @param ProductListProduct $product
     *
     * @return self
    */
    public function addProduct(ProductListProduct $product)
    {
        $this->products[] = $product;
        return $this;
    }

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <Order_Backorder_Items order_id="1000">
     *       <ProductList>                                   (Required)
     *           <Product>                                       (required)
     *               <Code>p1</Code>                             (required)
     *               <Quantity>1</Quantity>                      (required)
     *               <DateInStock>                               (optional)
     *                   <Day>01</Day>                                   (required)
     *                   <Month>01</Month>                               (required)
     *                   <Year>1970</Year>                               (required)
     *                   <Hour>00</Hour>                                 (optional)
     *                   <Minute>01</Minute>                             (optional)
     *               </DateInStock>
     *           </Product>
     *       </ProductList>
     *   </Order_Backorder_Items>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<Order_Backorder_Items />');
        
        $xmlObject->addAttribute('order_id', $this->getOrderId());
        
        if (!count($this->getProducts())) {
            throw new \Exception('OrderBackorderItems requires at least one Product in ProductList');
        }
        
        $productListXmlRoot = $xmlObject->addChild('ProductList');
        
        foreach ($this->getProducts() as $product) {
            XmlHelper::appendToParent($productListXmlRoot, $product->toXml($version, $options));
        }
        
        return $xmlObject;
    }
}

