<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@mivamerchant.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning\Builder\Helper;

/**
 * XmlHelper
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class XmlHelper
{
    /**
     * appendToParent
     * 
     * Appends a SimpleXMLElement )child) into another SimpleXMLElement (parent)
     * 
     * @param SimpleXMLElement $parent
     * @param SimpleXMLElement $child
     * 
     * @return SimpleXMLElement - Parent 
     */
    public static function appendToParent(\SimpleXMLElement $parent, \SimpleXMLElement $child)
    {
        simplexml_import_xml($parent, static::stripDeclaration($child->saveXml()));
        return $parent;
    }
    
    /**
     * stripDeclaration
     * 
     * Strings an XML Document Declaration from the top of the xml string
     */
    public static function stripDeclaration($xmlString)
    {
        return str_replace('<?xml version="1.0"?>'."\n", '', $xmlString);
    }
    
    /**
     * wrapCDATA
     * 
     * Wraps a string with <![CDATA[ ]]>
     */
    public static function wrapCDATA($string)
    {
        return sprintf('<![CDATA[%s]]>', $xmlString);
    }
}