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

use Miva\Provisioning\Builder\Fragment\AttributeTemplateAttributeAdd;

/**
 * AttributeTemplateAttributeAddTest
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class AttributeTemplateAttributeAddTest extends \PHPUnit_Framework_TestCase
{

    /**
      * testFunctionality
      * 
      * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new AttributeTemplateAttributeAdd();
        
        $fragment->setCode('Code')
          ->setType('Type')
          ->setPrompt('Prompt')
          ->setImage('Image')
          ->setPrice('Price')
          ->setCost('Cost')
          ->setWeight('Weight')
          ->setRequired('Required');

          $this->assertEquals($fragment->getCode(), 'Code');
          $this->assertEquals($fragment->getType(), 'Type');
          $this->assertEquals($fragment->getPrompt(), 'Prompt');
          $this->assertEquals($fragment->getImage(), 'Image');
          $this->assertEquals($fragment->getPrice(), 'Price');
          $this->assertEquals($fragment->getCost(), 'Cost');
          $this->assertEquals($fragment->getWeight(), 'Weight');
          $this->assertEquals($fragment->getRequired(), 'Required');
        
        
          $expectedXML = '<AttributeTemplateAttribute_Add template_code="spikes-armor">
            <Code>Code</Code>
            <Type>Type</Type>
            <Prompt><![CDATA[Prompt]]></Prompt>
            <Image>Image</Image>
            <Price>Price</Price>
            <Cost>Cost</Cost>
            <Weight>Weight</Weight>
            <Required>Required</Required>
        </AttributeTemplateAttribute_Add>';
    }

}
