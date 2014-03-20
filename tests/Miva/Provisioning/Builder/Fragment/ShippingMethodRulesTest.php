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
        ->setModuleCode('ModuleCode') 
        ->setMethodCode('MethodCode') 
        ->setPriority('Priority')    
        ->setDescription('Description')    
        ->setMinimumSubTotal('MinimumSubTotal')    
        ->setMaximumSubTotal('MaximumSubTotal')    
        ->setMinimumQuantity('MinimumQuantity')    
        ->setMaximumQuantity('MaximumQuantity')    
        ->setMinimumWeight('MinimumWeight')    
        ->setMaximumWeight('MaximumWeight')    
        ->setStates(array('States'))    
        ->setZipCodes(array('ZipCodes'))  
        ->setCountries(array('Countries'))    
        ->setExclusions(array('Exclusions'));
        
        
        $this->assertEquals($fragment->getModuleCode(), 'ModuleCode');   
        $this->assertEquals($fragment->getMethodCode(), 'MethodCode');   
        $this->assertEquals($fragment->getPriority(), 'Priority');    
        $this->assertEquals($fragment->getDescription(), 'Description');    
        $this->assertEquals($fragment->getMinimumSubTotal(), 'MinimumSubTotal');    
        $this->assertEquals($fragment->getMaximumSubTotal(), 'MaximumSubTotal');    
        $this->assertEquals($fragment->getMinimumQuantity(), 'MinimumQuantity');    
        $this->assertEquals($fragment->getMaximumQuantity(), 'MaximumQuantity');    
        $this->assertEquals($fragment->getMinimumWeight(), 'MinimumWeight');    
        $this->assertEquals($fragment->getMaximumWeight(), 'MaximumWeight');    
        $this->assertEquals($fragment->getStates(), array('States'));    
        $this->assertEquals($fragment->getZipCodes(), array('ZipCodes'));    
        $this->assertEquals($fragment->getCountries(), array('Countries'));    
        $this->assertEquals($fragment->getExclusions(), array('Exclusions'));
      

          
        $expectedXml = '<ShippingMethodRules_Update module_code="ModuleCode" method_code="MethodCode">
            <Priority>Priority</Priority>
            <Description>Description</Description>
            <MinimumSubTotal>MinimumSubTotal</MinimumSubTotal>
            <MaximumSubTotal>MaximumSubTotal</MaximumSubTotal>
            <MinimumQuantity>MinimumQuantity</MinimumQuantity>
            <MaximumQuantity>MaximumQuantity</MaximumQuantity>
            <MinimumWeight>MinimumWeight</MinimumWeight>
            <MaximumWeight>MaximumWeight</MaximumWeight>

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
        </ShippingMethodRules_Update>';
    }
}
        