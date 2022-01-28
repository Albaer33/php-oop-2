<?php
class Product {
    // ATTRIBUTES
    public $name;
    public $price;
    private $code;
    public $genre;

    // METHODS
    public function __construct($_name, $_price) {
        $this->name = $_name;
        $this->price = $_price . ' Euro';
    }
    public function generateSetCode() {
        $randomNumber = rand(100, 999);
        $this->code = strtoupper($this->name[0] . $this->name[1] . $this->name[2] . $randomNumber);
    }
}
?>