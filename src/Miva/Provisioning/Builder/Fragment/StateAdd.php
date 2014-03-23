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

/**
* StateAdd
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class StateAdd implements StoreFragmentInterface
{
    
    /** @var string */
    protected $name;

    /** @var string */
    protected $code;


    /**
     * Constructor
     * 
     * @param string $name
     * @param string $code
     */
    public function __construct($name = null, $code = null)
    {
        $this->name = $name;
        $this->code = $code;
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
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <State_Add code="" name="Outside the Realms" />
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new \SimpleXmlElement('<State_Add></State_Add>');
       
        $xmlObject->addAttribute('code', $this->getCode());
        $xmlObject->addAttribute('name', $this->getName());
        
        return $xmlObject;
    }

}