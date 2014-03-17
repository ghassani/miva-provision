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

use Miva\Provisioning\Builder\Fragment\PriceGroup;

/**
* PriceGroupTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class PriceGroupTest extends \PHPUnit_Framework_TestCase
{

    /**
     * functionalTest
     * 
     * Test basic class functionality
     */
    public function functionalTest()
    {
        $fragment = new PriceGroup();
        
        $fragment            
         ->setName('Name')    
         ->setPricing('Pricing')    
         ->setAmount('Amount');
        
        
        $this->assertEquals($fragment->getName(), 'Name');    
        $this->assertEquals($fragment->getPricing(), 'Pricing');    
        $this->assertEquals($fragment->getAmount(), 'Amount');

       $expectedXml = '<PriceGroup_Add>
            <Name>Name</Name>
            <Pricing>Pricing</Pricing>
            <Amount>Amount</Amount>
        </PriceGroup_Add>';
    }
}
        