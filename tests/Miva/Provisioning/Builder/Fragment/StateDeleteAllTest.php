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

use Miva\Provisioning\Builder\Fragment\StateDeleteAll;

/**
 * StateDeleteAllTest
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class StateDeleteAllTest extends \PHPUnit_Framework_TestCase
{

    /**
      * testFunctionality
      * 
      * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new StateDeleteAll();
        
        $fragment->setCode('Code')
          ->setName('Name');

        $this->assertEquals($fragment->getCode(), 'Code');
        $this->assertEquals($fragment->getName(), 'Name');
          
        $expectedXML = '<State_Add code="Code" name="Name" />';
    }

}