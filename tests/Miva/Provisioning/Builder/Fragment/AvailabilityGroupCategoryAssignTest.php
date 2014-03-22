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

use Miva\Provisioning\Builder\Fragment\AvailabilityGroupCategoryAssign;

/**
 * AvailabilityGroupCategoryAssignTest
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class AvailabilityGroupCategoryAssignTest extends \PHPUnit_Framework_TestCase
{

    /**
      * testFunctionality
      * 
      * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new AvailabilityGroupCategoryAssign();
        
        $fragment->setGroupName('GroupName')
          ->setCategoryCode('CategoryCode');

          $this->assertEquals($fragment->getGroupName(), 'GroupName');
          $this->assertEquals($fragment->getCategoryCode(), 'CategoryCode');
          
          $expectedXML = '<AvailabilityGroupCategory_Assign group_name="GroupName" category_code="CategoryCode" />';
    }

}
