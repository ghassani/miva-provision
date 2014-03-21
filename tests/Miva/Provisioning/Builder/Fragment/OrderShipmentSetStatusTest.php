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

use Miva\Provisioning\Builder\Fragment\OrderShipmentSetStatus;

/**
* OrderShipmentSetStatusTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class OrderShipmentSetStatusTest extends \PHPUnit_Framework_TestCase
{

    /**
     * testFunctionality
     * 
     * Test basic class functionality
     */
    public function testFunctionality()
    {
        $fragment = new OrderShipmentSetStatus();
        
        $fragment
        ->setCode('Code') 
        ->setMarkAsShipped('MarkAsShipped')    
        ->setTrackingNumber('TrackingNumber')    
        ->setTrackingType('TrackingType')    
        ->setShipDate(new \DateTime());
        
        $this->assertEquals($fragment->getCode(), 'Code'); 
        $this->assertEquals($fragment->getMarkAsShipped(), 'MarkAsShipped');    
        $this->assertEquals($fragment->getTrackingNumber(), 'TrackingNumber');    
        $this->assertEquals($fragment->getTrackingType(), 'TrackingType');    
        $this->assertInstanceOf('DateTime', $fragment->getShipDate());
      
        $fragment->setShipDate(null);
        
        $this->assertNull($fragment->getShipDate());
        
        $expectedXml = '<OrderShipment_SetStatus code="SHIPMENT_CODE">
            <MarkAsShipped>1</MarkAsShipped>                
            <TrackingNumber>0123456</TrackingNumber>        
            <TrackingType>FedEx</TrackingType>              
            <ShipDate>                                      
                <Day>01</Day>                                   
                <Month>01</Month>                            
                <Year>1970</Year>                              
                <Minute>30</Minute>                            
                <Hour>12</Hour>                                
            </ShipDate>
        </OrderShipment_SetStatus>';
    }
}
        