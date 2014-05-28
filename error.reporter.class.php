<?php

class errorReporter {
    
    protected static $instance = null;

    private $_errors = array();

    
    /**
     * Returns the *Singleton* instance of this class.
     *
     * @static var Singleton $instance The *error_reporter* instances of this class.
     *
     * @return Singleton The *error_reporter* instance.
     */
    public static function getInstance() {
        if (!isset(static::$instance)) {
            static::$instance = new static;
        }
        return static::$instance;
    }
    
    /**
     * Protected constructor to prevent creating a new instance of the
     * *Singleton* via the `new` operator from outside of this class.
     */
    protected function __construct() {
        //
    }

    /**
     * Private clone method to prevent cloning of the instance of the
     * *error_reporter* instance.
     *
     * @return void
     */
    private function __clone() {
        
    }

    /**
     * Private unserialize method to prevent unserializing of the *error_reporter*
     * instance.
     *
     * @return void
     */
    private function __wakeup() {
        
    }

}

$obj1 = errorReporter::getInstance();

$obj2 = errorReporter::getInstance();

echo '<h3>obj1<h3>';

var_dump($obj1);

echo '<h3>obj2</h3>';

var_dump($obj2;
