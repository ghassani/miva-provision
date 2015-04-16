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
 * CouponDelete
 *
 * @author Gassan Idriss <gidriss@miva.com>
 */
class CouponDelete implements StoreFragmentInterface
{
    /** @var string */
    protected $code;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }


    /**
     * {@inheritDoc}
     *
     * Format:
     *
     * <Coupon_Delete code="xxx" />
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        if ($version < Version::NINE) {
            return;
        }

        $xmlObject = new SimpleXMLElement('<Coupon_Delete />');

        $xmlObject->addAttribute('code', $this->getCode());

        return $xmlObject;
    }
}

