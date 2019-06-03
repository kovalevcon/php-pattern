<?php
namespace Controllers;

use Models\ShopProduct;

class ShopProductController
{
    public function index()
    {
        /** @var ShopProduct $product */
        $product = new ShopProduct("Собачье сердце","Михаил","Булгаков", 5.99);
        print "Автор: {$product->getProducer()}\n";
    }
}