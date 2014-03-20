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

use Miva\Provisioning\Builder\Fragment\ProductAttribute;

/**
* ProductAttributeTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ProductAttributeTest extends \PHPUnit_Framework_TestCase
{

    /**
     * testFunctionality
     * 
     * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new ProductAttribute();
        
        $fragment  
        ->setProductCode('ProductCode')          
        ->setCode('Code')    
        ->setType('Type')    
        ->setPrompt('Prompt')    
        ->setImage('Image')    
        ->setPrice('Price')    
        ->setCost('Cost')    
        ->setWeight('Weight')    
        ->setRequired('Required');
        
        
        $this->assertEquals($fragment->getProductCode(), 'ProductCode');
        $this->assertEquals($fragment->getCode(), 'Code');    
        $this->assertEquals($fragment->getType(), 'Type');    
        $this->assertEquals($fragment->getPrompt(), 'Prompt');    
        $this->assertEquals($fragment->getImage(), 'Image');
        $this->assertEquals($fragment->getPrice(), 'Price');    
        $this->assertEquals($fragment->getCost(), 'Cost');    
        $this->assertEquals($fragment->getWeight(), 'Weight');
        $this->assertEquals($fragment->getRequired(), 'Required');
      

          
        $expectedXml = '<ProductAttribute_Add product_code="ProductCode">
            <Code>Code</Code>
            <Type>Type</Type>
            <Prompt><![CDATA[Prompt]]></Prompt>
            <Image>Image</Image>
            <Price>Price</Price>
            <Cost>Cost</Cost>
            <Weight>Weight</Weight>
            <Required>Required</Required>
        </ProductAttribute_Add>';
    }
}
        