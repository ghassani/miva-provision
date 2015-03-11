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
 * UserUpdate
 *
 * @author Gassan Idriss <gidriss@miva.com>
*/
class UserUpdate implements DomainFragmentInterface
{
    
    
    /** @var string */
    protected $name;
    
    /** @var string */
    protected $newName;
    
    /** @var string */
    protected $password;
    
    /** @var int */
    protected $defaultPagination;
    
    /** @var boolean */
    protected $administrator = false;
    
    /** @var boolean */
    protected $canCreateUsers = false;
    
    /** @var boolean */
    protected $startInSimpleMode = false;
    
    /** @var boolean */
    protected $forcePasswordChange = false;
    

    
    /**
     * getNewName
     *
     * @return string
    */
    public function getNewName()
    {
        return $this->newName;
    }
    
    /**
     * setNewName
     *
     * @param string $newName
     *
     * @return self
    */
    public function setNewName($newName)
    {
        $this->newName = $newName;
        return $this;
    }
    
    /**
     * getName
     *
     * @return string
    */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * setName
     *
     * @param string $name
     *
     * @return self
    */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    
    /**
     * getPassword
     *
     * @return string
    */
    public function getPassword()
    {
        return $this->password;
    }
    
    /**
     * setPassword
     *
     * @param string $password
     *
     * @return self
    */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
    
    /**
     * getDefaultPagination
     *
     * @return int
    */
    public function getDefaultPagination()
    {
        return $this->defaultPagination;
    }
    
    /**
     * setDefaultPagination
     *
     * @param int $defaultPagination
     *
     * @return self
    */
    public function setDefaultPagination($defaultPagination)
    {
        $this->defaultPagination = $defaultPagination;
        return $this;
    }
    
    /**
     * getAdministrator
     *
     * @return boolean
    */
    public function getAdministrator()
    {
        return $this->administrator;
    }
    
    /**
     * setAdministrator
     *
     * @param boolean $administrator
     *
     * @return self
    */
    public function setAdministrator($administrator)
    {
        $this->administrator = $administrator;
        return $this;
    }
    
    /**
     * getCanCreateUsers
     *
     * @return boolean
    */
    public function getCanCreateUsers()
    {
        return $this->canCreateUsers;
    }
    
    /**
     * setCanCreateUsers
     *
     * @param boolean $canCreateUsers
     *
     * @return self
    */
    public function setCanCreateUsers($canCreateUsers)
    {
        $this->canCreateUsers = $canCreateUsers;
        return $this;
    }
    
    /**
     * getStartInSimpleMode
     *
     * @return boolean
    */
    public function getStartInSimpleMode()
    {
        return $this->startInSimpleMode;
    }
    
    /**
     * setStartInSimpleMode
     *
     * @param boolean $startInSimpleMode
     *
     * @return self
    */
    public function setStartInSimpleMode($startInSimpleMode)
    {
        $this->startInSimpleMode = $startInSimpleMode;
        return $this;
    }
    
    /**
     * getForcePasswordChange
     *
     * @return boolean
    */
    public function getForcePasswordChange()
    {
        return $this->forcePasswordChange;
    }
    
    /**
     * setForcePasswordChange
     *
     * @param boolean $forcePasswordChange
     *
     * @return self
    */
    public function setForcePasswordChange($forcePasswordChange)
    {
        $this->forcePasswordChange = $forcePasswordChange;
        return $this;
    }
    
    /**
     * setExpiration
     * 
     * @param DateTime|DateInterval|interval_spec string|null $expiration - If no DateTime or DateInterval pass
     * 
     * @see http://www.php.net/manual/en/dateinterval.construct.php
     * @see http://www.php.net/manual/en/datetime.construct.php
     * 
     * @throws Exception - When invalid interval_spec type is passed
     */
     public function setExpiration($expiration = null)
     {
         if ($expiration instanceof \DateTime || $expiration instanceof \DateInterval || is_null($expiration)) {
             $this->expiration = $expiration;
             return $this;
         }
         $this->expiration = new \DateInterval($expiration);           
         return $this;
     }
     
    /**
     * getExpiration
     *
     * @return DateTime|DateInterval|null
    */
    public function getExpiration()
    {
        return $this->forcePasswordChange;
    }
    
    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <User_Add>
     *       <Name>Test</Name>
     *       <Password>password</Password>
     *       <DefaultPagination>10</DefaultPagination>
     *       <Administrator>Yes</Administrator>
     *       <CanCreateUsers>No</CanCreateUsers>
     *       <StartInSimpleMode>No</StartInSimpleMode>
     *       <ForcePasswordChange>Yes</ForcePasswordChange>
     *
     *       <ExpiresIn units="minutes,hours,days">10</ExpiresIn>
     *           - or -
     *       <ExpirationDate>
     *           <Year>2012</Year>
     *           <Month>7</Month>
     *           <Day>5</Day>
     *           <Hour>13</Hour>
     *           <Minute>50</Minute>
     *           <Second>23</Second>
     *       </ExpirationDate>
     * </User_Add>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<User_Add />');

        $xmlObject->addChild('Name', $this->getName());
        $xmlObject->addChild('Password', $this->getPassword());
        $xmlObject->addChild('DefaultPagination', $this->getDefaultPagination());
        $xmlObject->addChild('Administrator', $this->getAdministrator() ? 'Yes' : 'No');
        $xmlObject->addChild('CanCreateUsers', $this->getCanCreateUsers() ? 'Yes' : 'No');
        $xmlObject->addChild('StartInSimpleMode', $this->getStartInSimpleMode() ? 'Yes' : 'No');
        $xmlObject->addChild('ForcePasswordChange', $this->getForcePasswordChange() ? 'Yes' : 'No');
        
        if ($expiration = $this->getExpiration()) {
            if ($expiration instanceof \DateTime) {
                 $expirationXml = $xmlObject->addChild('ExpirationDate');
                 $expirationXml->addChild('Year', $expiration->format('Y'));
                 $expirationXml->addChild('Month', $expiration->format('m'));
                 $expirationXml->addChild('Day', $expiration->format('d'));
                 $expirationXml->addChild('Hour', $expiration->format('h'));
                 $expirationXml->addChild('Minute', $expiration->format('i'));
                 $expirationXml->addChild('Second', $expiration->format('s'));
                 
            } else if ($expiration instanceof \DateInterval && $expiration->invert !== 1) {
                $noDays = !$expiration->d || $expiration->d === -9999; // no days set, -9999 BEFORE PHP 5.4.20/5.5.4 
                if ($noDays && $expiration->h) {
                    $units = 'hours';
                    $value = $expiration->h;
                } elseif ($noDays && $expiration->i) {
                    $units = 'minutes';
                    $value = $expiration->i;
                } else {
                    $units = 'days';
                    $value = $expiration->d;
                }
                
                if(isset($value) && isset($units)) {
                    $xmlObject->addChild('ExpiresIn', $value)
                      ->addAttribute('units', $units);
                }
            }
        }
        
        return $xmlObject;
    }
}
        