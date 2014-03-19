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

use Miva\Provisioning\Response;

/**
* ResponseTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ResponseTest extends \PHPUnit_Framework_TestCase
{

    /**
     * functionalTest
     * 
     * Test basic class functionality
     */
    public function functionalTest()
    {
        $response = new Response(null);
        
        $this->assertEquals($response->getContent(), null);
        $this->assertEquals($response->getStatus(), null);
        
        $response = new Response('Content', 200);
        
        $this->assertEquals($response->getContent(), 'Content');
        $this->assertEquals($response->getStatus(), 200);
        
        $response
          ->setContent('Some Other Content')
          ->setStatus(201);
          
        $this->assertEquals($response->getContent(), 'Some Other Content');
        $this->assertEquals($response->getStatus(), 201);        
        
    }

}

