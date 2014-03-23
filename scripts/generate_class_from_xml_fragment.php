<?php

require_once(dirname(__FILE__).'/functions.php');

if(!isset($argv[1]) || !isset($argv[2])) {
    print_line(PHP_EOL.'Usage:');
    print_line("\t".'php '.$_SERVER['SCRIPT_NAME'].' /path/to/fragment.xml ClassName');
    print_line("\t".'php '.$_SERVER['SCRIPT_NAME'].' "<XML></XML>" ClassName', true);
}


$sourceXml = $argv[1];
$targetClass = $argv[2];


$targetDir = dirname(__FILE__);//.'/../src/Miva/Provisioning/Builder/Fragment';

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


$template = str_replace(array('{name}','{properties}','{methods}','{example_xml}'), array($targetClass, $properties, $methods, $xml->saveXML()),
    file_get_contents(dirname(__FILE__).'/generate_class_from_xml_fragment_class_template.php.template')
);

file_put_contents($targetDir.'/'.$targetClass.'.php', $template);

