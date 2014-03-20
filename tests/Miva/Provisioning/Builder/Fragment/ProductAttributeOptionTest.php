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

use Miva\Provisioning\Builder\Fragment\ProductAttributeOption;

/**
* ProductAttributeOptionTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ProductAttributeOptionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * functionalTest
     * 
     * Test basic class functionality
     */
    public function functionalTest()
    {
        $fragment = new ProductAttributeOption();
        
        $fragment            
        ->setProductCode('ProductCode') 
        ->setAttributeCode('AttributeCode') 
        ->setCode('Code')    
        ->setPrompt('Prompt')    
        ->setImage('Image')    
        ->setPrice('Price')    
        ->setCost('Cost')    
        ->setWeight('Weight');
        
        
        $this->assertEquals($fragment->getProductCode(), 'ProductCode');   
        $this->assertEquals($fragment->getAttributeCode(), 'AttributeCode');   
        $this->assertEquals($fragment->getCode(), 'Code');    
        $this->assertEquals($fragment->getPrompt(), 'Prompt');    
        $this->assertEquals($fragment->getImage(), 'Image');
        $this->assertEquals($fragment->getPrice(), 'Price');    
        $this->assertEquals($fragment->getCost(), 'Cost');    
        $this->assertEquals($fragment->getWeight(), 'Weight');
      

          
        $expectedXml = '<ProductAttributeOption_Add product_code="ProductCode" attribute_code="AttributeCode">
            <Code>Code</Code>
            <Prompt><![CDATA[Prompt]]></Prompt>
            <Image>Image</Image>
            <Price>Price</Price>
            <Cost>Cost</Cost>
            <Weight>Weight</Weight>
        </ProductAttributeOption_Add>';
    }
}
        