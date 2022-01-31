<?php
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/UserCredentials.php';

class StandardUser extends User {
    use UserCredentials;
    private $shipping_price = 10;

    public function getShippingPrice() {
        return $this->shipping_price;
    }
    public function getTotalPrice() {
        $total = 0;
        foreach($this->basket as $product) {
            $total += $product->getPrice();
        }
        return $total + $this->shipping_price;
    }
}
?>