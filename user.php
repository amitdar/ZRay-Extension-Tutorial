<?php

class User {
    private $name;
    private $last;
    private $city;
    private $gender; 

	public function __construct($data) {
        $this->setName($data['name']);
        $this->setLast($data['last']);
        $this->setCity($data['city']);
        $this->setGender($data['gender']);
    }
    
    /**
     * @return the $name
     */
    public function getName() {
        return $this->name;
    }
    
    /**
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }
    
	/**
     * @return the $last
     */
    public function getLast() {
        return $this->last;
    }

	/**
     * @param string $last
     */
    public function setLast($last) {
        $this->last = $last;
    }
    
	/**
     * @return the $city
     */
    public function getCity() {
        return $this->city;
    }

	/**
     * @return the $gender
     */
    public function getGender() {
        return $this->gender;
    }

	/**
     * @param field_type $city
     */
    public function setCity($city) {
        $this->city = $city;
    }

	/**
     * @param field_type $gender
     */
    public function setGender($gender) {
        $this->gender = $gender;
    }


    
    
}