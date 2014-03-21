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

use Miva\Provisioning\Builder\Fragment\ProductListProduct;

/**
 * ProductListProductTest
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ProductListProductTest extends \PHPUnit_Framework_TestCase
{

    /**
      * testFunctionality
      * 
      * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new ProductListProduct();
        
        $fragment->setCode('Code')
          ->setQuantity('Quantity')
          ->setDateInStock(new \DateTime());

        $this->assertEquals($fragment->getCode(), 'Code');
        $this->assertEquals($fragment->getQuantity(), 'Quantity');
        $this->assertInstanceOf('DateTime', $fragment->getDateInStock());
          
        $fragment->setDateInStock(null);
        
        $this->assertNull($fragment->getDateInStock());
        
        $expectedXML = '<Product>                                       (required)
           <Code>p1</Code>                             (required)
           <Quantity>1</Quantity>                      (required)
           <DateInStock>                               (optional)
               <Day>01</Day>                                   (required)
               <Month>01</Month>                               (required)
               <Year>1970</Year>                               (required)
               <Hour>00</Hour>                                 (optional)
               <Minute>01</Minute>                             (optional)
            </DateInStock>
      </Product>';

    }

}
