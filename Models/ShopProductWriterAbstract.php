<?php
declare(strict_types=1);
namespace Models;

abstract class ShopProductWriterAbstract
{
    /** @var array $products */
    public $products = [];

    /**
     * Add product to array
     *
     * @param \Models\ShopProductParent $shopProduct
     * @return void
     */
    public function addProduct(ShopProductParent $shopProduct): void
    {
        $this->products[] = $shopProduct;
    }


    /**
     * Write info about Product
     *
     * @return void
     */
    abstract public function write() : void;
}
