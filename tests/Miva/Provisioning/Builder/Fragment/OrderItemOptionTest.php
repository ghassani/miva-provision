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

use Miva\Provisioning\Builder\Fragment\OrderItemOption;

/**
* OrderItemOptionTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class OrderItemOptionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * testFunctionality
     * 
     * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new OrderItemOption();
        
        $fragment            
        ->setAttributeCode('AttributeCode')    
        ->setPrice('Price')    
        ->setOptionCode('OptionCode');
        
        
        $this->assertEquals($fragment->getAttributeCode(), 'AttributeCode');    
        $this->assertEquals($fragment->getPrice(), 'Price');    
        $this->assertEquals($fragment->getOptionCode(), 'OptionCode');
 
        $expectedXml = '<Option>
            <AttributeCode>AttributeCode</AttributeCode>
            <Price>Price</Price>
            <OptionCode>OptionCode</OptionCode>
       </Option>';
    }
}
        