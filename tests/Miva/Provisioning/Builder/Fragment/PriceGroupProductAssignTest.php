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

use Miva\Provisioning\Builder\Fragment\PriceGroupProductAssign;

/**
 * PriceGroupProductAssignTest
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class PriceGroupProductAssignTest extends \PHPUnit_Framework_TestCase
{

    /**
      * testFunctionality
      * 
      * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new PriceGroupProductAssign();

        
        $fragment->setGroupName('GroupName')
          ->setProductCode('ProductCode');

        $this->assertEquals($fragment->getGroupName(), 'GroupName');
        $this->assertEquals($fragment->getProductCode(), 'ProductCode');
        
          
        $expectedXML = '<PriceGroupProduct_Assign group_name="GroupName" product_code="ProductCode" />';
    }

}