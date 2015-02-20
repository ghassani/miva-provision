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
class CategoryUpdate implements Model\StoreFragmentInterface
{

    /** @var string */
    public $categoryCode;

    /** @var string */
    public $name;

    /** @var string */
    public $code;

    /** @var boolean */
    public $active = true;
    
    /** @var string */
    public $parentCategoryCode;


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
     * @return string
     */
    public function getCategoryCode()
    {
        return $this->categoryCode;
    }

    /**
     * @param string $categoryCode
     */
    public function setCategoryCode($categoryCode)
    {
        $this->categoryCode = $categoryCode;
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

        $xmlObject = new SimpleXMLElement('<Category_Update />');
        
        $xmlObject->addAttribute('code', $this->getCategoryCode());

        if ($this->getName()) {
            $xmlObject->addChild('Name', $this->getName());
        }

        if ($this->getCode()) {
            $xmlObject->addChild('Code', $this->getCode());
        }

        $xmlObject->addChild('Active', $this->getActive() ? 'Yes' : 'No');


        return $xmlObject;
    }

}