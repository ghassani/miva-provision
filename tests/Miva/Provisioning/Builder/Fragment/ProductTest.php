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

use Miva\Provisioning\Builder\Fragment\ShippingMethod;

/**
* ShippingMethodTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ShippingMethodTest extends \PHPUnit_Framework_TestCase
{

    /**
     * functionalTest
     * 
     * Test basic class functionality
     */
    public function functionalTest()
    {
        $fragment = new ShippingMethod();
        
        $fragment            
        ->setModuleCode('ModuleCode')    
        ->setMethodCode('MethodCode');
        
        
        $this->assertEquals($fragment->getModuleCode(), 'ModuleCode');    
        $this->assertEquals($fragment->getMethodCode(), 'MethodCode');
                
        $expectedXml = '<ShippingMethod module_code="ModuleCode" method_code="MethodCode" />';
    }
}
        