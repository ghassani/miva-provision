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

use Miva\Provisioning\Builder\Fragment\ImageTypeAdd;

/**
 * ImageTypeAddTest
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ImageTypeAddTest extends \PHPUnit_Framework_TestCase
{

    /**
      * testFunctionality
      * 
      * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new ImageTypeAdd();
        
        $fragment->setCode('Code')
          ->setDescription('Description');

        $this->assertEquals($fragment->getCode(), 'Code');
        $this->assertEquals($fragment->getDescription(), 'Description');
          
        $expectedXML = '<ImageType_Add><Code>Code</Code><Description>Description</Description></ImageType_Add>';

    }

}
