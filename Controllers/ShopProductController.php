<?php
declare(strict_types=1);
namespace Controllers;

use Models\BookProduct;
use Models\BookProductChild;
use Models\CDProduct;
use Models\CDProductChild;
use Models\ShopProduct;
use Models\ShopProductWriter;
use Models\ShopProductWriterV2;
use Models\TextProductWriter;
use Models\XmlProductWriter;

/**
 * Class ShopProductController
 *
 * @package Controllers
 */
class ShopProductController
{
    /** @var ShopProduct $product */
    private $shopProduct;
    /** @var BookProduct $bookProduct */
    private $bookProduct;
    /** @var CDProduct $cdProduct */
    private $cdProduct;
    /** @var BookProductChild $bookProductChild */
    private $bookProductChild;
    /** @var CDProductChild $cdProductChild */
    private $cdProductChild;

    /** @var array $productAttributes */
    private $productAttributes = [
        'book' => [
            "Heart of a Dog", "Mikhail", "Bulgakov", 5.99
        ],
        'book_v2' => [
            "Heart of a Dog", "Mikhail", "Bulgakov", 5.99, 300
        ],
        'cd' => [
            "Missing", "Group", "DDT", 10.99, 60.33
        ]
    ];

    /**
     * ShopProductController constructor.
     */
    public function __construct()
    {
        $this->shopProduct = new ShopProduct(...$this->productAttributes['book']);
        $this->bookProduct = new BookProduct(...$this->productAttributes['book_v2']);
        $this->cdProduct = new CDProduct(...$this->productAttributes['cd']);
        $this->bookProductChild = new BookProductChild(...$this->productAttributes['book_v2']);
        $this->cdProductChild = new CDProductChild(...$this->productAttributes['cd']);
    }

    /**
     * Show product info
     *
     * @return void
     */
    public function showProduct(): void
    {
        print "Author: {$this->shopProduct->getProducer()}\n";
    }

    /**
     * Show product writer info
     *
     * @return void
     */
    public function showProductWriter(): void
    {
        /** @var ShopProductWriter $writer */
        $writer = new ShopProductWriter;
        $writer->write($this->shopProduct);
    }

    /**
     * Show book and cd info
     *
     * @return void
     */
    public function showCDAndBookProduct(): void
    {
        /** @var ShopProductWriter $writer */
        $writer = new ShopProductWriter;
        $writer->write($this->bookProduct);
        $writer->write($this->cdProduct);
    }

    /**
     * Show book and cd info uses inheritance models
     *
     * @return void
     */
    public function showCDAndBookInheritanceProduct(): void
    {
        print "{$this->bookProductChild->getSummaryLine()}\n";
        print "{$this->cdProductChild->getSummaryLine()} \n";
        $this->cdProductChild->setDiscount(1.99);
        print "Price - {$this->cdProductChild->getPrice()}";
    }

    /**
     * Show book and cd info uses inheritance models and writer model
     *
     * @return void
     */
    public function showCDAndBookInheritanceProductWriter(): void
    {
        /** @var ShopProductWriterV2 $writer */
        $writer = new ShopProductWriterV2;
        $writer->addProduct($this->bookProductChild);
        $writer->addProduct($this->cdProductChild);
        $writer->write();
    }

    /**
     * Show book and cd info uses TextProductWriter model
     *
     * @return void
     */
    public function showTextProductWriter(): void
    {
        /** @var TextProductWriter $writer */
        $writer = new TextProductWriter;
        $writer->addProduct($this->bookProductChild);
        $writer->addProduct($this->cdProductChild);
        $writer->write();
    }

    /**
     * Show book and cd info uses XmlProductWriter model
     *
     * @return void
     */
    public function showXMLProductWriter(): void
    {
        /** @var XmlProductWriter $writer */
        $writer = new XmlProductWriter;
        $writer->addProduct($this->bookProductChild);
        $writer->addProduct($this->cdProductChild);
        $writer->write();
    }

    /**
     * Show product calculate tax value
     *
     * @return void
     */
    public function showProductCalculateTax(): void
    {
        print "Calculate tax: {$this->bookProductChild->calculateTax(100)}\n";
    }

    /**
     * Show product generate ID
     *
     * @return void
     */
    public function showProductGenerateId(): void
    {
        print "Generated ID: {$this->bookProductChild->generateId()}\n";
    }
}
