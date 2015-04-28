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
* AvailabilityGroupProductAssign
*
* @author Gassan Idriss <gidriss@miva.com>
*/
class AvailabilityGroupProductAssign implements StoreFragmentInterface
{
    
    /** @var string */
    protected $groupName;
    
    /** @var string */
    protected $productCode;

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
     * getProductCode
     *
     * @return string
    */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * setProductCode
     *
     * @param string productCode
     *
     * @return self
    */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }
    

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <AvailabilityGroupProduct_Assign group_name="Thief" product_code="kit-disguise" />
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<AvailabilityGroupCustomer_Assign />');
        
        $xmlObject->addAttribute('group_name', $this->getGroupName());
        $xmlObject->addAttribute('product_code', $this->getProductCode());
        
        return $xmlObject;
    }

}
    