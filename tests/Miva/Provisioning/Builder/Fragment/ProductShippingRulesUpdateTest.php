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

use Miva\Provisioning\Builder\Fragment\ProductShippingRulesUpdate;

/**
* ProductShippingRulesUpdateTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ProductShippingRulesUpdateTest extends \PHPUnit_Framework_TestCase
{

    /**
     * testFunctionality
     * 
     * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new ProductShippingRulesUpdate();
        
        $fragment 
          ->setProductCode('ProductCode')
          ->setShipsInOwnPackaging('ShipsInOwnPackaging')    
          ->setWidth('Width')    
          ->setLength('Length')
          ->setHeight('Height')    
          ->setLimitShippingMethods('LimitShippingMethods')    
          ->setShippingMethods(array());
        
        
        $this->assertEquals($fragment->getProductCode(), 'ProductCode'); 
        $this->assertEquals($fragment->getShipsInOwnPackaging(), 'ShipsInOwnPackaging');    
        $this->assertEquals($fragment->getWidth(), 'Width');    
        $this->assertEquals($fragment->getLength(), 'Length');    
        $this->assertEquals($fragment->getHeight(), 'Height');    
        $this->assertEquals($fragment->getLimitShippingMethods(), 'LimitShippingMethods');    
        $this->assertEquals($fragment->getShippingMethods(), array());
                
        $expectedXml = '<ProductShippingRules_Update product_code="ProductCode">
            <ShipsInOwnPackaging>ShipsInOwnPackaging</ShipsInOwnPackaging>
            <Width>Width</Width>
            <Length>Length</Length>
            <Height>Height</Height>
            <LimitShippingMethods>LimitShippingMethods</LimitShippingMethods>
            <ShippingMethods>
                <ShippingMethod module_code="upsxml" method_code="02"/>    (multiple allowed)
            </ShippingMethods>
        </ProductShippingRules_Update>
';
    }
}
        