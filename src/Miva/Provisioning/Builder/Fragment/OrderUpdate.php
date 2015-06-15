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
use Miva\Provisioning\Builder\Fragment\Child\OrderItem;
use Miva\Provisioning\Builder\Fragment\Child\OrderCharge;

/**
 * OrderUpdate
 *
 * @author Gassan Idriss <gidriss@miva.com>
 */
class OrderUpdate implements StoreFragmentInterface
{
    /** @var  int */
    protected $orderId;

    /** @var  string */
    protected $customerLogin;

    /** @var  string */
    protected $shipFirstName;

    /** @var  string */
    protected $shipLastName;

    /** @var  string */
    protected $shipEmail;

    /** @var  string */
    protected $shipCompany;

    /** @var  string */
    protected $shipPhone;

    /** @var  string */
    protected $shipFax;

    /** @var  string */
    protected $shipAddress1;

    /** @var  string */
    protected $shipAddress2;

    /** @var  string */
    protected $shipCity;

    /** @var  string */
    protected $shipState;

    /** @var  string */
    protected $shipZip;

    /** @var  string */
    protected $shipCountry;

    /** @var  string */
    protected $billFirstName;

    /** @var  string */
    protected $billLastName;

    /** @var  string */
    protected $billEmail;

    /** @var  string */
    protected $billCompany;

    /** @var  string */
    protected $billPhone;

    /** @var  string */
    protected $billFax;

    /** @var  string */
    protected $billAddress1;

    /** @var  string */
    protected $billAddress2;

    /** @var  string */
    protected $billCity;

    /** @var  string */
    protected $billState;

    /** @var  string */
    protected $billZip;

    /** @var  string */
    protected $billCountry;

    /** @var  DateTime */
    protected $orderDate;

    /**
     * @var array|OrderItem
     */
    protected $items = array();

    /**
     * @var array|OrderCharge
     */
    protected $charges = array();

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param mixed $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomerLogin()
    {
        return $this->customerLogin;
    }

    /**
     * @param mixed $customerLogin
     */
    public function setCustomerLogin($customerLogin)
    {
        $this->customerLogin = $customerLogin;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipFirstName()
    {
        return $this->shipFirstName;
    }

    /**
     * @param mixed $shipFirstName
     */
    public function setShipFirstName($shipFirstName)
    {
        $this->shipFirstName = $shipFirstName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipLastName()
    {
        return $this->shipLastName;
    }

    /**
     * @param mixed $shipLastName
     */
    public function setShipLastName($shipLastName)
    {
        $this->shipLastName = $shipLastName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipEmail()
    {
        return $this->shipEmail;
    }

    /**
     * @param mixed $shipEmail
     */
    public function setShipEmail($shipEmail)
    {
        $this->shipEmail = $shipEmail;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipCompany()
    {
        return $this->shipCompany;
    }

    /**
     * @param mixed $shipCompany
     */
    public function setShipCompany($shipCompany)
    {
        $this->shipCompany = $shipCompany;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipPhone()
    {
        return $this->shipPhone;
    }

    /**
     * @param mixed $shipPhone
     */
    public function setShipPhone($shipPhone)
    {
        $this->shipPhone = $shipPhone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipFax()
    {
        return $this->shipFax;
    }

    /**
     * @param mixed $shipFax
     */
    public function setShipFax($shipFax)
    {
        $this->shipFax = $shipFax;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipAddress1()
    {
        return $this->shipAddress1;
    }

    /**
     * @param mixed $shipAddress1
     */
    public function setShipAddress1($shipAddress1)
    {
        $this->shipAddress1 = $shipAddress1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipAddress2()
    {
        return $this->shipAddress2;
    }

    /**
     * @param mixed $shipAddress2
     */
    public function setShipAddress2($shipAddress2)
    {
        $this->shipAddress2 = $shipAddress2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipCity()
    {
        return $this->shipCity;
    }

    /**
     * @param mixed $shipCity
     */
    public function setShipCity($shipCity)
    {
        $this->shipCity = $shipCity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipState()
    {
        return $this->shipState;
    }

    /**
     * @param mixed $shipState
     */
    public function setShipState($shipState)
    {
        $this->shipState = $shipState;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipZip()
    {
        return $this->shipZip;
    }

    /**
     * @param mixed $shipZip
     */
    public function setShipZip($shipZip)
    {
        $this->shipZip = $shipZip;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipCountry()
    {
        return $this->shipCountry;
    }

    /**
     * @param mixed $shipCountry
     */
    public function setShipCountry($shipCountry)
    {
        $this->shipCountry = $shipCountry;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBillFirstName()
    {
        return $this->billFirstName;
    }

    /**
     * @param mixed $billFirstName
     */
    public function setBillFirstName($billFirstName)
    {
        $this->billFirstName = $billFirstName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBillLastName()
    {
        return $this->billLastName;
    }

    /**
     * @param mixed $billLastName
     */
    public function setBillLastName($billLastName)
    {
        $this->billLastName = $billLastName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBillEmail()
    {
        return $this->billEmail;
    }

    /**
     * @param mixed $billEmail
     */
    public function setBillEmail($billEmail)
    {
        $this->billEmail = $billEmail;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBillCompany()
    {
        return $this->billCompany;
    }

    /**
     * @param mixed $billCompany
     */
    public function setBillCompany($billCompany)
    {
        $this->billCompany = $billCompany;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBillPhone()
    {
        return $this->billPhone;
    }

    /**
     * @param mixed $billPhone
     */
    public function setBillPhone($billPhone)
    {
        $this->billPhone = $billPhone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBillFax()
    {
        return $this->billFax;
    }

    /**
     * @param mixed $billFax
     */
    public function setBillFax($billFax)
    {
        $this->billFax = $billFax;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBillAddress1()
    {
        return $this->billAddress1;
    }

    /**
     * @param mixed $billAddress1
     */
    public function setBillAddress1($billAddress1)
    {
        $this->billAddress1 = $billAddress1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBillAddress2()
    {
        return $this->billAddress2;
    }

    /**
     * @param mixed $billAddress2
     */
    public function setBillAddress2($billAddress2)
    {
        $this->billAddress2 = $billAddress2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBillCity()
    {
        return $this->billCity;
    }

    /**
     * @param mixed $billCity
     */
    public function setBillCity($billCity)
    {
        $this->billCity = $billCity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBillState()
    {
        return $this->billState;
    }

    /**
     * @param mixed $billState
     */
    public function setBillState($billState)
    {
        $this->billState = $billState;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBillZip()
    {
        return $this->billZip;
    }

    /**
     * @param mixed $billZip
     */
    public function setBillZip($billZip)
    {
        $this->billZip = $billZip;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBillCountry()
    {
        return $this->billCountry;
    }

    /**
     * @param mixed $billCountry
     */
    public function setBillCountry($billCountry)
    {
        $this->billCountry = $billCountry;
        return $this;
    }

    /**
     * @param OrderItem $item
     * @return $this
     */
    public function addItem(OrderItem $item)
    {
        $this->items[] = $item;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param array $items
     * @return $this
     */
    public function setItems(array $items) {
        foreach ($items as $item) {
            if (!$item instanceof OrderItem) {
                throw new \InvalidArgumentException('OrderUpdate::setItems requires an array of OrderItem');
            }
        }
        $this->items = $items;
        return $this;
    }

    /**
     * @param \DateTime|null $orderDate
     * @return $this
     */
    public function setOrderDate(\DateTime $orderDate = null)
    {
        $this->orderDate = $orderDate;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * @param OrderCharge $charge
     * @return $this
     */
    public function addCharge(OrderCharge $charge)
    {
        $this->charges[] = $charge;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCharges()
    {
        return $this->charges;
    }

    /**
     * @param array $charges
     * @return $this
     */
    public function setCharges(array $charges) {
        foreach ($charges as $charge) {
            if (!$charge instanceof OrderCharge) {
                throw new \InvalidArgumentException('OrderUpdate::setChargees requires an array of OrderCharge');
            }
        }
        $this->charges = $charges;
        return $this;
    }
    /**
     * {@inheritDoc}
     *
     * Format:
     * <Order_Update order_id="X">
     *      <CustomerLogin></CustomerLogin>
     *      <ShipFirstName></ShipFirstName>
     *      <ShipLastName></ShipLastName>
     *      <ShipEmail></ShipEmail>
     *      <ShipCompany></ShipCompany>
     *      <ShipPhone></ShipPhone>
     *      <ShipFax></ShipFax>
     *      <ShipAddress1></ShipAddress1>
     *      <ShipAddress2></ShipAddress2>
     *      <ShipCity></ShipCity>
     *      <ShipState></ShipState>
     *      <ShipZip></ShipZip>
     *      <ShipCountry></ShipCountry>
     *      <BillFirstName></BillFirstName>
     *      <BillLastName></BillLastName>
     *      <BillEmail></BillEmail>
     *      <BillCompany></BillCompany>
     *      <BillPhone></BillPhone>
     *      <BillFax></BillFax>
     *      <BillAddress1></BillAddress1>
     *      <BillAddress2></BillAddress2>
     *      <BillCity></BillCity>
     *      <BillState></BillState>
     *      <BillZip></BillZip>
     *      <BillCountry></BillCountry>
     *      <Items>
     *
     *      </Items>
     *       <Charges>
     *
     *      </Charges>
     *      <CalculateCharges>
     *          <ShippingModule></ShippingModule>
     *          <ShippingModuleData></ShippingModuleData>
     *      </CalculateCharges>
     *      <Total></Total>
     *      <OrderDate></OrderDate>
     *      <ChargeList>
     *          <!-- OPTIONAL, IF SET WILL DELETE ALL EXISTING CHARGES AS OF 9.0.0.3
     *      </ChargeList>
     *  </Order_Update>
     *
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<Order_Update />');

        $xmlObject->addAttribute('order_id', $this->getOrderId());

        if ($this->getCustomerLogin()) {
            $xmlObject->addChild('CustomerLogin', $this->getCustomerLogin());
        }

        if ($this->getShipFirstName()) {
            $xmlObject->addChild('ShipFirstName', $this->getShipFirstName());
        }

        if ($this->getShipLastName()) {
            $xmlObject->addChild('ShipLastName', $this->getShipLastName());
        }

        if ($this->getShipEmail()) {
            $xmlObject->addChild('ShipEmail', $this->getShipEmail());
        }

        if ($this->getShipCompany()) {
            $xmlObject->addChild('ShipCompany', $this->getShipCompany());
        }

        if ($this->getShipPhone()) {
            $xmlObject->addChild('ShipPhone', $this->getShipPhone());
        }

        if ($this->getShipFax()) {
            $xmlObject->addChild('ShipFax', $this->getShipFax());
        }

        if ($this->getShipAddress1()) {
            $xmlObject->addChild('ShipAddress1', $this->getShipAddress1());
        }

        if ($this->getShipAddress2()) {
            $xmlObject->addChild('ShipAddress2', $this->getShipAddress2());
        }

        if ($this->getShipCity()) {
            $xmlObject->addChild('ShipCity', $this->getShipCity());
        }

        if ($this->getShipState()) {
            $xmlObject->addChild('ShipState', $this->getShipState());
        }

        if ($this->getShipZip()) {
            $xmlObject->addChild('ShipZip', $this->getShipZip());
        }

        if ($this->getShipCountry()) {
            $xmlObject->addChild('ShipCountry', $this->getShipCountry());
        }


        if ($this->getBillFirstName()) {
            $xmlObject->addChild('BillFirstName', $this->getBillFirstName());
        }

        if ($this->getBillLastName()) {
            $xmlObject->addChild('BillLastName', $this->getBillLastName());
        }

        if ($this->getBillEmail()) {
            $xmlObject->addChild('BillEmail', $this->getBillEmail());
        }

        if ($this->getBillCompany()) {
            $xmlObject->addChild('BillCompany', $this->getBillCompany());
        }

        if ($this->getBillPhone()) {
            $xmlObject->addChild('BillPhone', $this->getBillPhone());
        }

        if ($this->getBillFax()) {
            $xmlObject->addChild('BillFax', $this->getBillFax());
        }

        if ($this->getBillAddress1()) {
            $xmlObject->addChild('BillAddress1', $this->getBillAddress1());
        }

        if ($this->getBillAddress2()) {
            $xmlObject->addChild('BillAddress2', $this->getBillAddress2());
        }

        if ($this->getBillCity()) {
            $xmlObject->addChild('BillCity', $this->getBillCity());
        }

        if ($this->getBillState()) {
            $xmlObject->addChild('BillState', $this->getBillState());
        }

        if ($this->getBillZip()) {
            $xmlObject->addChild('BillZip', $this->getBillZip());
        }

        if ($this->getBillCountry()) {
            $xmlObject->addChild('BillCountry', $this->getBillCountry());
        }



        if (count($this->getItems())) {
            $itemsXml = $xmlObject->addChild('Items');
            foreach ($this->getItems() as $item) {
                XmlHelper::appendToParent($itemsXml, $item->toXml($version, $options));
            }
        }

        if (count($this->getCharges())) {
            $chargesXml = $xmlObject->addChild('Charges');
            foreach ($this->getCharges() as $charge) {
                XmlHelper::appendToParent($chargesXml, $charge->toXml($version, $options));
            }
        }

        if ($this->getOrderDate()) {
            $fragment = $xmlObject->addChild('OrderDate');

            XmlHelper::dateTimeToXml($fragment, $this->getOrderDate());
        }

        return $xmlObject;
    }
}

