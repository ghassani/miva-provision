<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@miva.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning\Builder\Fragment\Module\CustomFields;

use Miva\Version;
use Miva\Provisioning\Builder\Helper\XmlHelper;
use Miva\Provisioning\Builder\SimpleXMLElement;
use Miva\Provisioning\Builder\Fragment\Model\StoreFragmentInterface;

/**
* ProductFieldUpdate
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class ProductFieldUpdate implements StoreFragmentInterface
{

    public $code;
    
    public $newCode;
    
    public $name;
    
    public $fieldType;    
    
    public $info;

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFieldType()
    {
        return $this->fieldType;
    }

    /**
     * @param mixed $fieldType
     */
    public function setFieldType($fieldType)
    {
        $this->fieldType = $fieldType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @param mixed $info
     */
    public function setInfo($info)
    {
        $this->info = $info;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNewCode()
    {
        return $this->newCode;
    }

    /**
     * @param mixed $newCode
     */
    public function setNewCode($newCode)
    {
        $this->newCode = $newCode;
        return $this;
    }   
    
    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <Module code="customfields" feature="fields_prod">
     *  <ProductField_Update code="code">
     *      <Code>code</Code>
     *      <Name>name</Name>
     *  </ProductField_Update>
     * </Module>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<Module />');
        
        $xmlObject->addAttribute('code',    'customfields');
        $xmlObject->addAttribute('feature', 'fields_prod');
        
        
        $mainTag = $xmlObject->addChild('ProductField_Update');
        
        $mainTag->addAttribute('code', $this->getCode());
        
        if ($this->getNewCode() && $this->getCode() != $this->getNewCode()) {
            $mainTag->addChild('Code', $this->getNewCode());
        } else {
            $mainTag->addChild('Code', $this->getCode());
        }        
        
        if ($this->getName()) {
            $mainTag->addChild('Name', $this->getName())->addAttribute('method-call', 'addCDATA');
        }
        
        if ($this->getFieldType()) {
            $mainTag->addChild('FieldType', $this->getFieldType());
        }
        
        if ($this->getInfo()) {
            $mainTag->addChild('Info', $this->getInfo())->addAttribute('method-call', 'addCDATA');
        }
        
        return $xmlObject;
    }
}
