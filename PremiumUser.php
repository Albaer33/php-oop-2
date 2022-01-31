<?php
require_once __DIR__ . '/User.php';

class PremiumUser extends User {
    private $shipping_price = 5;
    private $discount = 0.1;

    public function getShippingPrice() {
        return $this->shipping_price;
    }
    private function getDiscount($import) {
        // riceve in input l 'importo del carrello di un utente, detrae la percentuale di sconto dall'importo
        // restituisce l' importo meno lo sconto in euro
        $discount_euro = $import * $this->discount;
        $final_price = $import - $discount_euro;
        return $final_price;
    }
    public function getTotalPrice() {
        $total = 0;
        foreach($this->basket as $product) {
            $total += $product->getPrice();
        }
        $total = $this->getDiscount($total);
        return $total + $this->shipping_price;
    }
}
?>