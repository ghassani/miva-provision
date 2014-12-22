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
* CategoryFieldValue
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class CategoryFieldValue implements StoreFragmentInterface
{

    public $categoryCode;
    
    public $fieldCode;
    
    public $value;

    /**
     * @return mixed
     */
    public function getCategoryCode()
    {
        return $this->categoryCode;
    }

    /**
     * @param mixed $categoryCode
     */
    public function setCategoryCode($categoryCode)
    {
        $this->categoryCode = $categoryCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFieldCode()
    {
        return $this->fieldCode;
    }

    /**
     * @param mixed $fieldCode
     */
    public function setFieldCode($fieldCode)
    {
        $this->fieldCode = $fieldCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <Module code="customfields" feature="fields_cat">
     *  <CategoryField_Value category="code" field="code">No</CategoryField_Value>
     * </Module>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<Module />');
        
        $xmlObject->addAttribute('code',    'customfields');
        $xmlObject->addAttribute('feature', 'fields_cat');
        
        
        $mainTag = $xmlObject->addChild('CategoryField_Value', $this->getValue());
        
        $mainTag->addAttribute('category', $this->getCategoryCode());
        $mainTag->addAttribute('field', $this->getFieldCode());

        
        return $xmlObject;
    }
}