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

use Miva\Provisioning\Builder\Fragment\AffiliateLostPasswordEmailUpdate;

/**
* AffiliateLostPasswordEmailUpdateTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class AffiliateLostPasswordEmailUpdateTest extends \PHPUnit_Framework_TestCase
{

    /**
     * testFunctionality
     * 
     * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new AffiliateLostPasswordEmailUpdate();
        
        $fragment->setEmailFrom('EmailFrom')
          ->setEmailCC('EmailCC')
          ->setSubject('Subject')
          ->setHeaderText('HeaderText');

          $this->assertEquals($fragment->getEmailFrom(), 'EmailFrom');
          $this->assertEquals($fragment->getEmailCC(), 'EmailCC');
          $this->assertEquals($fragment->getSubject(), 'Subject');
          $this->assertEquals($fragment->getHeaderText(), 'HeaderText');

    }


    /**
     * testValidXML
     * 
     * Make sure it builds valid XML
     */
    public function testValidXML()
    {
        
        $fragment = new AffiliateLostPasswordEmailUpdate();
        
        $fragment->setEmailFrom('EmailFrom')
          ->setEmailCC('EmailCC')
          ->setSubject('Subject')
          ->setHeaderText('HeaderText');
          
        $expectedXml = '<AffiliateLostPasswordEmail_Update>
                <EmailFrom>EmailFrom</EmailFrom>
                <EmailCC>EmailCC</EmailCC>
                <Subject>Subject</Subject>
                <HeaderText>HeaderText</HeaderText>
            </AffiliateLostPasswordEmail_Update>';
        
        $this->assertXmlStringEqualsXmlString($expectedXml, $fragment->toXML()->saveXML());
    }
    
}