<?php
class Product {
    // ATTRIBUTES
    public $name;
    public $code;
    public $price;
    public $genre;

    // METHODS
    public function __construct($_name, $_price) {
        $this->name = $_name;
        $this->price = $_price . ' euro';
    }
    public static function generateSetCode() {
        $randomNumber = rand(100, 999);
        $this->code = $this->name[0] . $this->$name[1] . $this->$name[2] . $randomNumber;
    }
}
?>