<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@miva.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Miva\Provisioning\Builder\Fragment\Model;

/**
 * ChildFragmentInterface
 *
 * This interface is used to enforce only allowing fragments
 * to be added to another fragment and not directly being able
 * to add them to the domain or store nodes when building.
 * 
 * @author Gassan Idriss <gidriss@miva.com>
*/
interface ChildFragmentInterface extends FragmentInterface
{
        
}