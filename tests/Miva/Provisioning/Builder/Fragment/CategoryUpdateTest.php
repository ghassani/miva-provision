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

use Miva\Provisioning\Builder\Fragment\CategoryUpdate;

/**
 * CategoryUpdateTest
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class CategoryAddTest extends \PHPUnit_Framework_TestCase
{

    /**
      * testFunctionality
      * 
      * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new CategoryUpdate();
        
        $fragment->setCode('Code')
          ->setName('Name')
          ->setActive('Active');

        $this->assertEquals($fragment->getCode(), 'Code');
        $this->assertEquals($fragment->getName(), 'Name');
        $this->assertEquals($fragment->getActive(), 'Active');
          
        $expectedXML = '<Category_Add>
          <Code>Code</Code>
          <Name><![CDATA[Name]]></Name>
          <Active>Active</Active>
       </Category_Add> ';
    }

}