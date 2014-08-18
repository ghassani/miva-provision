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

use Miva\Provisioning\Builder\Fragment\AttributeBoolean;

/**
* AttributeBooleanTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class AttributeBooleanTest extends \PHPUnit_Framework_TestCase
{

    /**
     * testFunctionality
     * 
     * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new AttributeBoolean();
        
        $fragment->setAttributeCode('AttributeCode')
          ->setPresent(true);
          
        $this->assertEquals($fragment->getAttributeCode(), 'AttributeCode');
        $this->assertTrue($fragment->getPresent());

    }


    /**
     * testValidXML
     * 
     * Make sure it builds valid XML
     */
    public function testValidXML()
    {
        
        $fragment = new AttributeBoolean();
        
        $fragment->setAttributeCode('AttributeCode')
          ->setPresent(true);

          
        $expectedXml = '<Attribute_Boolean attribute_code="AttributeCode" present="true" />';
        
        $this->assertXmlStringEqualsXmlString($expectedXml, $fragment->toXML()->saveXML());
        
        $fragment->setAttributeCode('AttributeCode')
          ->setPresent(false);

          
        $expectedXml = '<Attribute_Boolean attribute_code="AttributeCode" present="false" />';
        
        $this->assertXmlStringEqualsXmlString($expectedXml, $fragment->toXML()->saveXML());
    }
}