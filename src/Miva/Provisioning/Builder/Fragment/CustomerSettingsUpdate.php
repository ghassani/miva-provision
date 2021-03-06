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
* CustomerSettingsUpdate
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class CustomerSettingsUpdate implements StoreFragmentInterface
{

    /** @var int */
    protected $minimumPasswordLength;

    /** @var string */
    protected $passwordComplexity;
    
    /** @var int */
    protected $resetLinkExpiration;
    
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
     * @param int $minimumPasswordLength
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
     * @param string $passwordComplexity
     *
     * @return self
    */
    public function setPasswordComplexity($passwordComplexity)
    {
        $this->passwordComplexity = $passwordComplexity;
        return $this;
    }

    /**
     * getResetLinkExpiration
     *
     * @return int
    */
    public function getResetLinkExpiration()
    {
        return $this->resetLinkExpiration;
    }
    
    /**
     * setResetLinkExpiration
     *
     * @param int $resetLinkExpiration
     *
     * @return self
    */
    public function setResetLinkExpiration($resetLinkExpiration)
    {
        $this->resetLinkExpiration = $resetLinkExpiration;
        return $this;
    }

    
    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <CustomerSettings_Update>
     *       <MinimumPasswordLength>3</MinimumPasswordLength>
     *       <PasswordComplexity>none,alphanum,mixed</PasswordComplexity>
     *       <ResetLinkExpiration>1440</ResetLinkExpiration>
     *   </CustomerSettings_Update>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<CustomerSettings_Update></CustomerSettings_Update>');
        
        $xmlObject->addChild('MinimumPasswordLength', $this->getMinimumPasswordLength());
        $xmlObject->addChild('PasswordComplexity', $this->getPasswordComplexity());
        $xmlObject->addChild('ResetLinkExpiration', $this->getResetLinkExpiration());

        
        return $xmlObject;
    }

}