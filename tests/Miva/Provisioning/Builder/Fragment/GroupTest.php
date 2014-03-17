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

use Miva\Provisioning\Builder\Fragment\Group;

/**
 * GroupTest
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class GroupTest extends \PHPUnit_Framework_TestCase
{

    /**
      * functionalTest
      * 
      * Test basic class functionality
     */
    public function functionalTest()
    {
        $fragment = new Group();
        
        $fragment->setName('Name')
          ->addPrivledge('Code', 1, 1, 1, 1);

        $this->assertEquals($fragment->getName(), 'Name');
        $this->assertEquals($fragment->getPrivledges(), array('Code' => array(
            'code' => 'Code',
            'view' => 1,
            'add' => 1,
            'modify' => 1,
            'delete' => 1,
        )));
        
          
        $expectedXML = '<Group_Add name="Name">
            <Privilege code="Code" view="1" add="1" modify="1" delete="1" />
        </Group_Add>';
    }

}