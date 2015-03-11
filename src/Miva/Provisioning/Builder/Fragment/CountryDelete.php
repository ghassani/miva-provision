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
use Miva\Provisioning\Builder\Fragment\Model\DomainFragmentInterface;

/**
* CountryDelete
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class CountryDelete implements DomainFragmentInterface
{

    /** @var string */
    public $name;

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
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<Country_Delete></Country_Delete>');
        
        $xmlObject->addAttribute('name', $this->getName());
        
        return $xmlObject;
    }
}
        