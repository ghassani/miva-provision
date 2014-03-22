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
        'required', 'hidden', 'optional',
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
        return $this->setField('billing', $billing);
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
        return $this->setField('firstName', $firstName);
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
        return $this->setField('lastName', $lastName);
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
        return $this->setField('email', $email);
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
        return $this->setField('phone', $phone);
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
        return $this->setField('fax', $fax);
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
        return $this->setField('company', $company);
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
        return $this->setField('address', $address);
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
        return $this->setField('city', $city);
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
        return $this->setField('state', $state);

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
        return $this->setField('zip', $zip);
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
        return $this->setField('country', $country);
    }
    
    /**
     * setField
     * 
     * Set a field in this object and validate its input
     * 
     * @param string $field
     * @param string $value
     * 
     * @throws Exception
     */
     private function setField($field, $value)
     {
         if(!in_array(strtolower($value), $this->availableFieldChoices)){
             throw new \Exception('Customer Fields Must Be One of '.implode(', ', $this->availableFieldChoices));
         }
         $this->$field = $value;
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

        $xmlObject = new \SimpleXmlElement('<CustomerFields_Update></CustomerFields_Update>');
        
        $xmlObject->addChild('Billing', $this->getBilling());
        $xmlObject->addChild('FirstName', $this->getFirstName());
        $xmlObject->addChild('LastName', $this->getLastName());
        $xmlObject->addChild('Email', $this->getEmail());
        $xmlObject->addChild('Phone', $this->getPhone());
        $xmlObject->addChild('Fax', $this->getFax());
        $xmlObject->addChild('Company', $this->getCompany());
        $xmlObject->addChild('Address', $this->getAddress());
        $xmlObject->addChild('City', $this->getCity());
        $xmlObject->addChild('State', $this->getState());
        $xmlObject->addChild('Zip', $this->getZip());
        $xmlObject->addChild('Country', $this->getCountry());
        
        return $xmlObject;
    }
    
}  
