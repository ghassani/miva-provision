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
 * OrderDeleteItem
 *
 * @author Gassan Idriss <gidriss@miva.com>
 */
class OrderDeleteItem implements StoreFragmentInterface
{
    /**
     * @var int
     */
    protected $orderId;

    /**
     * @var int
     */
    protected $lineId;

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param mixed $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLineId()
    {
        return $this->lineId;
    }

    /**
     * @param mixed $lineId
     */
    public function setLineId($lineId)
    {
        $this->lineId = $lineId;
        return $this;
    }


    /**
     * {@inheritDoc}
     *
     * Format:
     *
     * <Order_Delete_Item order_id="1000" line_id="1000" />
     */
    public function toXml($version = Version::CURRENT, array $options = array())
    {
        $xmlObject = new SimpleXMLElement('<Order_Delete_Item />');

        $xmlObject->addAttribute('order_id', $this->getOrderId());
        $xmlObject->addAttribute('line_id', $this->getLineId());

        return $xmlObject;
    }
}

