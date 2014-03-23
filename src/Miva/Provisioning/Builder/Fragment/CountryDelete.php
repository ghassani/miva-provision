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
* CountryDelete
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class CountryDelete implements DomainFragmentInterface
{

    /** @var string */
    protected $name;

    /**
     * Constructor
     * 
     * @param string $name
     */
    public function __construct($name = null)
    {
        $this->name = $name;
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
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <Country_Delete name="Burchtopia is great" />
    */
    public function toXml()
    {

        $xmlObject = new \SimpleXmlElement('<Country_Delete></Country_Delete>');
        
        $xmlObject->addAttribute('name', $this->getName());
        
        return $xmlObject;
    }
}
        