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

use Miva\Version;

/**
 * XmlHelper
 *
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
class XmlHelper
{
    
    /**
     * Insert SimpleXMLElement into SimpleXMLElement
     *
     * @param SimpleXMLElement $parent
     * @param SimpleXMLElement $child
     * @param bool $before
     * @return bool SimpleXMLElement added
     * @see http://stackoverflow.com/questions/767327/in-simplexml-how-can-i-add-an-existing-simplexmlelement-as-a-child-element
     */
    public static function appendToParent(\SimpleXMLElement $parent, \SimpleXMLElement $child, $before = false)
    {
        // check if there is something to add
        if ($child[0] == NULL) {
            return true;
        }
    
        // if it is a list of SimpleXMLElements default to the first one
        $child = $child[0];
    
        // insert attribute
        if ($child->xpath('.') != array($child)) {
            $parent[$child->getName()] = (string)$child;
            return true;
        }
    
        $xml = $child->asXML();
    
        // remove the XML declaration on document elements
        if ($child->xpath('/*') == array($child)) {
            $pos = strpos($xml, "\n");
            $xml = substr($xml, $pos + 1);
        }
    
        return static::simplexml_import_xml($parent, $xml, $before);
    }

    /**
     * Insert XML into a SimpleXMLElement
     *
     * @param SimpleXMLElement $parent
     * @param string $xml
     * @param bool $before
     * @return bool XML string added
     * @see http://stackoverflow.com/questions/767327/in-simplexml-how-can-i-add-an-existing-simplexmlelement-as-a-child-element
     */
    public static function appendStringToParent(\SimpleXMLElement $parent, $xml, $before = false)
    {
        $xml = (string)$xml;
    
        // check if there is something to add
        if ($nodata = !strlen($xml) or $parent[0] == NULL) {
            return $nodata;
        }
    
        // add the XML
        $node     = dom_import_simplexml($parent);
        $fragment = $node->ownerDocument->createDocumentFragment();
        $fragment->appendXML($xml);
    
        if ($before) {
            return (bool)$node->parentNode->insertBefore($fragment, $node);
        }
    
        return (bool)$node->appendChild($fragment);
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