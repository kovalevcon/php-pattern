<?php
declare(strict_types=1);
namespace Controllers;

use Models\BookProduct;
use Models\BookProductChild;
use Models\CDProduct;
use Models\CDProductChild;
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
        $product = new ShopProduct("Heart of a Dog", "Mikhail", "Bulgakov", 5.99);
        print "Author: {$product->getProducer()}\n";
    }

    /**
     * Show product writer info
     *
     * @return void
     */
    public function showProductWriter(): void
    {
        /** @var ShopProduct $product */
        $product = new ShopProduct("Heart of a Dog", "Mikhail", "Bulgakov", 5.99);
        /** @var ShopProductWriter $writer */
        $writer = new ShopProductWriter;
        $writer->write($product);
    }

    /**
     * Show book and cd info
     *
     * @return void
     */
    public function showCDAndBookProduct(): void
    {
        /** @var BookProduct $book */
        $book = new BookProduct("Heart of a Dog", "Mikhail", "Bulgakov", 5.99, 300);
        /** @var CDProduct $cdProduct */
        $cdProduct = new CDProduct("Missing", "Group", "DDT", 10.99, 60.33);
        /** @var ShopProductWriter $writer */
        $writer = new ShopProductWriter;
        $writer->write($book);
        $writer->write($cdProduct);
    }

    /**
     * Show book and cd info uses inheritance models
     *
     * @return void
     */
    public function showCDAndBookInheritanceProduct(): void
    {
        /** @var BookProductChild $book */
        $book = new BookProductChild("Heart of a Dog", "Mikhail", "Bulgakov", 5.99, 300);
        /** @var CDProductChild $cdProduct */
        $cdProduct = new CDProductChild("Missing", "Group", "DDT", 10.99, 60.33);
        print "{$book->getSummaryLine()}\n";
        print "{$cdProduct->getSummaryLine()} \n";
        $cdProduct->setDiscount(1.99);
        print "Price - {$cdProduct->getPrice()}";
    }
}
