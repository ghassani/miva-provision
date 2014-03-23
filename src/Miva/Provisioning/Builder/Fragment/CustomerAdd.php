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

/**
* CustomerAdd
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class CustomerAdd implements StoreFragmentInterface
{

    /** @var string */
    protected $login;
    
    /** @var string */
    protected $lostPasswordEmail;
    
    /** @var string */
    protected $password;
    
    /** @var string */
    protected $shipFirstName;
    
    /** @var string */
    protected $shipLastName;
    
    /** @var string */
    protected $shipEmail;
    
    /** @var string */
    protected $shipPhone;
    
    /** @var string */
    protected $shipFax;
    
    /** @var string */
    protected $shipCompany;
    
    /** @var string */
    protected $shipAddress;
    
    /** @var string */
    protected $shipCity;
    
    /** @var string */
    protected $shipStateCode;
    
    /** @var string */
    protected $shipZip;
    
    /** @var string */
    protected $shipCountryCode;
    
    /** @var string */
    protected $billFirstName;
    
    /** @var string */
    protected $billLastName;
    
    /** @var string */
    protected $billEmail;
    
    /** @var string */
    protected $billPhone;
    
    /** @var string */
    protected $billFax;
    
    /** @var string */
    protected $billCompany;
    
    /** @var string */
    protected $billAddress;
    
    /** @var string */
    protected $billCity;
    
    /** @var string */
    protected $billStateCode;
    
    /** @var string */
    protected $billZip;
    
    /** @var string */
    protected $billCountryCode;
    
    /**
     * getLogin
     *
     * @return string
    */
    public function getLogin()
    {
        return $this->login;
    }
    
    /**
     * setLogin
     *
     * @param string $login
     *
     * @return self
    */
    public function setLogin($login)
    {
        $this->login = $login;
        return $this;
    }    

    /**
     * getLostPasswordEmail
     *
     * @return string
    */
    public function getLostPasswordEmail()
    {
        return $this->lostPasswordEmail;
    }
    
    /**
     * setLostPasswordEmail
     *
     * @param string $lostPasswordEmail
     *
     * @return self
    */
    public function setLostPasswordEmail($lostPasswordEmail)
    {
        $this->lostPasswordEmail = $lostPasswordEmail;
        return $this;
    }
    /**
     * getPassword
     *
     * @return string
    */
    public function getPassword()
    {
        return $this->password;
    }
    
    /**
     * setPassword
     *
     * @param string $password
     *
     * @return self
    */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

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
     * getShipFax
     *
     * @return string
    */
    public function getShipFax()
    {
        return $this->shipFax;
    }
    
    /**
     * setShipFax
     *
     * @param string $shipFax
     *
     * @return self
    */
    public function setShipFax($shipFax)
    {
        $this->shipFax = $shipFax;
        return $this;
    }

    /**
     * getShipCompany
     *
     * @return string
    */
    public function getShipCompany()
    {
        return $this->shipCompany;
    }
    
    /**
     * setShipCompany
     *
     * @param string $shipCompany
     *
     * @return self
    */
    public function setShipCompany($shipCompany)
    {
        $this->shipCompany = $shipCompany;
        return $this;
    }

    /**
     * getShipAddress
     *
     * @return string
    */
    public function getShipAddress()
    {
        return $this->shipAddress;
    }
    
    /**
     * setShipAddress
     *
     * @param string $shipAddress
     *
     * @return self
    */
    public function setShipAddress($shipAddress)
    {
        $this->shipAddress = $shipAddress;
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
     * getShipStateCode
     *
     * @return string
    */
    public function getShipStateCode()
    {
        return $this->shipStateCode;
    }
    
    /**
     * setShipStateCode
     *
     * @param string $shipStateCode
     *
     * @return self
    */
    public function setShipStateCode($shipStateCode)
    {
        $this->shipStateCode = $shipStateCode;
        return $this;
    }

    /**
     * getShipZip
     *
     * @return string
    */
    public function getShipZip()
    {
        return $this->shipZip;
    }
    
    /**
     * setShipZip
     *
     * @param string $shipZip
     *
     * @return self
    */
    public function setShipZip($shipZip)
    {
        $this->shipZip = $shipZip;
        return $this;
    }
    
    /**
     * getShipCountryCode
     *
     * @return string
    */
    public function getShipCountryCode()
    {
        return $this->shipCountryCode;
    }
    
    /**
     * setShipCountryCode
     *
     * @param string $shipCountryCode
     *
     * @return self
    */
    public function setShipCountryCode($shipCountryCode)
    {
        $this->shipCountryCode = $shipCountryCode;
        return $this;
    }

    /**
     * getBillFirstName
     *
     * @return string
    */
    public function getBillFirstName()
    {
        return $this->billFirstName;
    }
    
    /**
     * setBillFirstName
     *
     * @param string $billFirstName
     *
     * @return self
    */
    public function setBillFirstName($billFirstName)
    {
        $this->billFirstName = $billFirstName;
        return $this;
    }

    /**
     * getBillLastName
     *
     * @return string
    */
    public function getBillLastName()
    {
        return $this->billLastName;
    }
    
    /**
     * setBillLastName
     *
     * @param string $billLastName
     *
     * @return self
    */
    public function setBillLastName($billLastName)
    {
        $this->billLastName = $billLastName;
        return $this;
    }
    
    /**
     * getBillEmail
     *
     * @return string
    */
    public function getBillEmail()
    {
        return $this->billEmail;
    }
    
    /**
     * setBillEmail
     *
     * @param string $billEmail
     *
     * @return self
    */
    public function setBillEmail($billEmail)
    {
        $this->billEmail = $billEmail;
        return $this;
    }
    
    /**
     * getBillPhone
     *
     * @return string
    */
    public function getBillPhone()
    {
        return $this->billPhone;
    }
    
    /**
     * setBillPhone
     *
     * @param string $billPhone
     *
     * @return self
    */
    public function setBillPhone($billPhone)
    {
        $this->billPhone = $billPhone;
        return $this;
    }

    /**
     * getBillFax
     *
     * @return string
    */
    public function getBillFax()
    {
        return $this->billFax;
    }
    
    /**
     * setBillFax
     *
     * @param string $billFax
     *
     * @return self
    */
    public function setBillFax($billFax)
    {
        $this->billFax = $billFax;
        return $this;
    }

    /**
     * getBillCompany
     *
     * @return string
    */
    public function getBillCompany()
    {
        return $this->billCompany;
    }
    
    /**
     * setBillCompany
     *
     * @param string $billCompany
     *
     * @return self
    */
    public function setBillCompany($billCompany)
    {
        $this->billCompany = $billCompany;
        return $this;
    }

    /**
     * getBillAddress
     *
     * @return string
    */
    public function getBillAddress()
    {
        return $this->billAddress;
    }
    
    /**
     * setBillAddress
     *
     * @param string $billAddress
     *
     * @return self
    */
    public function setBillAddress($billAddress)
    {
        $this->billAddress = $billAddress;
        return $this;
    }

    /**
     * getBillCity
     *
     * @return string
    */
    public function getBillCity()
    {
        return $this->billCity;
    }
    
    /**
     * setBillCity
     *
     * @param string $billCity
     *
     * @return self
    */
    public function setBillCity($billCity)
    {
        $this->billCity = $billCity;
        return $this;
    }

    /**
     * getBillStateCode
     *
     * @return string
    */
    public function getBillStateCode()
    {
        return $this->billStateCode;
    }
    
    /**
     * setBillStateCode
     *
     * @param string $billStateCode
     *
     * @return self
    */
    public function setBillStateCode($billStateCode)
    {
        $this->billStateCode = $billStateCode;
        return $this;
    }

    /**
     * getBillZip
     *
     * @return string
    */
    public function getBillZip()
    {
        return $this->billZip;
    }
    
    /**
     * setBillZip
     *
     * @param string $billZip
     *
     * @return self
    */
    public function setBillZip($billZip)
    {
        $this->billZip = $billZip;
        return $this;
    }
    
    /**
     * getBillCountryCode
     *
     * @return string
    */
    public function getBillCountryCode()
    {
        return $this->billCountryCode;
    }
    
    /**
     * setBillCountryCode
     *
     * @param string $billCountryCode
     *
     * @return self
    */
    public function setBillCountryCode($billCountryCode)
    {
        $this->billCountryCode = $billCountryCode;
        return $this;
    }


    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *   <Customer_Add>
     *       <Login>c1</Login>
     *       <LostPasswordEmail>noreply@miva.com</LostPasswordEmail>
     *       <Password>c1</Password>
     *       <ShipFirstName>Testy</ShipFirstName>
     *       <ShipLastName>Testerman</ShipLastName>
     *       <ShipEmail>noreply@miva.com</ShipEmail>
     *       <ShipPhone>555-555-5555</ShipPhone>
     *       <ShipFax>555-555-1212</ShipFax>
     *       <ShipCompany>MivaCorp</ShipCompany>
     *       <ShipAddress>5060 Santa Fe St</ShipAddress>
     *       <ShipCity>San Diego</ShipCity>
     *       <ShipStateCode>CA</ShipStateCode>
     *       <ShipZip>92109</ShipZip>
     *       <ShipCountryCode>US</ShipCountryCode>
     *       <BillFirstName>Testy</BillFirstName>
     *       <BillLastName>Testerman</BillLastName>
     *       <BillEmail>noreply@miva.com</BillEmail>
     *       <BillPhone>555-555-5555</BillPhone>
     *       <BillFax>555-555-1212</BillFax>
     *       <BillCompany>MivaCorp</BillCompany>
     *       <BillAddress>5060 Santa Fe St</BillAddress>
     *       <BillCity>San Diego</BillCity>
     *       <BillStateCode>CA</BillStateCode>
     *       <BillZip>92109</BillZip>
     *       <BillCountryCode>US</BillCountryCode>
     *   </Customer_Add>
    */
    public function toXml()
    {

        $xmlObject = new \SimpleXmlElement('<Customer_Add></Customer_Add>');

        $xmlObject->addChild('Login', $this->getLogin());
        $xmlObject->addChild('LostPasswordEmail', $this->getLostPasswordEmail());
        $xmlObject->addChild('Password', $this->getPassword());
        $xmlObject->addChild('ShipFirstName', $this->getShipFirstName());
        $xmlObject->addChild('ShipLastName', $this->getShipLastName());
        $xmlObject->addChild('ShipEmail', $this->getShipEmail());
        $xmlObject->addChild('ShipPhone', $this->getShipPhone());
        $xmlObject->addChild('ShipFax', $this->getShipFax());
        $xmlObject->addChild('ShipCompany', $this->getShipCompany());
        $xmlObject->addChild('ShipAddress', $this->getShipAddress());
        $xmlObject->addChild('ShipCity', $this->getShipCity());
        $xmlObject->addChild('ShipStateCode', $this->getShipStateCode());
        $xmlObject->addChild('ShipZip', $this->getShipZip());
        $xmlObject->addChild('ShipCountryCode', $this->getShipCountryCode());
        $xmlObject->addChild('BillFirstName', $this->getBillFirstName());
        $xmlObject->addChild('BillLastName', $this->getBillLastName());
        $xmlObject->addChild('BillEmail', $this->getBillEmail());
        $xmlObject->addChild('BillPhone', $this->getBillPhone());
        $xmlObject->addChild('BillFax', $this->getBillFax());
        $xmlObject->addChild('BillCompany', $this->getBillCompany());
        $xmlObject->addChild('BillAddress', $this->getBillAddress());
        $xmlObject->addChild('BillCity', $this->getBillCity());
        $xmlObject->addChild('BillStateCode', $this->getBillStateCode());
        $xmlObject->addChild('BillZip', $this->getBillZip());
        $xmlObject->addChild('BillCountryCode', $this->getBillCountryCode());

        return $xmlObject;
    }

}