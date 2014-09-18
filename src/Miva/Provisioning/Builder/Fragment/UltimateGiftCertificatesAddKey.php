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


/**
* UltimateGiftCertificatesAddKey
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class UltimateGiftCertificatesAddKey implements StoreFragmentInterface
{
    
    public $certKey;

    public $certCode;

    public $balance;

    public $issued;

    public $expires;

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
     * <UltimateGiftCertificates_AddKey certcode="TEST_ADD">  
     *    <Certkey>TEST2</Certkey>
     *    <Balance>5000</Balance> 
     *    <Expires>11</Expires> 
     *    <Issued>TIMESTAMP</Issued> 
     *    <Expires>TIMESTAMP</Expires> 
     *    <Balance>FLOAT</Balance> 
     *    <Lastused>TIMESTAMP</Lastused> 
     *       <Order>INTEGER</Order> 
     *       <Status>INTEGER</Status> 
     *        <RecipientEmail>STRING</RecipientEmail> 
     *       <RecipientName>STRING</RecipientName> 
     *      <RecipientMessage>STRING</RecipientMessage> 
     *       <SenderFirstName>STRING</SenderFirstName> 
     *        <SenderLastName>STRING</SenderLastName> 
     *        <SenderEmail>STRING</SenderEmail> 
     *  </UltimateGiftCertificates_AddKey>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<UltimateGiftCertificates_AddKey />');

        $xmlObject->addAttribute('certcode', $this->getCertCode());

        $xmlObject->addChild('Certkey', $this->getCertKey());
        $xmlObject->addChild('Balance', $this->getBalance());
        
        if ($this->getExpires() instanceof \DateTime) {
            $xmlObject->addChild('Expires', $this->getExpires()->getTimestamp());
        } else {
            $xmlObject->addChild('Expires', $this->getExpires());
        }
        
        if ($this->getIssued() instanceof \DateTime) {
            $xmlObject->addChild('Issued', $this->getIssued()->getTimestamp());
        } else {
            $xmlObject->addChild('Issued', $this->getIssued());
        }
        
        if ($this->getLastUsed() && $this->getLastUsed() instanceof \DateTime) {
            $xmlObject->addChild('Issued', $this->getLastUsed()->getTimestamp());
        } else if ($this->getLastUsed()) {
            $xmlObject->addChild('Issued', $this->getLastUsed());
        }

        if ($this->getOrder()) {
            $xmlObject->addChild('Order', $this->getOrder());
        }

        if ($this->getStatus()) {
            $xmlObject->addChild('Status', $this->getStatus() ? 'Yes' : 'No');
        }

        if ($this->getRecipientEmail()) {
            $xmlObject->addChild('RecipientEmail', $this->getRecipientEmail());
        }
        
        if ($this->getRecipientName()) {
            $xmlObject->addChild('RecipientName', $this->getRecipientName());
        }
        
        if ($this->getRecipientMessage()) {
            $xmlObject->addChild('RecipientMessage', $this->getRecipientMessage());
        }
        
        if ($this->getSenderFirstName()) {
            $xmlObject->addChild('SenderFirstName', $this->getSenderFirstName());
        }
        
        if ($this->getSenderLastName()) {
            $xmlObject->addChild('SenderLastName', $this->getSenderLastName());
        }

        if ($this->getSenderEmail()) {
            $xmlObject->addChild('SenderEmail', $this->getSenderEmail());
        }
         
        return $xmlObject;
    }     
}