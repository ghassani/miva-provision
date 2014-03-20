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

use Miva\Provisioning\Builder\Fragment\Customer;

/**
 * CustomerTest
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class CustomerTest extends \PHPUnit_Framework_TestCase
{

    /**
      * testFunctionality
      * 
      * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new Customer();
        
        $fragment->setLogin('Login')
          ->setLostPasswordEmail('LostPasswordEmail')
          ->setPassword('Password')
          ->setShipFirstName('ShipFirstName')
          ->setShipLastName('ShipLastName')
          ->setShipEmail('ShipEmail')
          ->setShipPhone('ShipPhone')
          ->setShipFax('ShipFax')
          ->setShipCompany('ShipCompany')
          ->setShipAddress('ShipAddress')
          ->setShipCity('ShipCity')
          ->setShipStateCode('ShipStateCode')
          ->setShipZip('ShipZip')
          ->setShipCountryCode('ShipCountryCode')
          ->setBillFirstName('BillFirstName')
          ->setBillLastName('BillLastName')
          ->setBillEmail('BillEmail')
          ->setBillPhone('BillPhone')
          ->setBillFax('BillFax')
          ->setBillCompany('BillCompany')
          ->setBillAddress('BillAddress')
          ->setBillCity('BillCity')
          ->setBillStateCode('BillStateCode')
          ->setBillZip('BillZip')
          ->setBillCountryCode('BillCountryCode');

        $this->assertEquals($fragment->getLogin(), 'Login');
        $this->assertEquals($fragment->getLostPasswordEmail(), 'LostPasswordEmail');
        $this->assertEquals($fragment->getPassword(), 'Password');
        $this->assertEquals($fragment->getShipFirstName(), 'ShipFirstName');
        $this->assertEquals($fragment->getShipLastName(), 'ShipLastName');
        $this->assertEquals($fragment->getShipEmail(), 'ShipEmail');
        $this->assertEquals($fragment->getShipPhone(), 'ShipPhone');
        $this->assertEquals($fragment->getShipFax(), 'ShipFax');
        $this->assertEquals($fragment->getShipCompany(), 'ShipCompany');
        $this->assertEquals($fragment->getShipAddress(), 'ShipAddress');
        $this->assertEquals($fragment->getShipCity(), 'ShipCity');
        $this->assertEquals($fragment->getShipStateCode(), 'ShipStateCode');
        $this->assertEquals($fragment->getShipZip(), 'ShipZip');
        $this->assertEquals($fragment->getShipCountryCode(), 'ShipCountryCode');
        $this->assertEquals($fragment->getBillFirstName(), 'BillFirstName');
        $this->assertEquals($fragment->getBillLastName(), 'BillLastName');
        $this->assertEquals($fragment->getBillEmail(), 'BillEmail');
        $this->assertEquals($fragment->getBillPhone(), 'BillPhone');
        $this->assertEquals($fragment->getBillFax(), 'BillFax');
        $this->assertEquals($fragment->getBillCompany(), 'BillCompany');
        $this->assertEquals($fragment->getBillAddress(), 'BillAddress');
        $this->assertEquals($fragment->getBillCity(), 'BillCity');
        $this->assertEquals($fragment->getBillStateCode(), 'BillStateCode');
        $this->assertEquals($fragment->getBillZip(), 'BillZip');
        $this->assertEquals($fragment->getBillCountryCode(), 'BillCountryCode');
         
        $expectedXML = '<Customer_Add>
            <Login>Login</Login>
            <LostPasswordEmail>LostPasswordEmail</LostPasswordEmail>
            <Password>Password</Password>
            <ShipFirstName>ShipFirstName</ShipFirstName>
            <ShipLastName>ShipLastName</ShipLastName>
            <ShipEmail>ShipEmail</ShipEmail>
            <ShipPhone>ShipPhone</ShipPhone>
            <ShipFax>ShipFax</ShipFax>
            <ShipCompany>ShipCompany</ShipCompany>
            <ShipAddress>ShipAddress</ShipAddress>
            <ShipCity>ShipCity</ShipCity>
            <ShipStateCode>ShipStateCode</ShipStateCode>
            <ShipZip>ShipZip</ShipZip>
            <ShipCountryCode>ShipCountryCode</ShipCountryCode>
            <BillFirstName>BillFirstName</BillFirstName>
            <BillLastName>BillLastName</BillLastName>
            <BillEmail>BillEmail</BillEmail>
            <BillPhone>BillPhone</BillPhone>
            <BillFax>BillFax</BillFax>
            <BillCompany>BillCompany</BillCompany>
            <BillAddress>BillAddress</BillAddress>
            <BillCity>BillCity</BillCity>
            <BillStateCode>BillStateCode</BillStateCode>
            <BillZip>BillZip</BillZip>
            <BillCountryCode>BillCountryCode</BillCountryCode>
        </Customer_Add>';
    }

}