<?php
/*
*
*
*/
namespace Miva\Provisioning\Builder;

/**
* Builder
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class Builder
{
	protected $root;

	/**
	* Constructor
	*/
	public function __construct()
	{
		$this->root = new \SimpleXMLElement('<Provision />');
	}

	/**
	* getRoot
	*
	* @return SimpleXMLElement
	*/
	public function getRoot()
	{
		return $this->root;
	}

	/**
	* createStore
	*/
	public function createStore(Fragment\StoreCreate $store)
	{
		$domain = $this->getDomain();

		$storeCreate = $domain->addChild('Store_Create');
		$storeCreate->addChild($store->toXml());

		return $this;
	}

	/**
	* updateSettings
	*/
	public function updateSettings(Fragment\Settings $settings)
	{
		$domain = $this->getDomain();

		$settingsUpdate = $domain->addChild('Settings_Update');
		$settingsUpdate->addChild($settings->toXml());

		return $this;
	}

	/**
	* addCountry
	*/
	public function addCountry(Fragment\Country $country)
	{
		$domain = $this->getDomain();

		$countryAdd = $domain->addChild('Country_Add');
		$countryAdd->addChild($country->toXml());

		return $this;
	}

	/**
	* updateCountry
	*
	* @param Country $storeCreate
	*
	* @return self
	*/
	public function updateCountry(Fragment\Country $country)
	{
		$domain = $this->getDomain();

		$countryUpdate = $domain->addChild('Country_Update');
		$countryUpdate->addAttribute('name', $country->getName());
		$countryUpdate->addChild($country->toXml());

		return $this;
	}

	/**
	* deleteCountry
	*
	* @param Country $storeCreate
	*
	* @return self
	*/
	public function deleteCountry(Fragment\Country $country)
	{
		$domain = $this->getDomain();

		$countryDelete = $domain->addChild('Country_Delete');
		$countryDelete->addAttribute('name', $country->getName());

		return $this;
	}

	/**
	* getDomain
	*
	* Gets the Domain node
	*/
	public function getDomain()
	{
		$domain = $this->getRoot()->xpath('/Provision/Domain');

		if(!$domain) {
			$domain = $this->getRoot()->addChild('Domain');	
		} else {
			$domain = end($domain);
		}

		return $domain;
	}

	/**
	* toXml
	*
	* Outputs current builder to a XML string
	*
	* @return string
	*/
	public function toXml()
	{
		return $this->root->saveXml();
	}
}