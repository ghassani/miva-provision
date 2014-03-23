<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@mivamerchant.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Miva\Provisioning\Builder;

use Miva\Provisioning\Builder\Builder;
use Miva\Provisioning\Builder\Fragment;

/**
* BuilderTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class BuilderTest extends \PHPUnit_Framework_TestCase
{

    /**
     * testFunctionality
     * 
     * Test basic class functionality
     */
    public function testFunctionality()
    {
        $builder = new Builder('CODE');
        
        $this->assertInstanceOf('SimpleXMLElement', $builder->getRoot());
        
        $store = $builder->getStore('CODE');
        
        $this->assertInstanceOf('SimpleXMLElement', $store);
        
        $domain = $builder->getDomain();
        
        $this->assertInstanceOf('SimpleXMLElement', $domain);
    }

}

