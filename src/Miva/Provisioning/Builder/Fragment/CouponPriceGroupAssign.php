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
 * CouponPriceGroupAssign
 *
 * @author Gassan Idriss <gidriss@miva.com>
 */
class CouponPriceGroupAssign implements StoreFragmentInterface
{
    /** @var string */
    protected $couponCode;

    /** @var string */
    protected $groupName;

    /**
     * @return string
     */
    public function getCouponCode()
    {
        return $this->couponCode;
    }

    /**
     * @param string $couponCode
     */
    public function setCouponCode($couponCode)
    {
        $this->couponCode = $couponCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * @param string $groupName
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
        return $this;
    }




    /**
     * {@inheritDoc}
     *
     * Format:
     *
     * <CouponPriceGroup_Assign coupon_code="xxx" group_name="yyy" />
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<CouponPriceGroup_Assign />');

        $xmlObject->addAttribute('coupon_code', $this->getCouponCode());
        $xmlObject->addAttribute('group_name', $this->getGroupName());

        return $xmlObject;
    }
}




