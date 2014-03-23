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
* OrderShipmentAdd
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class OrderShipmentAdd implements StoreFragmentInterface
{

    /** @var int */
    protected $orderId;
    
    /** @var string */
    protected $productList = array();
    
    /** @var string */
    protected $code;
    

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
     * getProductList
     *
     * @return array
    */
    public function getProductList()
    {
        return $this->productList;
    }
    
    /**
     * setProductList
     *
     * @param array $productList
     *
     * @return self
    */
    public function setProductList(array $productList)
    {
        $this->productList = $productList;
        return $this;
    }
    
    /**
     * addProductList
     *
     * @param ProductListProduct $product
     *
     * @return self
    */
    public function addProductList(ProductListProduct $product)
    {
        $this->productList[] = $product;
        return $this;
    }
    
    /**
     * getCode
     *
     * @return string
    */
    public function getCode()
    {
        return $this->code;
    }
    
    /**
     * setCode
     *
     * @param string $code
     *
     * @return self
    */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }
    

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <OrderShipment_Add order_id="1000">
     *       <ProductList>                                   (Required)
     *           <Product product_code="p1" quantity="1" />      (required)
     *       </ProductList>
     *      <Code>SHIPMENT_CODE</Code>                      (Required)
     *   </OrderShipment_Add>
     *
    */
    public function toXml()
    {

        $xmlObject = new \SimpleXmlElement('<OrderShipment_Add></OrderShipment_Add>');

        $xmlObject->addAttribute('order_id', $this->getOrderId());
        
        $productListXml = $xmlObject->addChild('ProductList');
        
        foreach($this->getProductList() as $product) {
            $productXml = $productListXml->addChild('Product');
            $productXml->addAttribute('product_code', $product->getProductCode());
            $productXml->addAttribute('quantity', $product->getQuantity());
        }
        
        $xmlObject->addChild('Code', $this->getCode());
        
        return $xmlObject;
    }
}
               