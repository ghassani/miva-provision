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
 * /scripts functions
 * 
 * @author Gassan Idriss <gidriss@mivamerchant.com>
*/

/**
 * function generate_property
 * 
 * Generates a class property declaration
 * 
 * @param string $variableName
 * @param string $type
 * 
 * @return string
*/
function generate_property($variableName, $type = 'string') {
    $variableInitializer = '';
    
    if($type == 'array') {
        $variableInitializer = ' = array()';
    }
    
    if($type == 'boolean') {
        $variableInitializer = ' = false';
    }
    
    return str_replace(array('{variableName}', '{type}', '{variableInitializer}'), array($variableName, $type, $variableInitializer), '
    /** @var {type} */
    protected ${variableName}{variableInitializer};
    ');
}

/**
 * generate_method
 * 
 * Generates a class set and get method
 * 
 * @param string $functionName
 * @param string $variableName
 * @param string $type
 * 
 * @return string
*/
function generate_method($functionName, $variableName, $type = 'string') {
    $typeHint = '';
    
    if($type == 'array') {
        $typeHint = 'array ';
    }
        
    return str_replace(
        array('{functionName}','{variableName}','{type}', '{typehint}'), 
        array($functionName, $variableName, $type, $typeHint), '
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
    public function set{functionName}({typehint}${variableName})
    {
        $this->{variableName} = ${variableName};
        return $this;
    }
    ');
}

/**
 * generate_setter
 * 
 * Generates a class setter for use in tests
 * 
 * @param string $functionName
 * @param string $variableName
 * 
 * @return string
*/
function generate_setter($functionName, $variableName) {
    return str_replace(
        array('{functionName}','{variableName}'), 
        array($functionName, $variableName), '
        ->set{functionName}(\'{functionName}\')
    ');
}

/**
 * generate_assertion
 * 
 * Generates an assertion for a class property
 * 
 * @param string $functionName
 * @param string $variableName
 * @param string $type
 * 
 * @return string
*/
function generate_assertion($functionName, $variableName, $type= 'string') {
    return str_replace(
        array('{functionName}','{variableName}'), 
        array($functionName, $variableName), '
        $this->assertEquals($fragment->get{functionName}(), \'{functionName}\');
    ');
    
}

/**
 * function replace_template
 * 
 * @param string $templateFile - Full or Relative Path
 * @param array $replacements - Keys as tokens, values as replacements
 * 
 * @return string 
*/
function replace_template($templateFile, $replacements) {
    return str_replace(array_keys($replacements), array_values($replacements), file_get_contents($templateFile));
}

/**
 * print_line
 * 
 * Prints a line to the console
 * 
 * @param string $message
 * @param bool $exit
 * 
 * @return void
*/
function print_line($message, $exit = false) {
    echo $message.PHP_EOL;
    if (true === $exit) {
        exit();
    }
}
