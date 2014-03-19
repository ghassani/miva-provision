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

use Miva\Provisioning\Client;
use Miva\Provisioning\Request;
use Miva\Provisioning\Response;

/**
* ClientTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ClientTest extends \PHPUnit_Framework_TestCase
{

    /**
     * functionalTest
     * 
     * Test basic class functionality
     */
    public function functionalTest()
    {
        $client = new Client('http://www.somedomain.com/mm5', 'TOKENZrSHWEET');
        
        $this->assertEquals($client->getUri(), 'http://www.somedomain.com/mm5');
        $this->assertEquals($client->getToken(), 'TOKENZrSHWEET');
        $this->assertEquals($client->getUrl(), 'http://www.somedomain.com/mm5/json.mvc?Function=Module&Module_Code=remoteprovisioning&Module_Function=XML');          
        
        $client->setUri('http://www.someotherdomain.com/mm5')
          ->setToken('TOKENZrSHWEETERWHENCHANGED');
        
        $this->assertEquals($client->getUri(), 'http://www.someotherdomain.com/mm5');
        $this->assertEquals($client->getToken(), 'TOKENZrSHWEETERWHENCHANGED');
        $this->assertEquals($client->getUrl(), 'http://www.someotherdomain.com/mm5/json.mvc?Function=Module&Module_Code=remoteprovisioning&Module_Function=XML');          
        
        $request = new Request('I AM A REQUEST CONTENT');
     
        $mockClient = new ClientMock('http://www.somedomain.com/mm5', 'TOKENZrSHWEET');
        
        $response = $mockClint->doRequest($request);
        
        
        $this->assertInstanceOf('Miva\Provisioning\Response', $response);
    }

}

