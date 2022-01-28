<?php
require_once __DIR__ . '/User.php';

class PremiumUser extends User {
    private $shipping_price = 5;
    private $discount = 10;

    public function getShippingPrice() {
        return $this->shipping_price;
    }
    public function getDiscount() {
        return $discount/100;
    }
}
?>