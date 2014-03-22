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

use Miva\Provisioning\Builder\Fragment\PackagingRulesUpdate;

/**
* PackagingRulesUpdateTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class PackagingRulesUpdateTest extends \PHPUnit_Framework_TestCase
{

    /**
     * testFunctionality
     * 
     * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new PackagingRulesUpdate();
        
        $fragment            
          ->setFallbackPackage('Width', 'Length', 'Height')    
          ->setBoxPacking('Type', 'ModuleCode');

        $this->assertEquals($fragment->getFallbackPackage(), array('Width', 'Length', 'Height'));
        $this->assertEquals($fragment->getBoxPacking(), array('Type', 'ModuleCode'));

        $expectedXml = '<PackagingRules_Update>
            <FallbackPackage>
                <Width>Width</Width>
                <Length>Length</Length>
                <Height>Height</Height>
            </FallbackPackage>
            <BoxPacking type="Type" module_code="ModuleCode"/>
        </PackagingRules_Update>';
    }
}
        