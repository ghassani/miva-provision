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

use Miva\Provisioning\Builder\Fragment\AvailabilityGroupAdd;

/**
 * AvailabilityGroupAddTest
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class AvailabilityGroupAddTest extends \PHPUnit_Framework_TestCase
{

    /**
      * testFunctionality
      * 
      * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new AvailabilityGroupAdd();
        
        $fragment->setName('Name');

        $this->assertEquals($fragment->getName(), 'Name');
          
        $expectedXML = '<AvailabilityGroup_Add name="Name" />';
    }

}