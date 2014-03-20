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

use Miva\Provisioning\Builder\Fragment\Order;

/**
* OrderTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class OrderTest extends \PHPUnit_Framework_TestCase
{

    /**
     * testFunctionality
     * 
     * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new Order();
        
        $fragment
          ->setShipFirstName('ShipFirstName')
          ->setShipLastName('ShipLastName')
          ->setShipEmail('ShipEmail')
          ->setShipPhone('ShipPhone')
          ->setShipAddress1('ShipAddress1')
          ->setShipAddress2('ShipAddress2')
          ->setShipCity('ShipCity')
          ->setShipState('ShipState')
          ->setShipZip('ShipZip')
          ->setShipCountry('ShipCountry')
          ->setItems(array());
        
        
        $this->assertEquals($fragment->getShipFirstName(), 'ShipFirstName');
        $this->assertEquals($fragment->getShipLastName(), 'ShipLastName');
        $this->assertEquals($fragment->getShipEmail(), 'ShipEmail');
        $this->assertEquals($fragment->getShipPhone(), 'ShipPhone');
        $this->assertEquals($fragment->getShipAddress1(), 'ShipAddress1');
        $this->assertEquals($fragment->getShipAddress2(), 'ShipAddress2');
        $this->assertEquals($fragment->getShipCity(), 'ShipCity');
        $this->assertEquals($fragment->getShipState(), 'ShipState');
        $this->assertEquals($fragment->getShipZip(), 'ShipZip');
        $this->assertEquals($fragment->getShipCountry(), 'ShipCountry');
        $this->assertEquals($fragment->getItems(), array());
      

          
        $expectedXml = '<Order_Add>
            <ShipFirstName>ShipFirstName</ShipFirstName>
            <ShipLastName>ShipLastName</ShipLastName>
            <ShipEmail>ShipEmail</ShipEmail>
            <ShipPhone>ShipPhone</ShipPhone>
            <ShipAddress1>ShipAddress1</ShipAddress1>
            <ShipAddress2>ShipAddress2</ShipAddress2>
            <ShipCity>ShipCity</ShipCity>
            <ShipState>ShipState</ShipState>
            <ShipZip>ShipZip</ShipZip>
            <ShipCountry>ShipCountry</ShipCountry>

            <Items>
                <Item>
                    <Code>test</Code>
                    <Name>Test Product #1</Name>
                    <Price>1</Price>
                    <Weight>0</Weight>
                    <Quantity>1</Quantity>

                    <Options>
                        <Option>
                            <AttributeCode>test</AttributeCode>
                        </Option>

                        <Option>
                            <AttributeCode>template_attr</AttributeCode>
                            <Price>1.00</Price>
                            <OptionCode>v1</OptionCode>
                        </Option>
                    </Options>
                </Item>
            </Items>
        </Order_Add>
';
    }
}
        