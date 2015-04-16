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
* CategoryAdd
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class CategoryAdd implements StoreFragmentInterface
{
    
    /** @var string */
    protected $name;

    /** @var string */
    protected $code;

    /** @var string */
    protected $parentCategoryCode;

    /** @var string */
    protected $alternateDisplayPage;

    /** @var boolean */
    protected $active = true;

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
     * @return string
     */
    public function getParentCategoryCode()
    {
        return $this->parentCategoryCode;
    }

    /**
     * @param string $parentCategoryCode
     */
    public function setParentCategoryCode($parentCategoryCode)
    {
        $this->parentCategoryCode = $parentCategoryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlternateDisplayPage()
    {
        return $this->alternateDisplayPage;
    }

    /**
     * @param string $alternateDisplayPage
     */
    public function setAlternateDisplayPage($alternateDisplayPage)
    {
        $this->alternateDisplayPage = $alternateDisplayPage;
        return $this;
    }



    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <Category_Add>
     *     <Code>Weapons</Code>
     *     <Name><![CDATA[Weapons]]></Name>
     *     <ParentCategoryCode></ParentCategoryCode>
     *     <AlternateDisplayPage></AlternateDisplayPage>
     *     <Active>Yes</Active>
     *  </Category_Add> 
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<Category_Add />');
        $xmlObject->addChild('Name', $this->getName())->addAttribute('method-call', 'addCDATA');;
        $xmlObject->addChild('Code', $this->getCode());
        $xmlObject->addChild('Active', $this->getActive() ? 'Yes' : 'No');

        if ($this->getParentCategoryCode()) {
            $xmlObject->addChild('ParentCategoryCode', $this->getParentCategoryCode());
        }

        if ($this->getAlternateDisplayPage()) {
            $xmlObject->addChild('AlternateDisplayPage', $this->getAlternateDisplayPage());
        }

        return $xmlObject;
    }

}