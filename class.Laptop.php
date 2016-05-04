<?php
class Laptop {
    public $name;
    public $type;
    public $price;
    public $path;
    # CONSTRUCTOR
    public function __construct($name, $type, $price, $path) {
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->path = $path;
    }
    # CONSTRUCTOR
    public function getName() {return $this->name;}
    public function getType() {return $this->type;}
    public function getPrice() {return $this->price;}
    public function getPath() {return $this->path;}
}

