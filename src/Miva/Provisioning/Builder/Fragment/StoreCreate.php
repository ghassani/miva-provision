<?php
/*
*
*
*/
namespace Miva\Provisioning\Builder\Fragment;

/**
* StoreCreate
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class StoreCreate implements FragmentInterface
{

	protected $code;

	protected $manager;

	protected $licenseNumber;

	protected $owner;

	protected $email;

	protected $company;

	protected $address;

	protected $city;

	protected $state;

	protected $zip;

	protected $country;

	protected $phone;

	protected $fax;

	protected $weightUnits;

	protected $basketTimeout;

	protected $priceGroupOverlap;

	protected $firstOrderNumber;

	protected $salesTaxModule;

	protected $currencyModule;

	protected $requireShipping;

	protected $requireTax;

	protected $requireShippingForFreeOrders;

	protected $userInterface;

	protected $maintenanceIpAddresses;


	/**
	* Constructor
	*/
	public function __construct($code = null)
	{
		$this->code = $code;
	}

	/**
	* setCode
	*
	* @param string $code
	*
	* @return self
	*/
	public function setCode($code)
	{
		$this->code = $code;
		return $this;
	}

	/**
	* getCode
	*
	* @return string
	*/
	public function getCode()
	{
		return $this->code;
	}

	/**
	* setName
	*
	* @param string $name
	*
	* @return self
	*/
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	/**
	* getName
	*
	* @return string
	*/
	public function getName()
	{
		return $this->name;
	}

	/**
	* setLicenseNumber
	*
	* @param string $licenseNumber
	*
	* @return self
	*/
	public function setLicenseNumber($licenseNumber)
	{
		$this->licenseNumber = $licenseNumber;
		return $this;
	}

	/**
	* getLicenseNumber
	*
	* @return string
	*/
	public function getLicenseNumber()
	{
		return $this->licenseNumber;
	}

	/**
	* setOwner
	*
	* @param string $owner
	*
	* @return self
	*/
	public function setOwner($owner)
	{
		$this->owner = $owner;
		return $this;
	}

	/**
	* getOwner
	*
	* @return string
	*/
	public function getOwner()
	{
		return $this->owner;
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
	* getEmail
	*
	* @return string
	*/
	public function getEmail()
	{
		return $this->email;
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
	* getCompany
	*
	* @return string
	*/
	public function getCompany()
	{
		return $this->company;
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
	* getAddress
	*
	* @return string
	*/
	public function getAddress()
	{
		return $this->address;
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
	* getCity
	*
	* @return string
	*/
	public function getCity()
	{
		return $this->city;
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
	* getState
	*
	* @return string
	*/
	public function getState()
	{
		return $this->state;
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
	* getZip
	*
	* @return string
	*/
	public function getZip()
	{
		return $this->zip;
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
	* getCountry
	*
	* @return string
	*/
	public function getCountry()
	{
		return $this->country;
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
	* getPhone
	*
	* @return string
	*/
	public function getPhone()
	{
		return $this->phone;
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
	* getFax
	*
	* @return string
	*/
	public function getFax()
	{
		return $this->fax;
	}

	/**
	* setWeightUnits
	*
	* @param string $weightUnits
	*
	* @return self
	*/
	public function setWeightUnits($weightUnits)
	{
		$this->weightUnits = $weightUnits;
		return $this;
	}

	/**
	* getWeightUnits
	*
	* @return string
	*/
	public function getWeightUnits()
	{
		return $this->weightUnits;
	}

	/**
	* setBasketTimeout
	*
	* @param string $basketTimeout
	*
	* @return self
	*/
	public function setBasketTimeout($basketTimeout)
	{
		$this->basketTimeout = $basketTimeout;
		return $this;
	}

	/**
	* getBasketTimeout
	*
	* @return string
	*/
	public function getBasketTimeout()
	{
		return $this->basketTimeout;
	}

	/**
	* setPriceGroupOverlap
	*
	* @param string $basketTimeout
	*
	* @return self
	*/
	public function setPriceGroupOverlap($priceGroupOverlap)
	{
		$this->priceGroupOverlap = $priceGroupOverlap;
		return $this;
	}

	/**
	* getPriceGroupOverlap
	*
	* @return string
	*/
	public function getPriceGroupOverlap()
	{
		return $this->priceGroupOverlap;
	}

	/**
	* setFirstOrderNumber
	*
	* @param string $firstOrderNumber
	*
	* @return self
	*/
	public function setFirstOrderNumber($firstOrderNumber)
	{
		$this->firstOrderNumber = $firstOrderNumber;
		return $this;
	}

	/**
	* getFirstOrderNumber
	*
	* @return string
	*/
	public function getFirstOrderNumber()
	{
		return $this->firstOrderNumber;
	}

	/**
	* setSalesTaxModule
	*
	* @param string $salesTaxModule
	*
	* @return self
	*/
	public function setSalesTaxModule($salesTaxModule)
	{
		$this->salesTaxModule = $salesTaxModule;
		return $this;
	}

	/**
	* getSalesTaxModule
	*
	* @return string
	*/
	public function getSalesTaxModule()
	{
		return $this->salesTaxModule;
	}

	/**
	* setCurrencyModule
	*
	* @param string $currencyModule
	*
	* @return self
	*/
	public function setCurrencyModule($currencyModule)
	{
		$this->currencyModule = $currencyModule;
		return $this;
	}

	/**
	* getCurrencyModule
	*
	* @return string
	*/
	public function getCurrencyModule()
	{
		return $this->currencyModule;
	}

	/**
	* setRequireShipping
	*
	* @param string $requireShipping
	*
	* @return self
	*/
	public function setRequireShipping($requireShipping)
	{
		$this->requireShipping = $requireShipping;
		return $this;
	}

	/**
	* getRequireShipping
	*
	* @return string
	*/
	public function getRequireShipping()
	{
		return $this->requireShipping;
	}

	/**
	* setRequireTax
	*
	* @param string $requireTax
	*
	* @return self
	*/
	public function setRequireTax($requireTax)
	{
		$this->requireTax = $requireTax;
		return $this;
	}

	/**
	* getRequireTax
	*
	* @return string
	*/
	public function getRequireTax()
	{
		return $this->requireTax;
	}

	/**
	* setRequireShippingForFreeOrders
	*
	* @param string $requireShippingForFreeOrders
	*
	* @return self
	*/
	public function setRequireShippingForFreeOrders($requireShippingForFreeOrders)
	{
		$this->requireShippingForFreeOrders = $requireShippingForFreeOrders;
		return $this;
	}

	/**
	* getRequireShippingForFreeOrders
	*
	* @return string
	*/
	public function getRequireShippingForFreeOrders()
	{
		return $this->requireShippingForFreeOrders;
	}

	/**
	* setUserInterface
	*
	* @param string $userInterface
	*
	* @return self
	*/
	public function setUserInterface($userInterface)
	{
		$this->userInterface = $userInterface;
		return $this;
	}

	/**
	* getUserInterface
	*
	* @return string
	*/
	public function getUserInterface()
	{
		return $this->userInterface;
	}

	/**
	* setMaintenanceIpAddresses
	*
	* @param string $maintenanceIpAddresses
	*
	* @return self
	*/
	public function setMaintenanceIpAddresses($maintenanceIpAddresses)
	{
		$this->maintenanceIpAddresses = $maintenanceIpAddresses;
		return $this;
	}

	/**
	* getMaintenanceIpAddresses
	*
	* @return string
	*/
	public function getMaintenanceIpAddresses()
	{
		return $this->maintenanceIpAddresses;
	}

	/**
	* {@inheritDoc}
	*/
	public function toXml()
	{
		$xml = null;
		$reflector = new \ReflectionClass($this);
		$xmlObject = new \SimpleXmlElement('<Fragment></Fragment>');

		foreach($reflector->getProperties() as $property) {			
			$name = $property->getName();
			if(isset($this->$name) && $this->$name) {
				$xmlObject->addChild(ucwords($name), $this->$name);
			}
		}
		
		foreach ($xmlObject->children() as $child) {
			$xml .= $child->saveXml();
		}
		
		return $xml;
	}
}