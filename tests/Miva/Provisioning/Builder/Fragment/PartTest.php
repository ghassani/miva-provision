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

use Miva\Provisioning\Builder\Fragment\Part;

/**
 * PartTest
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class PartTest extends \PHPUnit_Framework_TestCase
{

    /**
      * testFunctionality
      * 
      * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new Part('ProductCode', 'Quantity');
        
        $this->assertEquals($fragment->getProductCode(), 'ProductCode');
        $this->assertEquals($fragment->getQuantity(), 'Quantity');
        
        $fragment
          ->setProductCode('ProductCode_Changed')
          ->setQuantity('Quantity_Changed');

        $this->assertEquals($fragment->getProductCode(), 'ProductCode_Changed');
        $this->assertEquals($fragment->getQuantity(), 'Quantity_Changed');
          
        $expectedXML = '<Part product_code="part" quantity="4" />';
    }

}
