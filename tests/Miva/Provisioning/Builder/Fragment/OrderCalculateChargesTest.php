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

use Miva\Provisioning\Builder\Fragment\OrderCalculateCharges;

/**
 * OrderCalculateChargesTest
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class OrderCalculateChargesTest extends \PHPUnit_Framework_TestCase
{

    /**
      * testFunctionality
      * 
      * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new OrderCalculateCharges();
        
        $fragment->setShippingModule('ShippingModule')
          ->setShippingModuleData('ShippingModuleData');

        $this->assertEquals($fragment->getShippingModule(), 'ShippingModule');
        $this->assertEquals($fragment->getShippingModuleData(), 'ShippingModuleData');
        

        $expectedXML = '<CalculateCharges>
            <ShippingModule>flatrate</ShippingModule>
            <ShippingModuleData>test</ShippingModuleData>
        </CalculateCharges>';
    }

}