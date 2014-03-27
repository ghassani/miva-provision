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
* AvailabilityGroupCustomer
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class AvailabilityGroupCustomerAssign implements Model\StoreFragmentInterface
{
    
    /** @var string */
    public $groupName;
    
    /** @var string */
    public $customerLogin;
    

    /**
     * getGroupName
     *
     * @return string
    */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * setGroupName
     *
     * @param string groupName
     *
     * @return self
    */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
        return $this;
    }

    /**
     * getCustomerLogin
     *
     * @return string
    */
    public function getCustomerLogin()
    {
        return $this->customerLogin;
    }

    /**
     * setCustomerLogin
     *
     * @param string customerLogin
     *
     * @return self
    */
    public function setCustomerLogin($customerLogin)
    {
        $this->customerLogin = $customerLogin;
        return $this;
    }
        
    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <AvailabilityGroupCustomer_Assign group_name="Thief" customer_login="rogue" />
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<AvailabilityGroupCustomer_Assign />');
        
        $xmlObject->addAttribute('group_name', $this->getGroupName());
        $xmlObject->addAttribute('customer_login', $this->getCustomerLogin());
        
        return $xmlObject;
    }
}
    