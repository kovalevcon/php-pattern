<?php
namespace Controllers;

use Models\ShopProduct;
use Models\ShopProductWriter;

/**
 * Class ShopProductController
 *
 * @package Controllers
 */
class ShopProductController
{
    /**
     * Show product info
     *
     * @return void
     */
    public function showProduct(): void
    {
        /** @var ShopProduct $product */
        $product = new ShopProduct("Собачье сердце","Михаил","Булгаков", 5.99);
        print "Автор: {$product->getProducer()}\n";
    }

    /**
     * Show product writer info
     *
     * @return void
     */
    public function showProductWriter(): void
    {
        /** @var ShopProduct $product */
        $product = new ShopProduct("Собачье сердце","Михаил","Булгаков", 5.99);
        /** @var ShopProductWriter $writer */
        $writer = new ShopProductWriter;
        $writer->write($product);
    }
}