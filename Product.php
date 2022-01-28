<?php
class Product {
    // ATTRIBUTES
    public $name;
    private $price;
    private $code;
    public $genre;

    // METHODS
    public function __construct($_name, $_price) {
        $this->name = $_name;
        $this->price = $_price;
    }
    public function generateSetCode() {
        $randomNumber = rand(100, 999);
        $this->code = strtoupper($this->name[0] . $this->name[1] . $this->name[2] . $randomNumber);
    }
    public function getPrice() {
        return $this->price;
    }
    public function getCode() {
        return $this->code;
    }
}
?>