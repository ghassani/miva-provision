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

use Miva\Provisioning\Builder\Fragment\ShippingRules;

/**
* ShippingRulesTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ShippingRulesTest extends \PHPUnit_Framework_TestCase
{

    /**
     * functionalTest
     * 
     * Test basic class functionality
     */
    public function functionalTest()
    {
        $fragment = new ShippingRules();
        
        $fragment
            
        ->setRequiredShippingRedirectPageCode('RequiredShippingRedirectPageCode')
    
        ->setFallbackShippingMethod('FallbackShippingMethod')
    
        ;
        
        
        $this->assertEquals($fragment->getRequiredShippingRedirectPageCode(), 'RequiredShippingRedirectPageCode');
    
        $this->assertEquals($fragment->getFallbackShippingMethod(), 'FallbackShippingMethod');
      

          
        $expectedXml = '<?xml version="1.0"?>
<ShippingRules_Update>
            <RequiredShippingRedirectPageCode>OCST</RequiredShippingRedirectPageCode>
            <FallbackShippingMethod>
                <Description>Estimated Shipping</Description>
                <Type>Fixed|PercentOfSubTotal</Type>
                <Amount>1.23</Amount>
            </FallbackShippingMethod>
        </ShippingRules_Update>
';
    }
}
        