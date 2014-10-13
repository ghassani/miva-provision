<?php
namespace Miva\Json\Request;


interface RequestInterface
{

    const SESSION_TYPE_ADMIN = 'admin';

    const SESSION_TYPE_RUNTIME = 'runtime';

    public function validate();

    public function getParameters();

} 