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
use Miva\Provisioning\Builder\Helper\XmlHelper;
use Miva\Provisioning\Builder\SimpleXMLElement;

/**
* FragmentInterface
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
interface FragmentInterface 
{
    /**
     * toXml
     * 
     * This method will build the proper XML for the fragment
     * 
     * @param float $version - Version of Miva to build for
     * @param array $options - Customizable options to pass to the fragment
     * 
     * @return SimpleXMLElement
     */
    public function toXml($version = Version::CURRENT, array $options = array());
    
}