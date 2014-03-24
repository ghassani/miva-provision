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
* SettingsUpdate
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class SettingsUpdate implements DomainFragmentInterface
{

  

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <Settings_Update>
     *       <ForcePasswordAfterDays>10</ForcePasswordAfterDays>
     *       <PasswordReuse>5</PasswordReuse>
     *       <MinimumPasswordLength>3</MinimumPasswordLength>
     *       <PasswordComplexity>none</PasswordComplexity>
     *       <ImageJPEGQuality>12</ImageJPEGQuality>
     *  </Settings_Update>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<InventoryEmailNotification_Update></InventoryEmailNotification_Update>');
        
        return $xmlObject;
    }
}
        