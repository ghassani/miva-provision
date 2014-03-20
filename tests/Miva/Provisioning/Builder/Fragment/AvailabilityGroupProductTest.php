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

use Miva\Provisioning\Builder\Fragment\AvailabilityGroupProduct;

/**
 * AvailabilityGroupProductTest
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class AvailabilityGroupProductTest extends \PHPUnit_Framework_TestCase
{

    /**
      * testFunctionality
      * 
      * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new AvailabilityGroupProduct();
        
        $fragment->setGroupName('GroupName')
         ->setProductCode('ProductCode');

        $this->assertEquals($fragment->getGroupName(), 'Name');
        $this->assertEquals($fragment->getProductCode(), 'ProductCode');
          
        $expectedXML = '<AvailabilityGroupProduct_Assign group_name="Name" product_code="ProductCode" />';
    }

}