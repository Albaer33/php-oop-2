<?php
class User {
    // ATTRIBUTES
    public $name;
    public $lastname;
    public $email;
    // array di oggetti contenente i prodotti che lo specifico user vuole acquistare
    public $basket = [];

    // METHODS
    public function __constructor($_name, $_lastname, $_email) {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
    }
    public function addProduct($product) {
        $this->basket[] = $product;
    }
    public function getBasket() {
        return $this->basket;
    }
}
?>