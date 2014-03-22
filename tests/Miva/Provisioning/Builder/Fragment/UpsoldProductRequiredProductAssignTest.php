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

use Miva\Provisioning\Builder\Fragment\UpsoldProductRequiredProductAssign;

/**
 * UpsoldProductRequiredProductAssignTest
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class UpsoldProductRequiredProductAssignTest extends \PHPUnit_Framework_TestCase
{

    /**
      * testFunctionality
      * 
      * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new UpsoldProductRequiredProductAssign();
        
        $fragment->setUpsoldProductCode('UpsoldProductCode')
          ->setRequiredProductCode('RequiredProductCode');

        $this->assertEquals($fragment->getUpsoldProductCode(), 'UpsoldProductCode');
        $this->assertEquals($fragment->getRequiredProductCode(), 'RequiredProductCode');
          
        $expectedXML = '<UpsoldProductRequiredProduct_Assign upsoldproduct_code="UpsoldProductCode" requiredproduct_code="RequiredProductCode" />';
    }

}