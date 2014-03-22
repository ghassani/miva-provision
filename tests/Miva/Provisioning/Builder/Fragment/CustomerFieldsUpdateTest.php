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

use Miva\Provisioning\Builder\Fragment\CustomerFieldsUpdate;

/**
 * CustomerFieldsUpdateTest
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class CustomerFieldsUpdateTest extends \PHPUnit_Framework_TestCase
{

    /**
      * testFunctionality
      * 
      * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new CustomerFieldsUpdate();
        
        $fragment->setBilling('Billing')
          ->setFirstName('FirstName')
          ->setLastName('LastName')
          ->setEmail('Email')
          ->setPhone('Phone')
          ->setFax('Fax')
          ->setPhone('Phone')
          ->setFax('Fax')
          ->setCompany('Company')
          ->setAddress('Address')
          ->setCity('City')
          ->setState('State')
          ->setZip('Zip')
          ->setCountry('Country');

        $this->assertEquals($fragment->getBilling(), 'Billing');
        $this->assertEquals($fragment->getFirstName(), 'FirstName');
        $this->assertEquals($fragment->getLastName(), 'LastName');
        $this->assertEquals($fragment->getEmail(), 'Email');
        $this->assertEquals($fragment->getPhone(), 'Phone');
        $this->assertEquals($fragment->getFax(), 'Fax');
        $this->assertEquals($fragment->getCompany(), 'Company');
        $this->assertEquals($fragment->getAddress(), 'Address');
        $this->assertEquals($fragment->getCity(), 'City');
        $this->assertEquals($fragment->getState(), 'State');
        $this->assertEquals($fragment->getZip(), 'Zip');
        $this->assertEquals($fragment->getCountry(), 'Country');
         
        $expectedXML = '<CustomerFields_Update>
           <Billing>Billing</Billing>
           <FirstName>FirstName</FirstName>
           <LastName>LastName</LastName>
           <Email>Required</Email>
           <Phone>Required</Phone>
           <Fax>Hidden</Fax>
           <Company>Optional</Company>
           <Address>Required</Address>
           <City>Required</City>
           <State>Required</State>
           <Zip>Required</Zip>
           <Country>Hidden</Country>
       </CustomerFields_Update>';
    }

}