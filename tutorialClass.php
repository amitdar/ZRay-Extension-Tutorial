<?php

include_once 'database.php';
include_once 'user.php';

class Tutorial {
    
    private $config = array();
    
    public function __construct() {
        include_once 'config.php';
        $this->config = $config;
    }
    
    public function getUsers($limit = 5) {
        $result = $this->getDbAdapter()->getData();
        
        $users = array();
        foreach($result as $row) {
            $users[] = new User($row);
        }
        
        return $users;
    }
    
    public function addUser($params) {
        $this->getDbAdapter()->addRow($params);
    }
    
    public function loadWidgets() {
        $widgets = array();
        foreach ($this->config['widgets'] as $widget) {
            $this->loadWidget($widget);
        }
        return $widgets;
    }
    
    private function loadWidget($name) {
        $path = __DIR__ . DIRECTORY_SEPARATOR . 'widgets' . DIRECTORY_SEPARATOR . $name . '.php';
        if (file_exists($path)) {
            include_once $path;
        }
    }
    
    private function getDbAdapter() {
        return Database::getInstance($this->config)->getConnection();
    }
}