<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@miva.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning\Builder\Fragment;

use Miva\Version;
use Miva\Provisioning\Builder\Helper\XmlHelper;
use Miva\Provisioning\Builder\SimpleXMLElement;
use Miva\Provisioning\Builder\Fragment\Model\StoreFragmentInterface;

/**
* StateAdd
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class StateDeleteAll implements StoreFragmentInterface
{  
    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <State_DeleteAll/>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<State_DeleteAll />');
        
        return $xmlObject;
    }

}