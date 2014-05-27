<?php

class errorReporter {

    /**
     * Returns the *Singleton* instance of this class.
     *
     * @static var Singleton $instance The *error_reporter* instances of this class.
     *
     * @return Singleton The *error_reporter* instance.
     */
    public static function getInstance() {
        static $instance = null;
        if ( null === $instance ) {
            $instance = new static();
        }

        return $instance;
    }

    /**
     * Protected constructor to prevent creating a new instance of the
     * *Singleton* via the `new` operator from outside of this class.
     */
    private $_errors = array();

    protected function __construct() {
        $this->_errors = $error;
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

$obj = errorReporter::getInstance();
var_dump( $obj === Singleton::getInstance() );             // bool(true)