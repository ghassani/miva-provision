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

use Miva\Provisioning\Builder\Fragment\AffiliateOptionsUpdate;

/**
* AffiliateOptionsUpdateTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class AffiliateOptionsUpdateTest extends \PHPUnit_Framework_TestCase
{

    /**
     * testFunctionality
     * 
     * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new AffiliateOptionsUpdate();
        
        $fragment
        ->setActive('Active')
        ->setApplicationStatus('ApplicationStatus')    
        ->setDefaultCommissionHit('DefaultCommissionHit')    
        ->setDefaultCommissionPercentOfOrder('DefaultCommissionPercentOfOrder')    
        ->setDefaultCommissionOrderFlatFee('DefaultCommissionOrderFlatFee')
        ->setPayoutThreshold('PayoutThreshold')    
        ->setLinkImage('LinkImage')    
        ->setLinkText('LinkText')    
        ->setTerms('Terms');
        
        
        $this->assertEquals($fragment->getActive(), 'Active');    
        $this->assertEquals($fragment->getApplicationStatus(), 'ApplicationStatus');    
        $this->assertEquals($fragment->getDefaultCommissionHit(), 'DefaultCommissionHit');    
        $this->assertEquals($fragment->getDefaultCommissionPercentOfOrder(), 'DefaultCommissionPercentOfOrder');    
        $this->assertEquals($fragment->getDefaultCommissionOrderFlatFee(), 'DefaultCommissionOrderFlatFee');    
        $this->assertEquals($fragment->getPayoutThreshold(), 'PayoutThreshold');    
        $this->assertEquals($fragment->getLinkImage(), 'LinkImage');    
        $this->assertEquals($fragment->getLinkText(), 'LinkText');    
        $this->assertEquals($fragment->getTerms(), 'Terms');

    }

    /**
     * testValidXML
     * 
     * Make sure it builds valid XML
     */
    public function testValidXML()
    {
        
        $fragment = new AffiliateOptionsUpdate();
        
        $fragment
        ->setActive('Active')
        ->setApplicationStatus('ApplicationStatus')    
        ->setDefaultCommissionHit('DefaultCommissionHit')    
        ->setDefaultCommissionPercentOfOrder('DefaultCommissionPercentOfOrder')    
        ->setDefaultCommissionOrderFlatFee('DefaultCommissionOrderFlatFee')
        ->setPayoutThreshold('PayoutThreshold')    
        ->setLinkImage('LinkImage')    
        ->setLinkText('LinkText')    
        ->setTerms('Terms');

          
        $expectedXml = '<AffiliateOptions_Update>
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
        
        $this->assertXmlStringEqualsXmlString($expectedXml, $fragment->toXML()->saveXML());
    }
}
        