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
* PriceGroupProductAssign
*
* @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class PriceGroupProductAssign implements StoreFragmentInterface
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
     * @param string $productCode
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
     *  <PriceGroupProduct_Assign group_name="Healer" product_code="kit-healers" />
    */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<PriceGroupProduct_Assign />');

        $xmlObject->addAttribute('group_name', $this->getGroupName());
        $xmlObject->addAttribute('product_code', $this->getProductCode());
        
        return $xmlObject;
    }

}