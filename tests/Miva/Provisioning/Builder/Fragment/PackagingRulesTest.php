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

use Miva\Provisioning\Builder\Fragment\PackagingRules;

/**
* PackagingRulesTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class PackagingRulesTest extends \PHPUnit_Framework_TestCase
{

    /**
     * functionalTest
     * 
     * Test basic class functionality
     */
    public function functionalTest()
    {
        $fragment = new PackagingRules();
        
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
        