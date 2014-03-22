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

use Miva\Provisioning\Builder\Fragment\InventoryEmailNotificationUpdate;

/**
* InventoryEmailNotificationUpdateTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class InventoryEmailNotificationUpdateTest extends \PHPUnit_Framework_TestCase
{

    /**
     * testFunctionality
     * 
     * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new InventoryEmailNotification();
        
        $fragment->setSendEmailOnLowStock('SendEmailOnLowStock')
          ->setSendEmailOnNoStock('SendEmailOnNoStock')
          ->setEmailFrom('EmailFrom')
          ->setEmailTo('EmailTo')
          ->setEmailCC('EmailCC')
          ->setSubject('Subject')
          ->setMessage('Message');

          $this->assertEquals($fragment->getSendEmailOnLowStock(), 'SendEmailOnLowStock');
          $this->assertEquals($fragment->getSendEmailOnNoStock(), 'SendEmailOnNoStock');
          $this->assertEquals($fragment->getEmailTo(), 'EmailTo');
          $this->assertEquals($fragment->getEmailFrom(), 'EmailFrom');
          $this->assertEquals($fragment->getEmailCC(), 'EmailCC');
          $this->assertEquals($fragment->getSubject(), 'Subject');
          $this->assertEquals($fragment->getMessage(), 'Message');
          
          $expectedXml = '<InventoryEmailNotification_Update>
            <SendEmailOnLowStock>SendEmailOnLowStock</SendEmailOnLowStock>
            <SendEmailOnNoStock>SendEmailOnNoStock</SendEmailOnNoStock>
            <EmailFrom>EmailFrom</EmailFrom>
            <EmailTo>EmailTo</EmailTo>
            <EmailCC>EmailCC</EmailCC>
            <Subject>Subject</Subject>
            <Message>Message</Message>
      </InventoryEmailNotification_Update>';
    }

}