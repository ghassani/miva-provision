<?php

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


$setters = '';
$assertions = '';
foreach($xml->children() as $child) {
    print_line($child->getName());
    
    $name = $child->getName();
    $camelName = $name;
    $camelName[0] = strtolower($camelName[0]);
    
    $setters .= generate_setter($name, $camelName);
    $assertions .= generate_assertion($name, $camelName);
    
    
}


$template = str_replace(array('{name}','{setters}','{assertions}','{expected_xml}'), array($targetClass, $setters, $assertions, $xml->saveXML()),
    file_get_contents(dirname(__FILE__).'/generate_test_from_xml_fragment_class_template.php.template')
);

file_put_contents($targetDir.'/'.$targetClass.'Test.php', $template);

/**
 * 
 */
function generate_setter($functionName, $variableName) {
    return str_replace(
        array('{functionName}','{variableName}'), 
        array($functionName, $variableName), '
        ->set{functionName}(\'{functionName}\')
    ');
}

/**
 * 
 */
function generate_assertion($functionName, $variableName) {
    return str_replace(
        array('{functionName}','{variableName}'), 
        array($functionName, $variableName), '
        $this->assertEquals($fragment->get{functionName}(), \'{functionName}\');
    ');
    
}

/**
 * 
 */
function print_line($message, $exit = false) {
    echo $message.PHP_EOL;
    if (true === $exit) {
        exit();
    }
}
