<?php

namespace Miva\Json\Request\Admin;


class OrderListLoad extends Request
{
    protected $parameters = array(
        'session_type' => self::SESSION_TYPE_ADMIN,
        'function' => 'OrderList_Load_Query'
    );

    public function validate()
    {
        return true;
    }

}