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

/**
 * ShippingMethodRulesUpdate
 *
 * @author Gassan Idriss <gidriss@miva.com>
*/
class ShippingMethodRulesUpdate implements Model\FragmentInterface
{
    
    /** @var string */
    public $moduleCode;

    /** @var string */
    public $methodCode;
        
    /** @var int */
    public $priority;
    
    /** @var string */
    public $description;
    
    /** @var int */
    public $minimumSubTotal;
    
    /** @var int */
    public $maximumSubTotal;
    
    /** @var int */
    public $minimumQuantity;
    
    /** @var int */
    public $maximumQuantity;
    
    /** @var int */
    public $minimumWeight;
    
    /** @var int */
    public $maximumWeight;
    
    /** @var array */
    public $states = array();
    
    /** @var array */
    public $zipCodes = array();
    
    /** @var array */
    public $countries = array();
    
    /** @var array */
    public $exclusions = array();
    

    
    /**
     * getPriority
     *
     * @return int
    */
    public function getPriority()
    {
        return $this->priority;
    }
    
    /**
     * setPriority
     *
     * @param int $priority
     *
     * @return self
    */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }
    
    /**
     * getDescription
     *
     * @return string
    */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * setDescription
     *
     * @param string $description
     *
     * @return self
    */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
    
    /**
     * getMinimumSubTotal
     *
     * @return int
    */
    public function getMinimumSubTotal()
    {
        return $this->minimumSubTotal;
    }
    
    /**
     * setMinimumSubTotal
     *
     * @param int $minimumSubTotal
     *
     * @return self
    */
    public function setMinimumSubTotal($minimumSubTotal)
    {
        $this->minimumSubTotal = $minimumSubTotal;
        return $this;
    }
    
    /**
     * getMaximumSubTotal
     *
     * @return int
    */
    public function getMaximumSubTotal()
    {
        return $this->maximumSubTotal;
    }
    
    /**
     * setMaximumSubTotal
     *
     * @param int $maximumSubTotal
     *
     * @return self
    */
    public function setMaximumSubTotal($maximumSubTotal)
    {
        $this->maximumSubTotal = $maximumSubTotal;
        return $this;
    }
    
    /**
     * getMinimumQuantity
     *
     * @return int
    */
    public function getMinimumQuantity()
    {
        return $this->minimumQuantity;
    }
    
    /**
     * setMinimumQuantity
     *
     * @param int $minimumQuantity
     *
     * @return self
    */
    public function setMinimumQuantity($minimumQuantity)
    {
        $this->minimumQuantity = $minimumQuantity;
        return $this;
    }
    
    /**
     * getMaximumQuantity
     *
     * @return int
    */
    public function getMaximumQuantity()
    {
        return $this->maximumQuantity;
    }
    
    /**
     * setMaximumQuantity
     *
     * @param int $maximumQuantity
     *
     * @return self
    */
    public function setMaximumQuantity($maximumQuantity)
    {
        $this->maximumQuantity = $maximumQuantity;
        return $this;
    }
    
    /**
     * getMinimumWeight
     *
     * @return int
    */
    public function getMinimumWeight()
    {
        return $this->minimumWeight;
    }
    
    /**
     * setMinimumWeight
     *
     * @param int $minimumWeight
     *
     * @return self
    */
    public function setMinimumWeight($minimumWeight)
    {
        $this->minimumWeight = $minimumWeight;
        return $this;
    }
    
    /**
     * getMaximumWeight
     *
     * @return int
    */
    public function getMaximumWeight()
    {
        return $this->maximumWeight;
    }
    
    /**
     * setMaximumWeight
     *
     * @param int $maximumWeight
     *
     * @return self
    */
    public function setMaximumWeight($maximumWeight)
    {
        $this->maximumWeight = $maximumWeight;
        return $this;
    }
    
    /**
     * getStates
     *
     * @return array
    */
    public function getStates()
    {
        return $this->states;
    }
    
    /**
     * setStates
     *
     * @param array $states
     *
     * @return self
    */
    public function setStates(array $states)
    {
        foreach ($states as $state) {
            if (!$state instanceof State) {
                throw new \InvalidArgumentException('ShippingMethodRulesUpdate::setStates requires an array of State');
            }
        }
        $this->states = $states;
        return $this;
    }
    
    /**
     * addState
     * 
     * @param State $state
     * 
     * @return self
     */
    public function addState(State $state)
    {
        $this->states[] = $state;
        return $this;
    }
    
    /**
     * getZipCodes
     *
     * @return array
    */
    public function getZipCodes()
    {
        return $this->zipCodes;
    }
    
    /**
     * setZipCodes
     *
     * @param array $zipCodes
     *
     * @return self
    */
    public function setZipCodes(array $zipCodes)
    {
        $this->zipCodes = $zipCodes;
        return $this;
    }
    
    /**
     * addZipCode
     *
     * @param string $zipCode
     *
     * @return self
    */
    public function addZipCode($zipCode)
    {
        $this->zipCodes[] = $zipCode;
        return $this;
    }
    
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
            if (!$country instanceof Country) {
                throw new \InvalidArgumentException('ShippingMethodRulesUpdate::setCountries requires an array of Country');
            }
        }
        $this->countries = $countries;
        return $this;
    }
    
    
    /**
     * addCountry
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
     * getExclusions
     *
     * @return array
    */
    public function getExclusions()
    {
        return $this->exclusions;
    }
    
    /**
     * setExclusions
     *
     * @param array $exclusions
     *
     * @return self
    */
    public function setExclusions(array $exclusions)
    {
        foreach ($exclusions as $exclusion) {
            if (!$exclusion instanceof ShippingMethodRulesExclusion) {
                throw new \InvalidArgumentException('ShippingMethodRulesUpdate::setExclusions requires an array of ShippingMethodRulesExclusion');
            }
        }
        $this->exclusions = $exclusions;
        return $this;
    }
    
    /**
     * addExclusion
     * 
     * @param ShippingMethodRulesExclusion $exclusion
     * 
     * @return self
     */
    public function addExclusion(ShippingMethodRulesExclusion $exclusion)
    {
        $this->exclusions[] = $exclusion;
        return $this;
    }
    

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <ShippingMethodRules_Update module_code="upsxml" method_code="02">
     *       
     *       <Priority>5</Priority>
     *       <Description>2 Day Air</Description>
     *       <MinimumSubTotal>0.00</MinimumSubTotal>
     *       <MaximumSubTotal>0.00</MaximumSubTotal>
     *       <MinimumQuantity>0</MinimumQuantity>
     *       <MaximumQuantity>0</MaximumQuantity>
     *       <MinimumWeight>0.00</MinimumWeight>
     *       <MaximumWeight>0.00</MaximumWeight>
     *       <States>
     *           <State code="CA"/>
     *           <State code="OH"/>
     *       </States>
     *
     *        <ZipCodes>92109,44145</ZipCodes>
     *
     *            <Countries>
     *                <Country code="US"/>
     *                <Country code="GB"/>
     *            </Countries>
     *
     *            <Exclusions>
     *                <Excludes module_code="flatrate" method_code="flat_2day"/>     
     *                <ExcludedBy module_code="baseunit" method_code="base_2day"/>  
     *            </Exclusions>
     *        </ShippingMethodRules_Update>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<ShippingMethodRules_Update />');
        
        $xmlObject->addAttribute('module_code', $this->getModuleCode());
        $xmlObject->addAttribute('method_code', $this->getMethodCode());
        
        $xmlObject->addChild('Priority', $this->getPriority());
        $xmlObject->addChild('Description', $this->getDescription());
        $xmlObject->addChild('MinimumSubTotal', $this->getMinimumSubTotal());
        $xmlObject->addChild('MaximumSubTotal', $this->getMaximumSubTotal());
        $xmlObject->addChild('MinimumQuantity', $this->getMinimumQuantity());
        $xmlObject->addChild('MaximumQuantity', $this->getMaximumQuantity());
        $xmlObject->addChild('MinimumWeight', $this->getMinimumWeight());
        $xmlObject->addChild('MaximumWeight', $this->getMaximumWeight());
        
        if (count($this->getStates())) {
           $statesXmlRoot = $xmlObject->addChild('States');
           foreach ($this->getStates() as $state) {
               XmlHelper::appendToParent($statesXmlRoot, $state->toXml($version, $options));
           } 
        }
        
        if (count($this->getZipCodes())) {
           $xmlObject->addChild('ZipCodes', implode(',', $this->getZipCodes()));
        }

        if (count($this->getCountries())) {
           $countriesXmlRoot = $xmlObject->addChild('Countries');
           foreach ($this->getCountries() as $country) {
               XmlHelper::appendToParent($countriesXmlRoot, $country->toXml($version, $options));
           } 
        }

        if (count($this->getExclusions())) {
            $exclusionsXmlRoot = $xmlObject->addChild('Exclusions');
            foreach ($this->getExclusions() as $exclusion ) {
                XmlHelper::appendToParent($exclusionsXmlRoot, $exclusion->toXml($version, $options));
            }
        }
        
        return $xmlObject;
    }
}
        