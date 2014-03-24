<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@mivamerchant.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning\Builder\Fragment\Model;

/**
 * ProductKitFragmentInterface
 *
 * This interface is used to enforce only allowing fragments
 * to be added to the following fragments:
 * 
 *   ProductKitUpdate - Direct children
 *   ProductKitDelete - Direct children
 * 
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
interface ProductKitFragmentInterface extends FragmentFragmentInterface 
{
        
}