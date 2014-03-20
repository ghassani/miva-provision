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

use Miva\Provisioning\Builder\Fragment\ShippingMethodRulesExclusion;

/**
* ShippingMethodRulesExclusionTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ShippingMethodRulesExclusionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * functionalTest
     * 
     * Test basic class functionality
     */
    public function functionalTest()
    {
        $fragment = new ShippingMethodRulesExclusion();
        
        $fragment
        ->setModuleCode('ModuleCode') 
        ->setMethodCode('MethodCode');

        $this->assertEquals($fragment->getModuleCode(), 'ModuleCode');   
        $this->assertEquals($fragment->getMethodCode(), 'MethodCode');   

        $expectedXml = '<Excludes module_code="ModuleCode" method_code="MethodCode" />';
    }
}
        