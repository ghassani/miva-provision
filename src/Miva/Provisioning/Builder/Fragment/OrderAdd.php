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
* OrderAdd
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class OrderAdd implements Model\StoreFragmentInterface
{

    /** @var string */
    public $shipFirstName;
    
    /** @var string */
    public $shipLastName;
    
    /** @var string */
    public $shipEmail;
    
    /** @var string */
    public $shipPhone;
    
    /** @var string */
    public $shipAddress1;
    
    /** @var string */
    public $shipAddress2;
    
    /** @var string */
    public $shipCity;
    
    /** @var string */
    public $shipState;
    
    /** @var int */
    public $shipZip;
    
    /** @var string */
    public $shipCountry;
    
    /** @var array */
    public $items = array();
    

    
    /**
     * getShipFirstName
     *
     * @return string
    */
    public function getShipFirstName()
    {
        return $this->shipFirstName;
    }
    
    /**
     * setShipFirstName
     *
     * @param string $shipFirstName
     *
     * @return self
    */
    public function setShipFirstName($shipFirstName)
    {
        $this->shipFirstName = $shipFirstName;
        return $this;
    }
    
    /**
     * getShipLastName
     *
     * @return string
    */
    public function getShipLastName()
    {
        return $this->shipLastName;
    }
    
    /**
     * setShipLastName
     *
     * @param string $shipLastName
     *
     * @return self
    */
    public function setShipLastName($shipLastName)
    {
        $this->shipLastName = $shipLastName;
        return $this;
    }
    
    /**
     * getShipEmail
     *
     * @return string
    */
    public function getShipEmail()
    {
        return $this->shipEmail;
    }
    
    /**
     * setShipEmail
     *
     * @param string $shipEmail
     *
     * @return self
    */
    public function setShipEmail($shipEmail)
    {
        $this->shipEmail = $shipEmail;
        return $this;
    }
    
    /**
     * getShipPhone
     *
     * @return string
    */
    public function getShipPhone()
    {
        return $this->shipPhone;
    }
    
    /**
     * setShipPhone
     *
     * @param string $shipPhone
     *
     * @return self
    */
    public function setShipPhone($shipPhone)
    {
        $this->shipPhone = $shipPhone;
        return $this;
    }
    
    /**
     * getShipAddress1
     *
     * @return string
    */
    public function getShipAddress1()
    {
        return $this->shipAddress1;
    }
    
    /**
     * setShipAddress1
     *
     * @param string $shipAddress1
     *
     * @return self
    */
    public function setShipAddress1($shipAddress1)
    {
        $this->shipAddress1 = $shipAddress1;
        return $this;
    }
    
    /**
     * getShipAddress2
     *
     * @return string
    */
    public function getShipAddress2()
    {
        return $this->shipAddress2;
    }
    
    /**
     * setShipAddress2
     *
     * @param string $shipAddress2
     *
     * @return self
    */
    public function setShipAddress2($shipAddress2)
    {
        $this->shipAddress2 = $shipAddress2;
        return $this;
    }
    
    /**
     * getShipCity
     *
     * @return string
    */
    public function getShipCity()
    {
        return $this->shipCity;
    }
    
    /**
     * setShipCity
     *
     * @param string $shipCity
     *
     * @return self
    */
    public function setShipCity($shipCity)
    {
        $this->shipCity = $shipCity;
        return $this;
    }
    
    /**
     * getShipState
     *
     * @return string
    */
    public function getShipState()
    {
        return $this->shipState;
    }
    
    /**
     * setShipState
     *
     * @param string $shipState
     *
     * @return self
    */
    public function setShipState($shipState)
    {
        $this->shipState = $shipState;
        return $this;
    }
    
    /**
     * getShipZip
     *
     * @return int
    */
    public function getShipZip()
    {
        return $this->shipZip;
    }
    
    /**
     * setShipZip
     *
     * @param int $shipZip
     *
     * @return self
    */
    public function setShipZip($shipZip)
    {
        $this->shipZip = $shipZip;
        return $this;
    }
    
    /**
     * getShipCountry
     *
     * @return string
    */
    public function getShipCountry()
    {
        return $this->shipCountry;
    }
    
    /**
     * setShipCountry
     *
     * @param string $shipCountry
     *
     * @return self
    */
    public function setShipCountry($shipCountry)
    {
        $this->shipCountry = $shipCountry;
        return $this;
    }
    
    /**
     * getItems
     *
     * @return array
    */
    public function getItems()
    {
        return $this->items;
    }
    
    /**
     * setItems
     *
     * @param array $items
     *
     * @return self
    */
    public function setItems(array $items)
    {
        $this->items = $items;
        return $this;
    }
    
    
    /**
     * addItem
     *
     * @param OrderItem $item
     *
     * @return self
    */
    public function addItem(OrderItem $item)
    {
        $this->items[] = $item;
        return $this;
    }
    
    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *   <Order_Add>
     *       <ShipFirstName>Jonathan</ShipFirstName>
     *       <ShipLastName>Burchmore</ShipLastName>
     *       <ShipEmail>jburchmore@mivamerchant.com</ShipEmail>
     *       <ShipPhone>858-361-5922</ShipPhone>
     *       <ShipAddress1>5060 Shoreham Place</ShipAddress1>
     *       <ShipAddress2>Suite 330</ShipAddress2>
     *       <ShipCity>San Diego</ShipCity>
     *       <ShipState>CA</ShipState>
     *       <ShipZip>92122</ShipZip>
     *       <ShipCountry>US</ShipCountry>
     *
     *       <Items>
     *           <Item>
     *               <Code>test</Code>
     *               <Name>Test Product #1</Name>
     *               <Price>1</Price>
     *               <Weight>0</Weight>
     *               <Quantity>1</Quantity>
     *
     *               <Options>
     *                   <Option>
     *                       <AttributeCode>test</AttributeCode>
     *                   </Option>
     *
     *                   <Option>
     *                       <AttributeCode>template_attr</AttributeCode>
     *                       <Price>1.00</Price>
     *                       <OptionCode>v1</OptionCode>
     *                   </Option>
     *               </Options>
     *           </Item>
     *       </Items>
     *   </Order_Add>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<Order_Add></Order_Add>');
        
        $xmlObject->addChild('ShipFirstName', $this->getShipFirstName());
        $xmlObject->addChild('ShipLastName', $this->getShipLastName());
        $xmlObject->addChild('ShipEmail', $this->getShipEmail());
        $xmlObject->addChild('ShipPhone', $this->getShipPhone());
        $xmlObject->addChild('ShipAddress1', $this->getShipAddress1());
        $xmlObject->addChild('ShipAddress2', $this->getShipAddress2());
        $xmlObject->addChild('ShipCity', $this->getShipCity());
        $xmlObject->addChild('ShipState', $this->getShipState());
        $xmlObject->addChild('ShipZip', $this->getShipZip());
        $xmlObject->addChild('ShipCountry', $this->getShipCountry());

        
        
        if (count($this->getItems())) {
            $itemsXml = $xmlObject->addChild('Items');
            foreach ($this->getItems() as $item) {
                XmlHelper::appendToParent($itemsXml, $item->toXml($version, $options));
            }
        }
        
        return $xmlObject;
    }
}
        