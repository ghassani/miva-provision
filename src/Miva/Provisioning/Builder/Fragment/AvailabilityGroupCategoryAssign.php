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
* AvailabilityGroupCategoryAssign
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class AvailabilityGroupCategoryAssign implements Model\StoreFragmentInterface
{
    
    /** @var string */
    public $groupName;
    
    /** @var string */
    public $categoryCode;
    
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
     * @param string $groupName
     *
     * @return self
    */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
        return $this;
    }
    
    /**
     * getCategoryCode
     *
     * @return string
    */
    public function getCategoryCode()
    {
        return $this->categoryCode;
    }
    
    /**
     * setCategoryCode
     *
     * @param string $categoryCode
     *
     * @return self
    */
    public function setCategoryCode($categoryCode)
    {
        $this->categoryCode = $categoryCode;
        return $this;
    }

    /**
     * {@inheritDoc}
     * 
     * Format:
     * 
     * <AvailabilityGroupCategory_Assign group_name="Monk" category_code="Exotic" />
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<AvailabilityGroupCategory_Assign />');
        
        $xmlObject->addAttribute('group_name', $this->getGroupName());
        $xmlObject->addAttribute('category_code', $this->getCategoryCode());
        
        return $xmlObject;
    }
}
