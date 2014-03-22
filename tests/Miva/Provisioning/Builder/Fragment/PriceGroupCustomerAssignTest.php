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

use Miva\Provisioning\Builder\Fragment\PriceGroupCustomerAssign;

/**
 * PriceGroupCustomerAssignTest
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class PriceGroupCustomerAssignTest extends \PHPUnit_Framework_TestCase
{

    /**
      * testFunctionality
      * 
      * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new PriceGroupCustomerAssign();

        
        $fragment->setGroupName('GroupName')
          ->setCustomerLogin('CustomerLogin');

        $this->assertEquals($fragment->getGroupName(), 'GroupName');
        $this->assertEquals($fragment->getCustomerLogin(), 'CustomerLogin');
        
          
        $expectedXML = '<PriceGroupCustomer_Assign group_name="GroupName" customer_login="CustomerLogin" />';
    }

}