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

use Miva\Provisioning\Builder\Fragment\Country;

/**
 * CountryTest
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class CountryTest extends \PHPUnit_Framework_TestCase
{

    /**
      * functionalTest
      * 
      * Test basic class functionality
     */
    public function functionalTest()
    {
        $fragment = new Country('Name', 'Code', 'ISO_Code');
        
        $this->assertEquals($fragment->getName(), 'Name');
        $this->assertEquals($fragment->getCode(), 'Code');
        $this->assertEquals($fragment->getIsoCode(), 'ISO_Code');
        
        $fragment->setName('Name_Changed')
          ->setCode('Code_Changed')
          ->setIsoCode('ISO_Code_Changed');

        $this->assertEquals($fragment->getName(), 'Name_Changed');
        $this->assertEquals($fragment->getCode(), 'Code_Changed');
        $this->assertEquals($fragment->getIsoCode(), 'ISO_Code_Changed');
        
        $fragment->setName('Name')
          ->setCode('Code')
          ->setIsoCode('ISOCode');
          
        $expectedXML = '<Country_Add>
            <Name>Name</Name>
            <Code>Code</Code>
            <ISO_Code>ISO_Code</ISO_Code>
        </Country_Add>';
    }

}