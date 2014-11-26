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

use Miva\Provisioning\Builder\Fragment\ProductShippingRulesUpdate;
use Miva\Provisioning\Builder\Fragment\ShippingMethod;

/**
* ProductShippingRulesUpdateTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ProductShippingRulesUpdateTest extends \PHPUnit_Framework_TestCase
{

    /**
     * testFunctionality
     * 
     * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new ProductShippingRulesUpdate();
        
        $fragment 
          ->setProductCode('ProductCode')
          ->setShipsInOwnPackaging('ShipsInOwnPackaging')    
          ->setWidth('Width')    
          ->setLength('Length')
          ->setHeight('Height')    
          ->setLimitShippingMethods('LimitShippingMethods')    
          ->setShippingMethods(array());
        
        
        $this->assertEquals($fragment->getProductCode(), 'ProductCode'); 
        $this->assertEquals($fragment->getShipsInOwnPackaging(), 'ShipsInOwnPackaging');    
        $this->assertEquals($fragment->getWidth(), 'Width');    
        $this->assertEquals($fragment->getLength(), 'Length');    
        $this->assertEquals($fragment->getHeight(), 'Height');    
        $this->assertEquals($fragment->getLimitShippingMethods(), 'LimitShippingMethods');    
        $this->assertEquals($fragment->getShippingMethods(), array());
        
        $testMethods = array(array('bar','foo'),array('bin', 'baz'));
        
        foreach($testMethods as $testMethod) {
            $method = new ShippingMethod();
            $method->setModuleCode($testMethod[0])
              ->setMethodCode($testMethod[1]);
            
            $fragment->addShippingMethod($method);
        }
        
        $this->assertEquals(count($testMethods), count($fragment->getShippingMethods()));
        
        foreach ($fragment->getShippingMethods() as $testClass) {
            $this->assertInstanceOf($testClass, 'Miva\Provisioning\Builder\Fragment\ShippingMethod');
        }
    }
    /**
     * testValidXML
     * 
     * Make sure it builds valid XML
     */
    public function testValidXML()
    {
        
        $fragment = new ProductShippingRulesUpdate();
        
        $fragment 
          ->setProductCode('ProductCode')
          ->setShipsInOwnPackaging('ShipsInOwnPackaging')    
          ->setWidth('Width')    
          ->setLength('Length')
          ->setHeight('Height')    
          ->setLimitShippingMethods('LimitShippingMethods');
          
        $testMethods = array(array('bar','foo'),array('bin', 'baz'));
        
        foreach($testMethods as $testMethod) {
            $method = new ShippingMethod();
            $method->setModuleCode($testMethod[0])
              ->setMethodCode($testMethod[1]);
            
            $fragment->addShippingMethod($method);
        }
              
        $expectedXml = '<ProductShippingRules_Update product_code="ProductCode">
            <ShipsInOwnPackaging>ShipsInOwnPackaging</ShipsInOwnPackaging>
            <Width>Width</Width>
            <Length>Length</Length>
            <Height>Height</Height>
            <LimitShippingMethods>LimitShippingMethods</LimitShippingMethods>
            <ShippingMethods>
                <ShippingMethod module_code="bar" method_code="foo"/>
                <ShippingMethod module_code="bin" method_code="baz"/>
            </ShippingMethods>
        </ProductShippingRules_Update>';
        
        $this->assertXmlStringEqualsXmlString($expectedXml, $fragment->toXML()->saveXML());
    }
}
        