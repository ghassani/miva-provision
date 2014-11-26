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

use Miva\Provisioning\Builder\Fragment\BoxAdd;

/**
 * BoxAddTest
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class BoxAddTest extends \PHPUnit_Framework_TestCase
{

    /**
      * testFunctionality
      * 
      * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new BoxAdd();
        
        $fragment->setDescription('Description')
          ->setEnabled('Enabled')
          ->setWidth('Width')
          ->setLength('Length')
          ->setHeight('Height')
          ->setBoxPackingSettings('MaxWeight', 'MaxQuantity');

        $this->assertEquals($fragment->getDescription(), 'Description');
        $this->assertEquals($fragment->getEnabled(), 'Enabled');
        $this->assertEquals($fragment->getWidth(), 'Width');
        $this->assertEquals($fragment->getLength(), 'Length');
        $this->assertEquals($fragment->getHeight(), 'Height');
        $this->assertEquals($fragment->getBoxPackingSettings(), array('MaxWeight','MaxQuantity'));
          
        $expectedXML = '<Box_Add>
             <Description>Description</Description>
             <Enabled>Enabled</Enabled>
             <Width>Width</Width>
             <Length>Length</Length>
             <Height>Height</Height>
             <BoxPackingSettings>
                 <MaxWeight>MaxWeight</MaxWeight>
                 <MaxQuantity>MaxQuantity</MaxQuantity>
             </BoxPackingSettings>
         </Box_Add>';
    }

}