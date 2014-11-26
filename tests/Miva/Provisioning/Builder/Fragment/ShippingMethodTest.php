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
     * testFunctionality
     * 
     * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new ShippingMethod();
        
        $fragment            
        ->setModuleCode('ModuleCode')
        ->setMethodCode('MethodCode');        
        
        $this->assertEquals($fragment->getModuleCode(), 'ModuleCode');
        $this->assertEquals($fragment->getMethodCode(), 'MethodCode');
    }
    
 /**
     * testValidXML
     * 
     * Make sure it builds valid XML
     */
    public function testValidXML()
    {
        $fragment = new ShippingMethod();
        
        $fragment            
        ->setModuleCode('ModuleCode')
        ->setMethodCode('MethodCode');        
        
        $expectedXml = '<ShippingMethod module_code="ModuleCode" method_code="MethodCode" />';
        
        $this->assertXmlStringEqualsXmlString($expectedXml, $fragment->toXML()->saveXML());
    }
}
        