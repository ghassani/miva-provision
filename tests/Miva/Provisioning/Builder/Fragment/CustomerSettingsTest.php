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

use Miva\Provisioning\Builder\Fragment\CustomerSettings;

/**
 * CustomerSettingsTest
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class CustomerSettingsTest extends \PHPUnit_Framework_TestCase
{

    /**
      * testFunctionality
      * 
      * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new CustomerSettings();
        
        $fragment->setMinimumPasswordLength('MinimumPasswordLength')
          ->setPasswordComplexity('PasswordComplexity')
          ->setResetLinkExpiration('ResetLinkExpiration');

        $this->assertEquals($fragment->getMinimumPasswordLength(), 'MinimumPasswordLength');
        $this->assertEquals($fragment->getPasswordComplexity(), 'PasswordComplexity');
        $this->assertEquals($fragment->getResetLinkExpiration(), 'ResetLinkExpiration');
         
        $expectedXML = '<CustomerSettings_Update>
           <MinimumPasswordLength>MinimumPasswordLength</MinimumPasswordLength>
            <PasswordComplexity>PasswordComplexity</PasswordComplexity>
            <ResetLinkExpiration>ResetLinkExpiration</ResetLinkExpiration>
        </CustomerSettings_Update>';
    }

}