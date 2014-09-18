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
use Miva\Provisioning\Builder\Fragment\Model\StoreFragmentInterface;
use Miva\Provisioning\Builder\SimpleXMLElement;

/**
* UltimateGiftCertificatesUpdateKey
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class UltimateGiftCertificatesUpdateKey implements StoreFragmentInterface
{
    
    public $certKey;

    public $certCode;

    public $balance;

    public $issued;

    public $expires;

    public $issued;

    public $expires;

    public $balance;

    public $lastUsed;

    public $order;

    public $status;

    public $recipientEmail;

    public $recipientName;

    public $recipientMessage;

    public $senderFirstName;

    public $senderLastName;

    public $senderEmail;

    /**
     *
     * @return the unknown_type
     */
    public function getCertKey()
    {
        return $this->certKey;
    }

    /**
     *
     * @param unknown_type $certKey            
     */
    public function setCertKey($certKey)
    {
        $this->certKey = $certKey;
        return $this;
    }

    /**
     *
     * @return the unknown_type
     */
    public function getCertCode()
    {
        return $this->certCode;
    }

    /**
     *
     * @param unknown_type $certCode            
     */
    public function setCertCode($certCode)
    {
        $this->certCode = $certCode;
        return $this;
    }

    /**
     *
     * @return the unknown_type
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     *
     * @param unknown_type $balance            
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     *
     * @return the unknown_type
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     *
     * @param unknown_type $issued            
     */
    public function setIssued($issued)
    {
        $this->issued = $issued;
        return $this;
    }

    /**
     *
     * @return the unknown_type
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     *
     * @param unknown_type $expires            
     */
    public function setExpires($expires)
    {
        $this->expires = $expires;
        return $this;
    }

    /**
     *
     * @return the unknown_type
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     *
     * @param unknown_type $issued            
     */
    public function setIssued($issued)
    {
        $this->issued = $issued;
        return $this;
    }

    /**
     *
     * @return the unknown_type
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     *
     * @param unknown_type $expires            
     */
    public function setExpires($expires)
    {
        $this->expires = $expires;
        return $this;
    }

    /**
     *
     * @return the unknown_type
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     *
     * @param unknown_type $balance            
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     *
     * @return the unknown_type
     */
    public function getLastUsed()
    {
        return $this->lastUsed;
    }

    /**
     *
     * @param unknown_type $lastUsed            
     */
    public function setLastUsed($lastUsed)
    {
        $this->lastUsed = $lastUsed;
        return $this;
    }

    /**
     *
     * @return the unknown_type
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     *
     * @param unknown_type $order            
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     *
     * @return the unknown_type
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     *
     * @param unknown_type $status            
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     *
     * @return the unknown_type
     */
    public function getRecipientEmail()
    {
        return $this->recipientEmail;
    }

    /**
     *
     * @param unknown_type $recipientEmail            
     */
    public function setRecipientEmail($recipientEmail)
    {
        $this->recipientEmail = $recipientEmail;
        return $this;
    }

    /**
     *
     * @return the unknown_type
     */
    public function getRecipientName()
    {
        return $this->recipientName;
    }

    /**
     *
     * @param unknown_type $recipientName            
     */
    public function setRecipientName($recipientName)
    {
        $this->recipientName = $recipientName;
        return $this;
    }

    /**
     *
     * @return the unknown_type
     */
    public function getRecipientMessage()
    {
        return $this->recipientMessage;
    }

    /**
     *
     * @param unknown_type $recipientMessage            
     */
    public function setRecipientMessage($recipientMessage)
    {
        $this->recipientMessage = $recipientMessage;
        return $this;
    }

    /**
     *
     * @return the unknown_type
     */
    public function getSenderFirstName()
    {
        return $this->senderFirstName;
    }

    /**
     *
     * @param unknown_type $senderFirstName            
     */
    public function setSenderFirstName($senderFirstName)
    {
        $this->senderFirstName = $senderFirstName;
        return $this;
    }

    /**
     *
     * @return the unknown_type
     */
    public function getSenderLastName()
    {
        return $this->senderLastName;
    }

    /**
     *
     * @param unknown_type $senderLastName            
     */
    public function setSenderLastName($senderLastName)
    {
        $this->senderLastName = $senderLastName;
        return $this;
    }

    /**
     *
     * @return the unknown_type
     */
    public function getSenderEmail()
    {
        return $this->senderEmail;
    }

    /**
     *
     * @param unknown_type $senderEmail            
     */
    public function setSenderEmail($senderEmail)
    {
        $this->senderEmail = $senderEmail;
        return $this;
    }
 

    /**
     * {@inheritDoc}
     * 
     * Format:    
     *                    
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<Attribute_Option />');

        $xmlObject->addAttribute('attribute_code', $this->getAttributeCode());
        $xmlObject->addAttribute('option_code', $this->getOptionCode());        
                
        return $xmlObject;
    }     
}