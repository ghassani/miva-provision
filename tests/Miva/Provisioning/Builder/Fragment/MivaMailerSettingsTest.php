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

use Miva\Provisioning\Builder\Fragment\MivaMailerSettings;

/**
* MivaMailerSettingsTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class MivaMailerSettingsTest extends \PHPUnit_Framework_TestCase
{

    /**
     * testFunctionality
     * 
     * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new MivaMailerSettings();
        
        $fragment  
          ->setAccount('Account')
          ->setServer('Server');
        
        
        $this->assertEquals($fragment->getAccount(), 'Account');
        $this->assertEquals($fragment->getServer(), 'Server');

        $expectedXml = '<MivaMailerSettings_Update>
            <Account>Account</Account>
            <Server>Server</Server>
        </MivaMailerSettings_Update>';
    }
}
        