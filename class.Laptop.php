<?php
class Laptop {
    public $name;
    public $type;
    public $price;
    public $path;
    #constructor
    public function __construct($name, $type, $price, $path) {
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->path = $path;
    }
    # getters
    public function getName() {return $this->name;}
    public function getType() {return $this->type;}
    public function getPrice() {return $this->price;}
    public function getPath() {return $this->path;}
    # setters
    public function setName($name) {$this->name = $name;}
    public function setType($type) {$this->type = $type;}
    public function setPrice($price) {$this->price = $price;}
    public function setPath($path) {$this->path = $path;}
}

