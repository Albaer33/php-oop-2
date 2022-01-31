<?php
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/UserCredentials.php';

class GoldPremiumUser extends User {
    use UserCredentials;
    private $shipping_price = 0;
    private $discount = 0.2;
    
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
        return $total;
    }
}
?>