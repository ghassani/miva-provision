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

use Miva\Provisioning\Builder\Fragment\ProductVariantAdd;

/**
* ProductVariantAddTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ProductVariantAddTest extends \PHPUnit_Framework_TestCase
{

    /**
     * testFunctionality
     * 
     * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new ProductVariantAdd();
        
        $fragment  
        ->setProductCode('ProductCode')          
        ->setOptions(array(1))    
        ->setParts(array(1))    
        ->setProductVariantPricing('Method', 'Price', 'Cost', 'Weight');
        
        
        $this->assertEquals($fragment->getProductCode(), 'ProductCode');
        $this->assertSameSize($fragment->getOptions(), array(1));    
        $this->assertSameSize($fragment->getParts(), array(1));    
        $this->assertSameSize($fragment->getProductVariantPricing(), array('Method', 'Price', 'Cost', 'Weight'));
      

          
        $expectedXml = '<ProductVariant_Add product_code="test">
            <Options>
                <Attribute_Option attribute_code="select" option_code="s1"/>
                <Attribute_Boolean attribute_code="text" present="true"/>
                <AttributeTemplateAttribute_Boolean attribute_code="test" attributetemplateattribute_code="checkbox" present="false"/>
                <AttributeTemplateAttribute_Option attribute_code="test" attributetemplateattribute_code="radio" option_code="r2"/>
            </Options>

            <Parts>
                <Part product_code="part" quantity="5"/>
            </Parts>

            <ProductVariantPricing>
                <Method>specific</Method>
                <Price>5.43</Price>
                <Cost>4.31</Cost>
                <Weight>3.21</Weight>
            </ProductVariantPricing>
        </ProductVariant_Add>';
    }
}
        