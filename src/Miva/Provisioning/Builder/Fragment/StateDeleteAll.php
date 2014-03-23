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

use Miva\Version;

/**
* StateAdd
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
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
        $xmlObject = new \SimpleXmlElement('<State_DeleteAll />');
        
        return $xmlObject;
    }

}