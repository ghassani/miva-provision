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

use Miva\Provisioning\Client as BaseClient;

/**
* ClientMock
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ClientMock extends BaseClient
{

    /**
     * {@inheritDoc}
     */
    public function doRequest($request)
    {
        return new Response('I AM A RESPONSES CONTENT', 201);
    }

    
}