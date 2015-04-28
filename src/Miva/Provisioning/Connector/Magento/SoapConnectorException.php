<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@miva.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning\Connector\Magento;

/**
 * SoapConnectorException
 * 
 * @author Gassan Idriss <gidriss@miva.com>
*/
class SoapConnectorException extends \Exception
{
    /**
     * {@inheritDoc}
     */
    public function __construct($message, $code = 0, Exception $previous = null) 
    {
        parent::__construct($message, $code, $previous);
    }
    
    /**
     * {@inheritDoc}
     */
    public function __toString() 
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}