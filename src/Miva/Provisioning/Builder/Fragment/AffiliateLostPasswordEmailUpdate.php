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
* AffiliateLostPasswordEmailUpdate
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class AffiliateLostPasswordEmailUpdate implements StoreFragmentInterface
{

    /** @var string */
    public $emailFrom;
    
    /** @var string */
    public $emailCC;
    
    /** @var string */
    public $subject;
    
    /** @var string */
    public $headerText;
    

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
        $xmlObject = new SimpleXMLElement('<AffiliateLostPasswordEmail_Update />');

        $xmlObject->addChild('EmailFrom', $this->getEmailFrom());
        $xmlObject->addChild('EmailCC', $this->getEmailCC());
        $xmlObject->addChild('Subject', $this->getSubject());
        $xmlObject->addChild('HeaderText', $this->getHeaderText());

        return $xmlObject;
    }
}