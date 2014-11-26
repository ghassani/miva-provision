<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@mivamerchant.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Miva\Provisioning\Builder\Fragment\Module\CustomFields;

use Miva\Provisioning\Builder\Fragment\Module\CustomFields\ProductFieldAdd;

/**
 * ProductFieldAdd
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ProductFieldAdd extends \PHPUnit_Framework_TestCase
{

    /**
      * testFunctionality
      * 
      * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new ProductFieldAdd();
        
        $fragment->setCode('Code')
          ->setName('Name')
          ->setFieldType('FieldType')
          ->setInfo('Info');

        
        $this->assertEquals($fragment->getCode(), 'Code');
        $this->assertEquals($fragment->getName(), 'Name');
        $this->assertEquals($fragment->getInfo(), 'Info');
        $this->assertEquals($fragment->getFieldType(),  'FieldType');
    }

    /**
     * testValidXML
     * 
     * Make sure it builds valid XML
     */
    public function testValidXML()
    {
        
        $fragment = new ProductFieldAdd();
        
        $fragment->setCode('Code')
          ->setName('Name')
          ->setFieldType('FieldType')
          ->setInfo('Info');
          
        $expectedXML = '
        <Module code="customfields" feature="fields_prod">
            <ProductField_Add>
              <Code>Code</Code>
              <Name>Name</Name>
              <FieldType>FieldType</FieldType>
              <Info><![CDATA[Info]]></Info>
            </ProductField_Add>
        </Module>';
        
        $this->assertXmlStringEqualsXmlString($expectedXml, $fragment->toXML()->saveXML());
    }
}