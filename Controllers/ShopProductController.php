<?php
namespace Controllers;

use Models\ShopProduct;

class ShopProductController
{
    public function index()
    {
        /** @var ShopProduct $product */
        $product = new ShopProduct;
        $product->title = "Собачье сердце";
        $product->productMainName = "Булгаков";
        $product->productFistName = "Михаил";
        $product->price = 5.99;

        print "Автор: {$product->getProducer()}\n";
    }
}