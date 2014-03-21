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
* CustomerFieldsUpdate
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class CustomerFieldsUpdate implements FragmentInterface
{

    /** @var string */
    protected $billing;
    
    /** @var string */
    protected $firstName;
    
    /** @var string */
    protected $lastName;
    
    /** @var string */
    protected $email;
    
    /** @var string */
    protected $phone;
    
    /** @var string */
    protected $fax;
    
    /** @var string */
    protected $company;
    
    /** @var string */
    protected $address;
    
    /** @var string */
    protected $city;
    
    /** @var string */
    protected $state;
    
    /** @var string */
    protected $zip;
    
    /** @var string */
    protected $country;
    
    /** @var array */
    private $availableFieldChoices = array(
        'Required', 'Hidden', 'Optional',
    );
    
    /**
     * getBilling
     *
     * @return string
    */
    public function getBilling()
    {
        return $this->billing;
    }
    
    /**
     * setBilling
     *
     * @param string $billing
     *
     * @return self
    */
    public function setBilling($billing)
    {
        $this->billing = $billing;
        return $this;
    }

    /**
     * getFirstName
     *
     * @return string
    */
    public function getFirstName()
    {
        return $this->firstName;
    }
    
    /**
     * setFirstName
     *
     * @param string $firstName
     *
     * @return self
    */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }
    
    /**
     * getLastName
     *
     * @return string
    */
    public function getLastName()
    {
        return $this->lastName;
    }
    
    /**
     * setLastName
     *
     * @param string $lastName
     *
     * @return self
    */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * getEmail
     *
     * @return string
    */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * setEmail
     *
     * @param string $email
     *
     * @return self
    */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * getPhone
     *
     * @return string
    */
    public function getPhone()
    {
        return $this->phone;
    }
    
    /**
     * setPhone
     *
     * @param string $phone
     *
     * @return self
    */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }
   

    /**
     * getFax
     *
     * @return string
    */
    public function getFax()
    {
        return $this->fax;
    }
    
    /**
     * setFax
     *
     * @param string $fax
     *
     * @return self
    */
    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }


    /**
     * getCompany
     *
     * @return string
    */
    public function getCompany()
    {
        return $this->company;
    }
    
    /**
     * setCompany
     *
     * @param string $company
     *
     * @return self
    */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }
    
    /**
     * getAddress
     *
     * @return string
    */
    public function getAddress()
    {
        return $this->address;
    }
    
    /**
     * setAddress
     *
     * @param string $address
     *
     * @return self
    */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * getCity
     *
     * @return string
    */
    public function getCity()
    {
        return $this->city;
    }
    
    /**
     * setCity
     *
     * @param string $city
     *
     * @return self
    */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * getState
     *
     * @return string
    */
    public function getState()
    {
        return $this->state;
    }
    
    /**
     * setState
     *
     * @param string $state
     *
     * @return self
    */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }


    /**
     * getZip
     *
     * @return string
    */
    public function getZip()
    {
        return $this->zip;
    }
    
    /**
     * setZip
     *
     * @param string $zip
     *
     * @return self
    */
    public function setZip($zip)
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * getCountry
     *
     * @return string
    */
    public function getCountry()
    {
        return $this->country;
    }
    
    /**
     * setCountry
     *
     * @param string $country
     *
     * @return self
    */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <CustomerFields_Update>
     *      <Billing>Hidden</Billing>
     *      <FirstName>Required</FirstName>
     *      <LastName>Required</LastName>
     *      <Email>Required</Email>
     *      <Phone>Required</Phone>
     *      <Fax>Hidden</Fax>
     *      <Company>Optional</Company>
     *      <Address>Required</Address>
     *      <City>Required</City>
     *      <State>Required</State>
     *      <Zip>Required</Zip>
     *      <Country>Hidden</Country>
     *  </CustomerFields_Update>
    */
    public function toXml()
    {

        $xml = null;
        $xmlObject = new \SimpleXmlElement('<Fragment></Fragment>');
        $xmlObject->addChild('Name', $this->getName());
        $xmlObject->addChild('Code', $this->getCode());
        $xmlObject->addChild('ISO_Code', $this->getIsoCode());

        foreach ($xmlObject->children() as $child) {
            $xml .= $child->saveXml();
        }
        
        return $xml;
    }
    
}  
