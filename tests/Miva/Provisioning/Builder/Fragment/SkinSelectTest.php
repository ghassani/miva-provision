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

use Miva\Provisioning\Builder\Fragment\SkinSelect;

/**
* SkinSelectTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class SkinSelectTest extends \PHPUnit_Framework_TestCase
{

    /**
     * testFunctionality
     * 
     * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new SkinSelect();
        
        $fragment->setCode('Code');
        
        
        $this->assertEquals($fragment->getCode(), 'Code');   
      

          
        $expectedXml = '<Skin_Select code="Code" />';
    }
}
        