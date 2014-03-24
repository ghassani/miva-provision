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
* InventoryEmailNotificationUpdate
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class InventoryEmailNotificationUpdate implements StoreFragmentInterface
{

    /** @var string */
    protected $sendEmailOnLowStock;
    
    /** @var string */
    protected $sendEmailOnNoStock;
    
    /** @var string */
    protected $emailFrom;
    
    /** @var string */
    protected $emailTo;

    /** @var string */
    protected $emailCC;
    
    /** @var string */
    protected $subject;
    
    /** @var string */
    protected $message;

    /**
     * getSendEmailOnLowStock
     *
     * @return string
    */
    public function getSendEmailOnLowStock()
    {
        return $this->sendEmailOnLowStock;
    }
    
    /**
     * setSendEmailOnLowStock
     *
     * @param string $sendEmailOnLowStock
     *
     * @return self
    */
    public function setSendEmailOnLowStock($sendEmailOnLowStock)
    {
        $this->sendEmailOnLowStock = $sendEmailOnLowStock;
        return $this;
    }
    
    /**
     * getSendEmailOnNoStock
     *
     * @return string
    */
    public function getSendEmailOnNoStock()
    {
        return $this->sendEmailOnNoStock;
    }
    
    /**
     * setSendEmailOnNoStock
     *
     * @param string $sendEmailOnNoStock
     *
     * @return self
    */
    public function setSendEmailOnNoStock($sendEmailOnNoStock)
    {
        $this->sendEmailOnNoStock = $sendEmailOnNoStock;
        return $this;
    }

    /**
     * getEmailFrom
     *
     * @return string
    */
    public function getEmailFrom()
    {
        return $this->emailFrom;
    }

    /**
     * setEmailFrom
     *
     * @param string emailFrom
     *
     * @return self
    */
    public function setEmailFrom($emailFrom)
    {
        $this->emailFrom = $emailFrom;
        return $this;
    }
     
    /**
     * getEmailTo
     *
     * @return string
    */
    public function getEmailTo()
    {
        return $this->emailTo;
    }
    
    /**
     * setEmailTo
     *
     * @param string $emailTo
     *
     * @return self
    */
    public function setEmailTo($emailTo)
    {
        $this->emailTo = $emailTo;
        return $this;
    }
      
    /**
     * getEmailCC
     *
     * @return string
    */
    public function getEmailCC()
    {
        return $this->emailCC;
    }

    /**
     * setEmailCC
     *
     * @param string emailCC
     *
     * @return self
    */
    public function setEmailCC($emailCC)
    {
        $this->emailCC = $emailCC;
        return $this;
    }
    
    /**
     * getSubject
     *
     * @return string
    */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * setSubject
     *
     * @param string subject
     *
     * @return self
    */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * getMessage
     *
     * @return string
    */
    public function getMessage()
    {
        return $this->message;
    }
    
    /**
     * setMessage
     *
     * @param string $message
     *
     * @return self
    */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }


    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <InventoryEmailNotification_Update>
     *       <SendEmailOnLowStock>No</SendEmailOnLowStock>
     *       <SendEmailOnNoStock>Yes</SendEmailOnNoStock>
     *       <EmailFrom>noreply@miva.com</EmailFrom>
     *       <EmailTo>noreply@miva.com</EmailTo>
     *       <EmailCC></EmailCC>
     *       <Subject>Inventory tracking message</Subject>
     *       <Message>Product- %product_name% (%product_code%) is out of stock (Currently at %inv_available%)</Message>
     * </InventoryEmailNotification_Update>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<InventoryEmailNotification_Update></InventoryEmailNotification_Update>');
        

        $xmlObject->addChild('SendEmailOnLowStock', $this->getSendEmailOnLowStock());
        $xmlObject->addChild('SendEmailOnNoStock', $this->getSendEmailOnNoStock());
        $xmlObject->addChild('EmailFrom', $this->getEmailFrom());
        $xmlObject->addChild('EmailTo', $this->getEmailTo());
        $xmlObject->addChild('EmailCC', $this->getEmailCC());
        $xmlObject->addChild('Subject', $this->getSubject());
        $xmlObject->addChild('Message', $this->getMessage());
        
        return $xmlObject;
    }
}
        