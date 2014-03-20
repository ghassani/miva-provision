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

use Miva\Provisioning\Builder\Fragment\UpsoldProduct;

/**
* UpsoldProductTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class UpsoldProductTest extends \PHPUnit_Framework_TestCase
{

    /**
     * testFunctionality
     * 
     * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new UpsoldProduct();
        
        $fragment            
        ->setProductCode('ProductCode')    
        ->setDisplay('Display')    
        ->setRequiredAmount('RequiredAmount')    
        ->setPricing('Pricing')    
        ->setPrice('Price');
        
        
        $this->assertEquals($fragment->getProductCode(), 'ProductCode');    
        $this->assertEquals($fragment->getDisplay(), 'Display');    
        $this->assertEquals($fragment->getRequiredAmount(), 'RequiredAmount');    
        $this->assertEquals($fragment->getPricing(), 'Pricing');    
        $this->assertEquals($fragment->getPrice(), 'Price');
      

          
        $expectedXml = '<UpsoldProduct_Add>
            <ProductCode>ProductCode</ProductCode>
            <Display>Display</Display>
            <Required_Amount>RequiredAmount</Required_Amount>
            <Pricing>Pricing</Pricing>
            <Price>Price</Price>
        </UpsoldProduct_Add>';
    }
}
        