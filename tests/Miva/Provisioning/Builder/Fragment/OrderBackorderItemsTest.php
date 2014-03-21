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

use Miva\Provisioning\Builder\Fragment\OrderBackorderItems;

/**
 * OrderBackorderItemsTest
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class OrderBackorderItemsTest extends \PHPUnit_Framework_TestCase
{

    /**
      * testFunctionality
      * 
      * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new OrderBackorderItems();
        
        $fragment->setOrderId('OrderId')
          ->setProducts(array(1));

        $this->assertEquals($fragment->getOrderId(), 'OrderId');
        $this->assertSameSize($fragment->getProducts(), array(1));
          
        $expectedXML = '<Order_Backorder_Items order_id="1000">
            <ProductList>                                   (Required)
                <Product>                                       (required)
                    <Code>p1</Code>                             (required)
                    <Quantity>1</Quantity>                      (required)
                    <DateInStock>                               (optional)
                        <Day>01</Day>                                   (required)
                        <Month>01</Month>                               (required)
                        <Year>1970</Year>                               (required)
                        <Hour>00</Hour>                                 (optional)
                        <Minute>01</Minute>                             (optional)
                    </DateInStock>
                </Product>
            </ProductList>
        </Order_Backorder_Items>';

    }

}
