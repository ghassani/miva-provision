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
 * CouponCustomerAssign
 *
 * @author Gassan Idriss <gidriss@miva.com>
 */
class CouponCustomerAssign implements StoreFragmentInterface
{
    /** @var string */
    public $couponCode;

    /** @var string */
    public $customerLogin;

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
    public function getCustomerLogin()
    {
        return $this->customerLogin;
    }

    /**
     * @param string $customerLogin
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
     * <CouponCustomer_Assign coupon_code="xxx" customer_login="yyy" />
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {

        $xmlObject = new SimpleXMLElement('<CouponCustomer_Assign />');

        $xmlObject->addAttribute('coupon_code', $this->getCouponCode());
        $xmlObject->addAttribute('customer_login', $this->getCustomerLogin());

        return $xmlObject;
    }
}






