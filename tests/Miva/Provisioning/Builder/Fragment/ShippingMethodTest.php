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

use Miva\Provisioning\Builder\Fragment\Product;

/**
* ProductTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ProductTest extends \PHPUnit_Framework_TestCase
{

    /**
     * functionalTest
     * 
     * Test basic class functionality
     */
    public function functionalTest()
    {
        $fragment = new Product();
        
        $fragment            
        ->setCode('Code')    
        ->setName('Name')    
        ->setPrice('Price')    
        ->setCost('Cost')    
        ->setWeight('Weight')    
        ->setDescription('Description')    
        ->setTaxable('Taxable')    
        ->setActive('Active')    
        ->setCanonicalCategoryCode('CanonicalCategoryCode')    
        ->setAlternateDisplayPage('AlternateDisplayPage')    
        ->setThumbnailImage('ThumbnailImage')    
        ->setFullSizeImage('FullSizeImage');
        
        
        $this->assertEquals($fragment->getCode(), 'Code');    
        $this->assertEquals($fragment->getName(), 'Name');
        $this->assertEquals($fragment->getPrice(), 'Price');    
        $this->assertEquals($fragment->getCost(), 'Cost');    
        $this->assertEquals($fragment->getWeight(), 'Weight');    
        $this->assertEquals($fragment->getDescription(), 'Description');    
        $this->assertEquals($fragment->getTaxable(), 'Taxable');    
        $this->assertEquals($fragment->getActive(), 'Active');    
        $this->assertEquals($fragment->getCanonicalCategoryCode(), 'CanonicalCategoryCode');    
        $this->assertEquals($fragment->getAlternateDisplayPage(), 'AlternateDisplayPage');
        $this->assertEquals($fragment->getThumbnailImage(), 'ThumbnailImage');   
        $this->assertEquals($fragment->getFullSizeImage(), 'FullSizeImage');

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
        