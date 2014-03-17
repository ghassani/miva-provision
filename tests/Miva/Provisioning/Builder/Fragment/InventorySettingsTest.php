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

use Miva\Provisioning\Builder\Fragment\InventorySettings;

/**
* InventorySettingsTest
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class InventorySettingsTest extends \PHPUnit_Framework_TestCase
{

    /**
     * functionalTest
     * 
     * Test basic class functionality
     */
    public function functionalTest()
    {
        $fragment = new InventorySettings();
        
        $fragment
          ->setTrackInventory('TrackInventory')
          ->setInStockMessageShort('InStockMessageShort')
          ->setInStockMessageLong('InStockMessageLong')
          ->setTrackLowStockLevel('TrackLowStockLevel')
          ->setLowStockLevel('LowStockLevel')
          ->setLowStockMessageShort('LowStockMessageShort')
          ->setLowStockMessageLong('LowStockMessageLong')
          ->setTrackOutOfStockProducts('TrackOutOfStockProducts')
          ->setTrackOutOfStockLevel('TrackOutOfStockLevel')
          ->setHideOutOfStockProducts('HideOutOfStockProducts')
          ->setOutOfStockMessageShort('OutOfStockMessageShort')
          ->setOutOfStockMessageLong('OutOfStockMessageLong')
          ->setLimitedStockMessage('LimitedStockMessage');
            
        
        $this->assertEquals($fragment->getTrackInventory(), 'TrackInventory');
        $this->assertEquals($fragment->getInStockMessageShort(), 'InStockMessageShort');
        $this->assertEquals($fragment->getInStockMessageLong(), 'InStockMessageLong');
        $this->assertEquals($fragment->getTrackLowStockLevel(), 'TrackLowStockLevel');
        $this->assertEquals($fragment->getLowStockLevel(), 'LowStockLevel');
        $this->assertEquals($fragment->getLowStockMessageShort(), 'LowStockMessageShort');
        $this->assertEquals($fragment->getLowStockMessageLong(), 'LowStockMessageLong');
        $this->assertEquals($fragment->getTrackOutOfStockProducts(), 'TrackOutOfStockProducts');
        $this->assertEquals($fragment->getTrackOutOfStockLevel(), 'TrackOutOfStockLevel');
        $this->assertEquals($fragment->getHideOutOfStockProducts(), 'HideOutOfStockProducts');
        $this->assertEquals($fragment->getOutOfStockMessageShort(), 'OutOfStockMessageShort');
        $this->assertEquals($fragment->getOutOfStockMessageLong(), 'OutOfStockMessageLong');
        $this->assertEquals($fragment->getLimitedStockMessage(), 'LimitedStockMessage');
      

          
        $expectedXml = "
         <InventorySettings_Update>
            <TrackInventory>TrackInventory</TrackInventory>
            <InStockMessageShort><![CDATA[InStockMessageShort]]></InStockMessageShort>
            <InStockMessageLong><![CDATA[InStockMessageLong]]></InStockMessageLong>
            <TrackLowStockLevel>TrackLowStockLevel</TrackLowStockLevel>
            <LowStockLevel>LowStockLevel</LowStockLevel>
            <LowStockMessageShort><![CDATA[LowStockMessageShort]]></LowStockMessageShort>
            <LowStockMessageLong><![CDATA[LowStockMessageLong]]></LowStockMessageLong>
            <TrackOutOfStockProducts>TrackOutOfStockProducts</TrackOutOfStockProducts>
            <TrackOutOfStockLevel>TrackOutOfStockLevel</TrackOutOfStockLevel>
            <HideOutOfStockProducts>HideOutOfStockProducts</HideOutOfStockProducts>
            <OutOfStockMessageShort><![CDATA[OutOfStockMessageShort]]></OutOfStockMessageShort>
            <OutOfStockMessageLong><![CDATA[OutOfStockMessageLong]]></OutOfStockMessageLong>
            <LimitedStockMessage><![CDATA[LimitedStockMessage]]></LimitedStockMessage>
        </InventorySettings_Update>";
    }
}
        