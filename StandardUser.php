<?php
require_once __DIR__ . '/User.php';

class StandardUser extends User {
    private $shipping_price = 10;

    public function getShippingPrice() {
        return $this->shipping_price;
    }
}
?>