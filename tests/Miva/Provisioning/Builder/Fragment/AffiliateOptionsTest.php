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

use Miva\Provisioning\Builder\Fragment\AffiliateOptions;

/**
* AffiliateOptionsTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class AffiliateOptionsTest extends \PHPUnit_Framework_TestCase
{

    /**
     * testFunctionality
     * 
     * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new AffiliateOptions();
        
        $fragment->setEmailFrom('EmailFrom')
          ->setEmailCC('EmailCC')
          ->setSubject('Subject')
          ->setHeaderText('HeaderText');

          $this->assertEquals($fragment->getEmailFrom(), 'EmailFrom');
          $this->assertEquals($fragment->getEmailCC(), 'EmailCC');
          $this->assertEquals($fragment->getSubject(), 'Subject');
          $this->assertEquals($fragment->getHeaderText(), 'HeaderText');
          
          $expectedXML = '<AffiliateOptions_Update>
            <Active>Active</Active>
            <ApplicationStatus>ApplicationStatus</ApplicationStatus>
            <DefaultCommissionHit>DefaultCommissionHit</DefaultCommissionHit>
            <DefaultCommissionPercentOfOrder>DefaultCommissionPercentOfOrder</DefaultCommissionPercentOfOrder>
            <DefaultCommissionOrderFlatFee>DefaultCommissionOrderFlatFee</DefaultCommissionOrderFlatFee>
            <PayoutThreshold>PayoutThreshold</PayoutThreshold>
            <LinkImage>LinkImage</LinkImage>
            <LinkText>LinkText</LinkText>
            <Terms>Terms</Terms>
        </AffiliateOptions_Update>';
    }

}
