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
        if(is_int($_price)) {
            $this->price = $_price;
        }
        else {
            throw new Exception('il prezzo deve essere un numero');
        }
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