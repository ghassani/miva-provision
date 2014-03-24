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
* CategoryUpdate
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class CategoryUpdate implements StoreFragmentInterface
{
    
    /** @var string */
    protected $name;

    /** @var string */
    protected $code;

    /** @var string */
    protected $previousCode;

    /** @var boolean */
    protected $active = true;
    
    /** @var string */
    protected $parentCategoryCode;


    /**
     * Constructor
     * 
     * @param string $code
     * @param string $previousCode
     */
    public function __construct($code = null, $previousCode = null)
    {
        $this->code = $code;
        $this->previousCode = $previousCode;
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
     * getPreviousCode
     *
     * @return string
    */
    public function getPreviousCode()
    {
        return $this->previousCode;
    }
    
    /**
     * setPreviousCode
     *
     * @param string $previousCode
     *
     * @return self
    */
    public function setPreviousCode($previousCode)
    {
    	$this->previousCode = $previousCode;
        return $this;
    }


    /**
    * setActive
    *
    * @param boolean $active
    *
    * @return self
    */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
    * getActive
    *
    * @return boolean
    */
    public function getActive()
    {
        return $this->active;
    }
    
    /**
     * getParentCategoryCode
     *
     * @return string
    */
    public function getParentCategoryCode()
    {
        return $this->parentCategoryCode;
    }
    
    /**
     * setParentCategoryCode
     *
     * @param string $parentCategoryCode
     *
     * @return self
    */
    public function setParentCategoryCode($parentCategoryCode)
    {
        $this->parentCategoryCode = $parentCategoryCode;
        return $this;
    }


    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <Category_Update code="Food">
     *      <Name>Name</Name>
     *      <Active>True</Active>
     *      <ParentCategoryCode>Goods</ParentCategoryCode>
     *  </Category_Update>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<Category_Update></Category_Update>');
        
        $xmlObject->addAttribute('code', $this->getPreviousCode() ? $this->getPreviousCode() : $this->getCode());
        
        $xmlObject->addChild('Name', sprintf('<![CDATA[%s]]>', $this->getName()));
        $xmlObject->addChild('Code', $this->getCode());
        $xmlObject->addChild('Active', $this->getActive() ? 'Yes' : 'No');

        return $xmlObject;
    }

}