<?php
/**
 * This file is part of the Miva PHP Provision package.
 *
 * (c) Gassan Idriss <gidriss@mivamerchant.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 * 
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/
require_once(dirname(__FILE__).'/functions.php');

if(!isset($argv[1]) || !isset($argv[2])) {
    print_line(PHP_EOL.'Usage:');
    print_line("\t".'php '.$_SERVER['SCRIPT_NAME'].' /path/to/fragment.xml ClassName [/out/dir]');
    print_line("\t".'php '.$_SERVER['SCRIPT_NAME'].' "<XML></XML>" ClassName [/out/dir]', true);
}


$sourceXml = $argv[1];
$targetClass = $argv[2];


$targetDir = isset($argv[3]) ? $argv[3] : dirname(__FILE__);

if(!is_dir($targetDir)) {
    print_line(spritnf('Dir %s Not Found', $targetDir), true);
}

if(file_exists($sourceXml)){
    $xml = new \SimpleXMLElement(file_get_contents($sourceXml));
} else {
    $xml = new \SimpleXMLElement($sourceXml);
}


$methods = '';
$properties = '';
foreach($xml->children() as $child) {
    print_line($child->getName());
    
    $name = $child->getName();
    $camelName = $name;
    $camelName[0] = strtolower($camelName[0]);
    
    if(count($child->children())) {
        $variableType = 'array';
    } else {
        $value = (string) $child->__toString();
        if ($value == 'Yes' || $value == 'No') {
           $variableType = 'boolean'; 
        } else if(is_float($value)) {
            $variableType = 'float';
        } else if(is_numeric($value)) {
            $variableType = 'int';
        } else {
            $variableType = 'string';
        }
    }
    
    $methods .= generate_method($name, $camelName, $variableType);
    $properties .= generate_property($camelName, $variableType);
    
}


$template = replace_template(
    dirname(__FILE__).'/generate_class_from_xml_fragment_class_template.php.template',
    array(
        '{name}' => $targetClass,
        '{properties}' => $properties,
        '{methods}' => $methods,
        '{example_xml}' => $xml->saveXML(),
    )
);


file_put_contents($targetDir.'/'.$targetClass.'.php', $template);

