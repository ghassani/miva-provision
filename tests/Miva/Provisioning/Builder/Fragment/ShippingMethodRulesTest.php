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

use Miva\Provisioning\Builder\Fragment\ShippingMethodRules;

/**
* ShippingMethodRulesTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ShippingMethodRulesTest extends \PHPUnit_Framework_TestCase
{

    /**
     * functionalTest
     * 
     * Test basic class functionality
     */
    public function functionalTest()
    {
        $fragment = new ShippingMethodRules();
        
        $fragment
            
        ->setPriority('Priority')
    
        ->setDescription('Description')
    
        ->setMinimumSubTotal('MinimumSubTotal')
    
        ->setMaximumSubTotal('MaximumSubTotal')
    
        ->setMinimumQuantity('MinimumQuantity')
    
        ->setMaximumQuantity('MaximumQuantity')
    
        ->setMinimumWeight('MinimumWeight')
    
        ->setMaximumWeight('MaximumWeight')
    
        ->setStates('States')
    
        ->setZipCodes('ZipCodes')
    
        ->setCountries('Countries')
    
        ->setExclusions('Exclusions')
    
        ;
        
        
        $this->assertEquals($fragment->getPriority(), 'Priority');
    
        $this->assertEquals($fragment->getDescription(), 'Description');
    
        $this->assertEquals($fragment->getMinimumSubTotal(), 'MinimumSubTotal');
    
        $this->assertEquals($fragment->getMaximumSubTotal(), 'MaximumSubTotal');
    
        $this->assertEquals($fragment->getMinimumQuantity(), 'MinimumQuantity');
    
        $this->assertEquals($fragment->getMaximumQuantity(), 'MaximumQuantity');
    
        $this->assertEquals($fragment->getMinimumWeight(), 'MinimumWeight');
    
        $this->assertEquals($fragment->getMaximumWeight(), 'MaximumWeight');
    
        $this->assertEquals($fragment->getStates(), 'States');
    
        $this->assertEquals($fragment->getZipCodes(), 'ZipCodes');
    
        $this->assertEquals($fragment->getCountries(), 'Countries');
    
        $this->assertEquals($fragment->getExclusions(), 'Exclusions');
      

          
        $expectedXml = '<?xml version="1.0"?>
<ShippingMethodRules_Update module_code="upsxml" method_code="02">
            <Priority>5</Priority>
            <Description>2 Day Air</Description>
            <MinimumSubTotal>0.00</MinimumSubTotal>
            <MaximumSubTotal>0.00</MaximumSubTotal>
            <MinimumQuantity>0</MinimumQuantity>
            <MaximumQuantity>0</MaximumQuantity>
            <MinimumWeight>0.00</MinimumWeight>
            <MaximumWeight>0.00</MaximumWeight>

            <States>
                <State code="CA"/>
                <State code="OH"/>
            </States>

            <ZipCodes>92109,44145</ZipCodes>

            <Countries>
                <Country code="US"/>
                <Country code="GB"/>
            </Countries>

            <Exclusions>
                <Excludes module_code="flatrate" method_code="flat_2day"/>        (multiple allowed)
                <ExcludedBy module_code="baseunit" method_code="base_2day"/>    (multiple allowed)
            </Exclusions>
        </ShippingMethodRules_Update>
';
    }
}
        