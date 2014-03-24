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
        ->setCode('Code');
        
        
        $this->assertEquals($fragment->getCode(), 'Code');    


        $expectedXml = '<Product_Add>
            <Code>Code</Code>
            <Name><![CDATA[Name]]></Name>
            <Price>Price</Price>
            <Cost>Cost</Cost>
            <Weight>Weight</Weight>
            <Description><![CDATA[Description]]></Description>
            <Taxable>Taxable</Taxable>
            <Active>Active</Active>
            <CanonicalCategoryCode>CanonicalCategoryCode</CanonicalCategoryCode>
            <AlternateDisplayPage>AlternateDisplayPage</AlternateDisplayPage>
            <ThumbnailImage>ThumbnailImage</ThumbnailImage>
            <FullSizeImage>FullSizeImage</FullSizeImage>
        </Product_Add>';
    }
}
        