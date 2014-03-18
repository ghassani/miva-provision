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

use Miva\Provisioning\Builder\Fragment\PriceGroupProduct;

/**
 * PriceGroupProductTest
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class PriceGroupProductTest extends \PHPUnit_Framework_TestCase
{

    /**
      * functionalTest
      * 
      * Test basic class functionality
     */
    public function functionalTest()
    {
        $fragment = new PriceGroupProduct();

        
        $fragment->setGroupName('GroupName')
          ->setProductCode('ProductCode');

        $this->assertEquals($fragment->getGroupName(), 'GroupName');
        $this->assertEquals($fragment->getProductCode(), 'ProductCode');
        
          
        $expectedXML = '<PriceGroupProduct_Assign group_name="GroupName" product_code="ProductCode" />';
    }

}