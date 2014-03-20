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

use Miva\Provisioning\Builder\Fragment\CalculateCharges;

/**
* CalculateChargesTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class CalculateChargesTest extends \PHPUnit_Framework_TestCase
{

    /**
     * testFunctionality
     * 
     * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new CalculateCharges();
        
        $fragment            
        ->setShippingModule('ShippingModule')    
        ->setShippingModuleData('ShippingModuleData');
        
        
        $this->assertEquals($fragment->getShippingModule(), 'ShippingModule');    
        $this->assertEquals($fragment->getShippingModuleData(), 'ShippingModuleData');
                
        $expectedXml = '<CalculateCharges>
                <ShippingModule>ShippingModule</ShippingModule>
                <ShippingModuleData>ShippingModuleData</ShippingModuleData>
        </CalculateCharges>';
    }
}        