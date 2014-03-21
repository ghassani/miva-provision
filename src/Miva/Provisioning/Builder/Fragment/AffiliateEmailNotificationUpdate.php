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

/**
* AffiliateEmailNotificationUpdate
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class AffiliateEmailNotificationUpdate implements StoreFragmentInterface
{

    /** @var string */
    protected $sendEmailOnAffiliateSignups;

    /** @var string */
    protected $emailFrom;

    /** @var string */
    protected $emailTo;
    
    /** @var string */
    protected $emailCC;
    
    /** @var string */
    protected $subject;
    
    /** @var string */
    protected $headerText;


    /**
    * getSendEmailOnAffiliateSignups
    *
    * @return string
    */
    public function getSendEmailOnAffiliateSignups()
    {
        return $this->sendEmailOnAffiliateSignups;
    }

    /**
    * setSendEmailOnAffiliateSignups
    *
    * @param string sendEmailOnAffiliateSignups
    *
    * @return self
    */
    public function setSendEmailOnAffiliateSignups($sendEmailOnAffiliateSignups)
    {
        $this->sendEmailOnAffiliateSignups = $sendEmailOnAffiliateSignups;
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
    * @param string emailTo
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
    * getHeaderText
    *
    * @return string
    */
    public function getHeaderText()
    {
        return $this->headerText;
    }

    /**
    * setHeaderText
    *
    * @param string headerText
    *
    * @return self
    */
    public function setHeaderText($headerText)
    {
        $this->headerText = $headerText;
        return $this;
    }
        
    
    /**
    * {@inheritDoc}
     * 
     * Format:
     * 
     *  <AffiliateEmailNotification_Update>
     *        <SendEmailOnAffiliateSignups>SendEmailOnAffiliateSignups</SendEmailOnAffiliateSignups>
     *        <EmailFrom>EmailFrom</EmailFrom>
     *        <EmailTo>EmailTo</EmailTo>
      *        <EmailCC>EmailCC</EmailCC>
     *        <Subject>Subject</Subject>
     *        <HeaderText>HeaderText</HeaderText>
     *    </AffiliateEmailNotification_Update>
    */
    public function toXml()
    {

        $xml = null;
        $xmlObject = new \SimpleXmlElement('<Fragment></Fragment>');
        

        $xmlObject->addChild('SendEmailOnAffiliateSignups', $this->getSendEmailOnAffiliateSignups());
        $xmlObject->addChild('EmailFrom', $this->getEmailFrom());
        $xmlObject->addChild('EmailTo', $this->getEmailTo());
        $xmlObject->addChild('EmailCC', $this->getEmailCC());
        $xmlObject->addChild('Subject', $this->getSubject());
        $xmlObject->addChild('HeaderText', $this->getHeaderText());
        
        foreach ($xmlObject->children() as $child) {
            $xml .= $child->saveXml();
        }
        
        return $xml;
    }
}