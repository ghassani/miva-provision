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
* CountriesReplace
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class CountriesReplace implements Model\StoreFragmentInterface
{
    /** @var array */
    protected $countries = array();

    /**
     * getCountries
     *
     * @return array
    */
    public function getCountries()
    {
        return $this->countries;
    }
    
    /**
     * setCountries
     *
     * @param array $countries
     *
     * @return self
    */
    public function setCountries(array $countries)
    {
    	$this->countries = $countries;
        return $this;
    }
    
    /**
     * setCountries
     *
     * @param Country $country
     *
     * @return self
    */
    public function addCountry(Country $country)
    {
        $this->countries[] = $country;
        return $this;
    }

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <Countries_Replace>
     *      <Country code="US"/>
     *  </Countries_Replace>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xml = null;
        $xmlObject = new SimpleXMLElement('<Countries_Replace></Countries_Replace>');


        foreach ($this->getCounties() as $country) {
            $childXml = $xmlObject->addChild('Country', null);
            $childXml->addAttribute('code', $country->getCode());
        }
        
        return $xml;
    }

}
        