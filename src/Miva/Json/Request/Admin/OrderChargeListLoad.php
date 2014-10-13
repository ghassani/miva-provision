<?php

namespace Miva\Json\Request\Admin;


class OrderChargeListLoad extends Request
{
    protected $parameters = array(
        'session_type' => self::SESSION_TYPE_ADMIN,
        'function' => 'OrderChargeList_Load',
        'order_id' => null,
    );

    public function validate()
    {
        $orderId = $this->getParameter('Order_ID');

        if (!$orderId) {
            return false;
        }

        return true;
    }

    public function setOrderId($orderId)
    {
        return $this->setParameter('Order_ID', $orderId);
    }

    public function getOrderId()
    {
        return $this->getParameter('Order_ID');
    }
}