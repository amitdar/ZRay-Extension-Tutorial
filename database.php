<?php

include_once 'jsonReader.php';

class Database {
    private $_connection;
    private static $_instance;
    
    /*
     Get an instance of the Database
     @return Instance
     */
    public static function getInstance($config) {
        if(!self::$_instance) { // If no instance then make one
            self::$_instance = new self($config);
        }
        return self::$_instance;
    }

    // Constructor
    private function __construct($config) {
        $this->_connection = new JsonReader($config);
    }

    // Magic method clone is empty to prevent duplication of connection
    private function __clone() { }

    // Get mysqli connection
    public function getConnection() {
        return $this->_connection;
    }
}