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

use Miva\Provisioning\Builder\Fragment\PriceGroupCustomer;

/**
 * PriceGroupCustomerTest
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class PriceGroupCustomerTest extends \PHPUnit_Framework_TestCase
{

    /**
      * functionalTest
      * 
      * Test basic class functionality
     */
    public function functionalTest()
    {
        $fragment = new PriceGroupCustomer();

        
        $fragment->setGroupName('GroupName')
          ->setCustomerLogin('CustomerLogin');

        $this->assertEquals($fragment->getGroupName(), 'GroupName');
        $this->assertEquals($fragment->getCustomerLogin(), 'CustomerLogin');
        
          
        $expectedXML = '<PriceGroupCustomer_Assign group_name="GroupName" customer_login="CustomerLogin" />';
    }

}