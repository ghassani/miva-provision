<?php
/*
* This file is part of the Miva PHP Provision package.
*
* (c) Gassan Idriss <gidriss@miva.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Miva\Provisioning\Builder\Helper;

use Miva\Version;
use Miva\Provisioning\Builder\SimpleXMLElement;

/**
 * XmlHelper
 *
 * @author Gassan Idriss <gidriss@miva.com>
*/
class XmlHelper
{
    
    /**
     * appendToParent
     * 
     * @param SimpleXMLElement $parent
     * @param SimpleXMLElement $child
     * 
     * @return void
     */
    public static function appendToParent(\SimpleXMLElement $parent, \SimpleXMLElement $child)
    {
        $methodCall = false;
        $attributes = array();
        foreach ($child->attributes() as $key => $value) {
            $value = (string) $value;
            if ($key === 'method-call' && method_exists($child, $value)){
                $methodCall = $value;
                continue;
            }
            $attributes[$key] = $value;
        }
        
        if (false !== $methodCall && !$child->count()) {
            $childNode = $parent->addChild($child->getName());
            $childNode->$methodCall($child->__toString());            
            
        } else {
            $childNode = $parent->addChild($child->getName(), !$child->count() ? (string) $child : null);
        }
        
        foreach($attributes as $key => $value) {
            $childNode->addAttribute($key, $value);
        }
        
        if ($child->count()) {
            foreach ($child->children() as $_child) {
                static::appendToParent($childNode, $_child);
            }
        }
    }
    
    /**
     * appendStringToParent
     * 
     * @param SimpleXMLElement $parent
     * @param string $childXmlString - Valid XML
     * 
     * @return void
     */
    public static function appendStringToParent(\SimpleXMLElement $parent, $childXmlString)
    {
        $child = new SimpleXMLElement(static::stripDeclaration($childXmlString));
        return static::appendToParent($parent, $child);
    }
    
    /**
     * appendArrayToParent
     * 
     * @param SimpleXMLElement $parent
     * @param array $childArray
     * 
     * @return void
     */
    public static function appendArrayToParent(\SimpleXMLElement $parent, array $childArray)
    {
        $recursiveBuilder = function($xmlObject, $field, $value) use (&$recursiveBuilder) {
            if (is_array($value)) {
                $xmlObjectA = $xmlObject->addChild($field);
                foreach ($value as $_field => $_value) {
                    $recursiveBuilder($xmlObjectA, $_field, $_value);
                }
            } else {
                $xmlObject->addChild($field, $value);
            }
        };
        
        foreach ($childArray as $field => $value) {
            $recursiveBuilder($parent, $field, $value);
        }
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
    public static function addCDATA(\SimpleXMLElement $element, $string)
    {
        $node = dom_import_simplexml($element); 
        $no   = $node->ownerDocument; 
        $node->appendChild($no->createCDATASection($string)); 
    }

    /**
     * dateTimeToXml
     *
     * Covnerts a DateTime object to Miva Provisioning XML date time format
     *
     * @param \SimpleXMLElement $element
     * @param \DateTime $dateTime
     */
    public static function dateTimeToXml(\SimpleXMLElement $element, \DateTime $dateTime)
    {
        $element->addChild('Day',    $dateTime->format('d'));
        $element->addChild('Month',  $dateTime->format('m'));
        $element->addChild('Year',   $dateTime->format('Y'));
        $element->addChild('Minute', $dateTime->format('i'));
        $element->addChild('Hour',   $dateTime->format('h'));
    }
}