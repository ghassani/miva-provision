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
use Miva\Provisioning\Builder\Fragment\Model\DomainFragmentInterface;


/**
* SettingsUpdate
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class SettingsUpdate implements DomainFragmentInterface
{

    /** @var int */
    protected $forcePasswordAfterDays;
    
    /** @var int */
    protected $passwordReuse;
    
    /** @var int */
    protected $minimumPasswordLength;
    
    /** @var string */
    protected $passwordComplexity;
    
    /** @var int */
    protected $imageJPEGQuality;
    
    /**
     * getForcePasswordAfterDays
     *
     * @return int
    */
    public function getForcePasswordAfterDays()
    {
    	return $this->forcePasswordAfterDays;
    }

    /**
     * setForcePasswordAfterDays
     *
     * @param int forcePasswordAfterDays
     *
     * @return self
    */
    public function setForcePasswordAfterDays($forcePasswordAfterDays)
    {
	    $this->forcePasswordAfterDays = $forcePasswordAfterDays;
	    return $this;
    }
    
    /**
     * getPasswordReuse
     *
     * @return int
    */
    public function getPasswordReuse()
    {
    	return $this->passwordReuse;
    }

    /**
     * setPasswordReuse
     *
     * @param int passwordReuse
     *
     * @return self
    */
    public function setPasswordReuse($passwordReuse)
    {
	    $this->passwordReuse = $passwordReuse;
	    return $this;
    }

    /**
     * getMinimumPasswordLength
     *
     * @return int
    */
    public function getMinimumPasswordLength()
    {
    	return $this->minimumPasswordLength;
    }

    /**
     * setMinimumPasswordLength
     *
     * @param int minimumPasswordLength
     *
     * @return self
    */
    public function setMinimumPasswordLength($minimumPasswordLength)
    {
	    $this->minimumPasswordLength = $minimumPasswordLength;
	    return $this;
    }
    
    /**
     * getPasswordComplexity
     *
     * @return string
    */
    public function getPasswordComplexity()
    {
    	return $this->passwordComplexity;
    }

    /**
     * setPasswordComplexity
     *
     * @param string passwordComplexity
     *
     * @return self
    */
    public function setPasswordComplexity($passwordComplexity)
    {
	    $this->passwordComplexity = $passwordComplexity;
	    return $this;
    }
    
    /**
     * getImageJPEGQuality
     *
     * @return int
    */
    public function getImageJPEGQuality()
    {
    	return $this->imageJPEGQuality;
    }

    /**
     * setImageJPEGQuality
     *
     * @param int imageJPEGQuality
     *
     * @return self
    */
    public function setImageJPEGQuality($imageJPEGQuality)
    {
	    $this->imageJPEGQuality = $imageJPEGQuality;
	    return $this;
    }
    
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

        $xmlObject = new SimpleXMLElement('<Settings_Update />');
        
        $xmlObject->addChild('ForcePasswordAfterDays', $this->getForcePasswordAfterDays());
        $xmlObject->addChild('PasswordReuse', $this->getPasswordReuse());
        $xmlObject->addChild('MinimumPasswordLength', $this->getMinimumPasswordLength());
        $xmlObject->addChild('PasswordComplexity', $this->getImageJPEGQuality());
        
        return $xmlObject;
    }
}
        