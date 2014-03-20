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

use Miva\Provisioning\Builder\Fragment\CategoryProduct;

/**
 * CategoryProductTest
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class CategoryProductTest extends \PHPUnit_Framework_TestCase
{

    /**
      * testFunctionality
      * 
      * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new CategoryProduct('CategoryCode', 'ProductCode');
        
        $this->assertEquals($fragment->getCategoryCode(), 'CategoryCode');
        $this->assertEquals($fragment->getProductCode(), 'ProductCode');
        
        $fragment->setCategoryCode('CategoryCode_Changed')
          ->setProductCode('ProductCode_Changed');

        $this->assertEquals($fragment->getCategoryCode(), 'CategoryCode_Changed');
        $this->assertEquals($fragment->getProductCode(), 'ProductCode_Changed');

        $fragment->setCategoryCode('CategoryCode')
          ->setProductCode('ProductCode');
          
        $expectedXML = '<CategoryProduct_Assign category_code="CategoryCode" product_code="ProductCode" />';
    }

}