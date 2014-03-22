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

use Miva\Provisioning\Builder\Fragment\OrderShipmentAdd;

/**
* OrderShipmentAddTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class OrderShipmentAddTest extends \PHPUnit_Framework_TestCase
{

    /**
     * testFunctionality
     * 
     * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new OrderShipmentAdd();
        
        $fragment
        ->setOrderId('OrderId')            
        ->setProductList(array(1))    
        ->setCode('Code');
        
        
        $this->assertEquals($fragment->getOrderId(), 'OrderId');
        $this->assertSameSize($fragment->getProductList(), array(1));
        $this->assertEquals($fragment->getCode(), 'Code');      

          
        $expectedXml = '<OrderShipment_Add order_id="OrderId">
            <ProductList>                                   
                <Product product_code="p1" quantity="1"/>      
            </ProductList>
            <Code>Code</Code>                    
        </OrderShipment_Add>';
    }
}
        