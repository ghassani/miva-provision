<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@mivamerchant.com>
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
* CategoryFieldAdd
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class CategoryFieldAdd implements StoreFragmentInterface
{

    public $code;
    
    public $name;
    
    public $fieldType;
    
    public $info = 'Generated from miva-provisioning package';

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
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @param string $info
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
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <Module code="customfields" feature="fields_cat">
     *  <CategoryField_Add>
     *      <Code>Shipping</Code>
     *      <Name>Shipping</Name>
     *      <FieldType>textfield</FieldType>
     *      <Info><![CDATA[Transferred from Previous Store]]></Info>
     * </CategoryField_Add>
     * </Module>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<Module />');
        
        $xmlObject->addAttribute('code',    'customfields');
        $xmlObject->addAttribute('feature', 'fields_cat');
        
        
        $mainTag = $xmlObject->addChild('CategoryField_Add');
        
        $mainTag->addChild('Code', $this->getCode());
        $mainTag->addChild('Name', $this->getName())->addAttribute('method-call', 'addCDATA');
        $mainTag->addChild('FieldType', $this->getFieldType());
        $mainTag->addChild('Info', $this->getInfo())->addAttribute('method-call', 'addCDATA');

        
        return $xmlObject;
    }
}