<?php
require_once __DIR__ . '/User.php';

class GoldPremiumUser extends User {
    private $shipping_price = 0;
    private $discount = 20;

    public function getShippingPrice() {
        return $this->shipping_price;
    }
    public function getDiscount() {
        return $discount/100;
    }
}
?>