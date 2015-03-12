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

/**
* State
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class State implements Model\ChildFragmentInterface
{

    /** @var string */
    public $code;


    /**
     * Constructor
     * 
     * @param string $code
     */
    public function __construct($code = null)
    {
        $this->name = $name;
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
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <State code="code" />
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<State />');
        
        $xmlObject->addAttribute('code', $this->getName());

        return $xmlObject;
    }

}