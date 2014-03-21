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
* CategoryUpdate
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class CategoryUpdate implements FragmentInterface
{
    
    /** @var string */
    protected $name;

    /** @var string */
    protected $code;

    /** @var string */
    protected $active;
    
    /** @var string */
    protected $parentCategoryCode;


    /**
     * Constructor
     * 
     * @param string $code
     */
    public function __construct($code = null)
    {
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
    * setActive
    *
    * @param string $active
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
    * @return string
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
    public function toXml()
    {

        $xml = null;
        $xmlObject = new \SimpleXmlElement('<Fragment></Fragment>');
        $xmlObject->addChild('Name', sprintf('<![CDATA[%s]]>', $this->getName()));
        $xmlObject->addChild('Code', $this->getCode());
        $xmlObject->addChild('Active', $this->getActive() ? $this->getActive() : 'Yes');

        
        foreach ($xmlObject->children() as $child) {
            $xml .= $child->saveXml();
        }
        
        return $xml;
    }

}