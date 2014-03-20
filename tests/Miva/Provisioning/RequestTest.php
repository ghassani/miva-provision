<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@mivamerchant.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Miva\Provisioning;

use Miva\Provisioning\Request;

/**
* RequestTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class RequestTest extends \PHPUnit_Framework_TestCase
{

    /**
     * testFunctionality
     * 
     * Test basic class functionality
     */
    public function testFunctionality()
    {
        $request = new Request();
        
        $this->assertEquals($request->getContent(), null);
        $this->assertEquals($request->getUrl(), null);
        
        $request = new Request('Content', 'http://www.someurl.com');
        
        $this->assertEquals($request->getContent(), 'Content');
        $this->assertEquals($request->getUrl(), 'http://www.someurl.com');
        
        $request
          ->setContent('Some Other Content')
          ->setUrl('http://www.someotherurl.com');
          
        $this->assertEquals($request->getContent(), 'Some Other Content');
        $this->assertEquals($request->getUrl(), 'http://www.someotherurl.com');        
        
    }

}

