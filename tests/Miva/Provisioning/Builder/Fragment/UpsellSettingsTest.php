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

use Miva\Provisioning\Builder\Fragment\UpsellSettings;

/**
* UpsellSettingsTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class UpsellSettingsTest extends \PHPUnit_Framework_TestCase
{

    /**
     * testFunctionality
     * 
     * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new UpsellSettings();
        
        $fragment            
          ->setProductsToShow('ProductsToShow')    
          ->setMaxProductsToSelect('MaxProductsToSelect');
        
        
        $this->assertEquals($fragment->getProductsToShow(), 'ProductsToShow');    
        $this->assertEquals($fragment->getMaxProductsToSelect(), 'MaxProductsToSelect');
      

          
        $expectedXml = '<UpsellSettings_Update>
            <ProductsToShow>ProductsToShow</ProductsToShow>
            <MaxProductsToSelect>MaxProductsToSelect</MaxProductsToSelect>
        </UpsellSettings_Update>';
    }
}
        