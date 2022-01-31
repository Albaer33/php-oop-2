<?php
require_once __DIR__ . '/Product.php';

class User {
    // ATTRIBUTES
    public $name;
    public $lastname;
    public $email;
    public $password;
    // array di oggetti contenente i prodotti che lo specifico user vuole acquistare
    public $basket = [];

    // METHODS
    public function __construct($_name, $_lastname, $_email) {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
    }
    public function getFullName() {
        return $this->name . ' ' . $this->lastname;
    }
    public function addProduct($product) {
        $this->basket[] = $product;
    }
    public function getBasket() {
        return $this->basket;
    }
}
?>