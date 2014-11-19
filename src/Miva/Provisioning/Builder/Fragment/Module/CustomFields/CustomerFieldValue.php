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
* CustomerFieldValue
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class CustomerFieldValue implements StoreFragmentInterface
{

    public $customerLogin;
    
    public $fieldCode;
    
    public $value;

    /**
     * @return mixed
     */
    public function getCustomerLogin()
    {
        return $this->customerLogin;
    }

    /**
     * @param mixed $customerLogin
     */
    public function setCustomerLogin($customerLogin)
    {
        $this->customerLogin = $customerLogin;
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
     * <Module code="customfields" feature="fields_cust">
     *  <CustomerField_Value customer="login" field="code">No</CustomerField_Value>
     * </Module>
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<Module />');
        
        $xmlObject->addAttribute('code',    'customfields');
        $xmlObject->addAttribute('feature', 'fields_cust');
        
        
        $mainTag = $xmlObject->addChild('CustomerField_Value', $this->getValue());
        
        $mainTag->addAttribute('customer', $this->getCustomerLogin());
        $mainTag->addAttribute('field', $this->getFieldCode());

        
        return $xmlObject;
    }
}