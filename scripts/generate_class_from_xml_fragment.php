<?php

if(!isset($argv[1]) || !isset($argv[2])) {
    print_line(PHP_EOL.'Usage: php script.php "<XML></XML>" ClassName'.PHP_EOL, true);
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
    
    $methods .= generate_method($name, $camelName, is_numeric((string) $child->__toString()) ? 'int' : 'string');
    $properties .= generate_property($camelName, is_numeric((string) $child->__toString()) ? 'int' : 'string');
    
    
}


$template = str_replace(array('{name}','{properties}','{methods}','{example_xml}'), array($targetClass, $properties, $methods, $xml->saveXML()),
    file_get_contents(dirname(__FILE__).'/generate_class_from_xml_fragment_class_template.php.template')
);

file_put_contents($targetDir.'/'.$targetClass.'.php', $template);

/**
 * 
 */
function generate_property($variableName, $type = 'string') {
    return str_replace(array('{variableName}', '{type}'), array($variableName, $type), '
    /** @var {type} */
    protected ${variableName};
    ');
}

/**
 * 
 */
function generate_method($functionName, $variableName, $type = 'string') {
    return str_replace(
        array('{functionName}','{variableName}','{type}'), 
        array($functionName, $variableName, $type), '
    /**
     * get{functionName}
     *
     * @return {type}
    */
    public function get{functionName}()
    {
        return $this->{variableName};
    }
    
    /**
     * set{functionName}
     *
     * @param {type} ${variableName}
     *
     * @return self
    */
    public function set{functionName}(${variableName})
    {
        $this->{variableName} = ${variableName};
        return $this;
    }
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
