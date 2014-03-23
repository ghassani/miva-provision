<?php

/**
 * 
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
 * 
 */
function generate_method($functionName, $variableName, $type = 'string') {
    $typeHint = '';
    
    if($type == 'array') {
        $typeHint = 'array ';
    }
    
    if($type == 'boolean') {
        $typeHint = 'boolean ';
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
