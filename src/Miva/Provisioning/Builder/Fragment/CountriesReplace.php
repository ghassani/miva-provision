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
use Miva\Provisioning\Builder\Fragment\Child\CountriesReplaceCountry;

/**
* CountriesReplace
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class CountriesReplace implements StoreFragmentInterface
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
        foreach ($countries as $country) {
            if (!$country instanceof CountriesReplaceCountry) {
                throw new \InvalidArgumentException('CountriesReplace:setCountries requires an array of CountriesReplaceCountry');
            }
        }
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
    public function addCountry(CountriesReplaceCountry $country)
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

        $xmlObject = new SimpleXMLElement('<Countries_Replace />');

        foreach ($this->getCountries() as $country) {
            XmlHelper::appendToParent($xmlObject, $country->toXml());
        }
        
        return $xmlObject;
    }

}
        