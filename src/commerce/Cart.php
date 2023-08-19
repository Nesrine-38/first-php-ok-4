<?php
namespace App\commerce;

class Cart {
    private array $products;

    public function __construct() {
        $this->products = array();
    }
 //product = classe et $product c'est la variable 
    public function addToCart(Product $product) {
        $this->products[] = $product;// ça c'est un push en php 
    }

    public function getTotal():float{
        $total = 0;
        foreach ($this->products as $item) {
            $total += $item->getPrice();
        }
        return $total;
    }

    public function Display():void{
        foreach ($this->products as $item) {
           $item->display();
        }
        echo "<p> Total: {$this->getTotal()}euro </p>";
    }
}

?>