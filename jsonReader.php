<?php

class JsonReader {
    private $config;
    private $data = array();
    
    public function __construct($config) {
        $this->config = $config;
        $this->readJson();
    }
    
    public function getData() {
        return $this->data;
    }
    
    public function addRow($row) {
        $this->data[] = $row;
        file_put_contents($this->config['dbPath'], json_encode($this->data));
        
        return $this;
    }
    
    private function readJson() {
        $fileContent = file_get_contents($this->config['dbPath']);
        if (! empty($fileContent)) {
            $this->data = json_decode($fileContent, true);
        }
    }
}