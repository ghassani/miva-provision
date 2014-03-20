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

use Miva\Provisioning\Builder\Fragment\Module;

/**
* ModuleTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ModuleTest extends \PHPUnit_Framework_TestCase
{

    /**
     * testFunctionality
     * 
     * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new Module();
        
        $fragment
          ->setCode('Code')
          ->setFeature('Feature')
          ->setBackgroundColor('BackgroundColor')
          ->setLinkColor('LinkColor')
          ->setActiveLinkColor('ActiveLinkColor')
          ->setViewedLinkColor('ViewedLinkColor')
          ->setBackgroundImage('BackgroundImage');
        
        
        $this->assertEquals($fragment->getCode(), 'Code');
        $this->assertEquals($fragment->getFeature(), 'Feature');
        $this->assertEquals($fragment->getBackgroundColor(), 'BackgroundColor');
        $this->assertEquals($fragment->getLinkColor(), 'LinkColor');
        $this->assertEquals($fragment->getActiveLinkColor(), 'ActiveLinkColor');
        $this->assertEquals($fragment->getViewedLinkColor(), 'ViewedLinkColor');
        $this->assertEquals($fragment->getBackgroundImage(), 'BackgroundImage');
      

          
        $expectedXml = '<Module code="Code" feature="Feature">
            <BackgroundColor>BackgroundColor</BackgroundColor>
            <LinkColor>LinkColor</LinkColor>
            <ActiveLinkColor>ActiveLinkColor</ActiveLinkColor>
            <ViewedLinkColor>ViewedLinkColor</ViewedLinkColor>
            <BackgroundImage>BackgroundImage</BackgroundImage>
        </Module>';
    }
}
        