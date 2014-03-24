<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@mivamerchant.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning\Builder;

use \SimpleXMLElement as BaseSimpleXMLElement;

/**
 * SimpleXMLElement
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class SimpleXMLElement extends BaseSimpleXMLElement
{
    /**
     * addCDATA
     * 
     * @param string $value
     * 
     * @return void
     */
    public function addCDATA($value) {
        $node= dom_import_simplexml($this); 
        $no = $node->ownerDocument; 
        $node->appendChild($no->createCDATASection($value)); 
    } 
}