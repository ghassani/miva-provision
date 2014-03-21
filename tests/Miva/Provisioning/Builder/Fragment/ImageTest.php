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

use Miva\Provisioning\Builder\Fragment\Image;

/**
 * ImageTest
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ImageTest extends \PHPUnit_Framework_TestCase
{

    /**
      * testFunctionality
      * 
      * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new Image('FilePath');
        
        $this->assertEquals($fragment->getFilePath(), 'FilePath');
        
        $fragment->setFilePath('FilePath_Changed');

        $this->assertEquals($fragment->getFilePath(), 'FilePath_Changed');
          
        $expectedXML = '<Image_Add filepath="FilePath_Changed" />';
    }

}
