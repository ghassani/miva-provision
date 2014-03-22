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

use Miva\Provisioning\Builder\Fragment\AttributeTemplateAdd;

/**
 * AttributeTemplateAddTest
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class AttributeTemplateAddTest extends \PHPUnit_Framework_TestCase
{

    /**
      * testFunctionality
      * 
      * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new AttributeTemplateAdd();
        
        $fragment->setCode('code')
          ->setPrompt('prompt');

          $this->assertEquals($fragment->getCode(), 'code');
          $this->assertEquals($fragment->getPrompt(), 'prompt');
          
          $expectedXML = '<AttributeTemplate_Add code="code" prompt="prompt" />';
    }

}
