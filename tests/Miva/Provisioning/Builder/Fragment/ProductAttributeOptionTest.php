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
            
        ->setCode('Code')
    
        ->setPrompt('Prompt')
    
        ->setImage('Image')
    
        ->setPrice('Price')
    
        ->setCost('Cost')
    
        ->setWeight('Weight')
    
        ;
        
        
        $this->assertEquals($fragment->getCode(), 'Code');
    
        $this->assertEquals($fragment->getPrompt(), 'Prompt');
    
        $this->assertEquals($fragment->getImage(), 'Image');
    
        $this->assertEquals($fragment->getPrice(), 'Price');
    
        $this->assertEquals($fragment->getCost(), 'Cost');
    
        $this->assertEquals($fragment->getWeight(), 'Weight');
      

          
        $expectedXml = '<?xml version="1.0"?>
<ProductAttributeOption_Add product_code="chest" attribute_code="lock">
            <Code>simple</Code>
            <Prompt><![CDATA[Simple (+200 sp)]]></Prompt>
            <Image/>
            <Price>200.00</Price>
            <Cost>100.00</Cost>
            <Weight>0.00</Weight>
        </ProductAttributeOption_Add>
';
    }
}
        