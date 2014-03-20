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

use Miva\Provisioning\Builder\Fragment\OrderCharge;

/**
* OrderChargeTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class OrderChargeTest extends \PHPUnit_Framework_TestCase
{

    /**
     * functionalTest
     * 
     * Test basic class functionality
     */
    public function functionalTest()
    {
        $fragment = new OrderCharge();
        
        $fragment            
        ->setType('Type')    
        ->setDescription('Description')    
        ->setAmount('Amount');
        
        
        $this->assertEquals($fragment->getType(), 'Type');    
        $this->assertEquals($fragment->getDescription(), 'Description');
        $this->assertEquals($fragment->getAmount(), 'Amount');
      

          
        $expectedXml = '<Charge>
            <Type>Type</Type>
            <Description>Description</Description>
            <Amount>Amount</Amount>
       </Charge>
';
    }
}
        