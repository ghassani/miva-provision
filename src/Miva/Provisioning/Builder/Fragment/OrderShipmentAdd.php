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
use Miva\Provisioning\Builder\Fragment\Child\ShipmentProductListProduct;

/**
* OrderShipmentAdd
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class OrderShipmentAdd implements StoreFragmentInterface
{

    /** @var int */
    protected $orderId;
    
    /** @var string */
    protected $productList = array();
    
    /** @var string */
    protected $code;

    /** @var float cost */
    protected $cost;
    

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
        foreach ($productList as $product) {
            if (!$product instanceof ShipmentProductListProduct) {
                throw new \InvalidArgumentException('OrderShipmentAdd:setProductList requires an array of ShipmentProductListProduct');
            }
        }
        $this->productList = $productList;
        return $this;
    }
    
    /**
     * addProductToList
     *
     * @param ProductListProduct $product
     *
     * @return self
    */
    public function addProductToList(ShipmentProductListProduct $product)
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
     * getCost
     *
     * @return float
    */
    public function getCost()
    {
        return $this->cost;
    }
    
    /**
     * setCost
     *
     * @param float $cost
     *
     * @return self
    */
    public function setCost($cost)
    {
        $this->cost = $cost;
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
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<OrderShipment_Add></OrderShipment_Add>');

        $xmlObject->addAttribute('order_id', $this->getOrderId());
        
        $productListXml = $xmlObject->addChild('ProductList');


        foreach($this->getProductList() as $product) {
            XmlHelper::appendToParent($productListXml, $product->toXml());
        }
        
        $xmlObject->addChild('Code', $this->getCode());
        
        if (!is_null($this->getCost())) {
            $xmlObject->addChild('Cost', number_format($this->getCost(), 2, '.', ''));

        }
        
        return $xmlObject;
    }
}
               