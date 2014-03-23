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
* AffiliateLostPasswordEmailUpdate
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class AffiliateLostPasswordEmailUpdate implements StoreFragmentInterface
{

    /** @var string */
    protected $emailFrom;
    
    /** @var string */
    protected $emailCC;
    
    /** @var string */
    protected $subject;
    
    /** @var string */
    protected $headerText;
    

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
     * <AffiliateLostPasswordEmail_Update>
     *        <EmailFrom>EmailFrom</EmailFrom>
     *        <EmailCC>EmailCC</EmailCC>
     *        <Subject>Subject</Subject>
     *        <HeaderText>HeaderText</HeaderText>
     *    </AffiliateLostPasswordEmail_Update>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new \SimpleXmlElement('<AffiliateLostPasswordEmail_Update></AffiliateLostPasswordEmail_Update>');
        

        $xmlObject->addChild('EmailFrom', $this->getEmailFrom());
        $xmlObject->addChild('EmailCC', $this->getEmailCC());
        $xmlObject->addChild('Subject', $this->getSubject());
        $xmlObject->addChild('HeaderText', $this->getHeaderText());

        return $xmlObject;
    }
}