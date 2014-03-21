<?php

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
