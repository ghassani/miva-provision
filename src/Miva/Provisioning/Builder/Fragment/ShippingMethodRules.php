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
* ShippingMethodRules
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class ShippingMethodRules implements FragmentInterface
{
    
    
    /** @var int */
    protected $priority;
    
    /** @var string */
    protected $description;
    
    /** @var int */
    protected $minimumSubTotal;
    
    /** @var int */
    protected $maximumSubTotal;
    
    /** @var int */
    protected $minimumQuantity;
    
    /** @var int */
    protected $maximumQuantity;
    
    /** @var int */
    protected $minimumWeight;
    
    /** @var int */
    protected $maximumWeight;
    
    /** @var string */
    protected $states;
    
    /** @var string */
    protected $zipCodes;
    
    /** @var string */
    protected $countries;
    
    /** @var string */
    protected $exclusions;
    

    
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
     * @return string
    */
    public function getStates()
    {
        return $this->states;
    }
    
    /**
     * setStates
     *
     * @param string $states
     *
     * @return self
    */
    public function setStates($states)
    {
        $this->states = $states;
        return $this;
    }
    
    /**
     * getZipCodes
     *
     * @return string
    */
    public function getZipCodes()
    {
        return $this->zipCodes;
    }
    
    /**
     * setZipCodes
     *
     * @param string $zipCodes
     *
     * @return self
    */
    public function setZipCodes($zipCodes)
    {
        $this->zipCodes = $zipCodes;
        return $this;
    }
    
    /**
     * getCountries
     *
     * @return string
    */
    public function getCountries()
    {
        return $this->countries;
    }
    
    /**
     * setCountries
     *
     * @param string $countries
     *
     * @return self
    */
    public function setCountries($countries)
    {
        $this->countries = $countries;
        return $this;
    }
    
    /**
     * getExclusions
     *
     * @return string
    */
    public function getExclusions()
    {
        return $this->exclusions;
    }
    
    /**
     * setExclusions
     *
     * @param string $exclusions
     *
     * @return self
    */
    public function setExclusions($exclusions)
    {
        $this->exclusions = $exclusions;
        return $this;
    }
    

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <?xml version="1.0"?>
<ShippingMethodRules_Update module_code="upsxml" method_code="02">
            <Priority>5</Priority>
            <Description>2 Day Air</Description>
            <MinimumSubTotal>0.00</MinimumSubTotal>
            <MaximumSubTotal>0.00</MaximumSubTotal>
            <MinimumQuantity>0</MinimumQuantity>
            <MaximumQuantity>0</MaximumQuantity>
            <MinimumWeight>0.00</MinimumWeight>
            <MaximumWeight>0.00</MaximumWeight>

            <States>
                <State code="CA"/>
                <State code="OH"/>
            </States>

            <ZipCodes>92109,44145</ZipCodes>

            <Countries>
                <Country code="US"/>
                <Country code="GB"/>
            </Countries>

            <Exclusions>
                <Excludes module_code="flatrate" method_code="flat_2day"/>        (multiple allowed)
                <ExcludedBy module_code="baseunit" method_code="base_2day"/>    (multiple allowed)
            </Exclusions>
        </ShippingMethodRules_Update>

    */
    public function toXml()
    {

        $xml = null;
        $xmlObject = new \SimpleXmlElement('<Fragment></Fragment>');

        foreach ($xmlObject->children() as $child) {
            $xml .= $child->saveXml();
        }
        
        return $xml;
    }
}
        