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
* CategoryAdd
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class CategoryAdd implements FragmentInterface
{
    
    /** @var string */
    protected $name;

    /** @var string */
    protected $code;

    /** @var string */
    protected $active;


    /**
     * Constructor
     * 
     * @param string $name
     * @param string $code
     * @param string $active
     */
    public function __construct($name = null, $code = null, $active = 'Yes')
    {
        $this->name = $name;
        $this->code = $code;
        $this->active = $active;
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
     * {@inheritDoc}
     * 
     * Format:
     * 
     *  <Category_Add>
     *     <Code>Weapons</Code>
     *     <Name><![CDATA[Weapons]]></Name>
     *     <Active>Yes</Active>
     *  </Category_Add> 
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