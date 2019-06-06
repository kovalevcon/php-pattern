<?php
declare(strict_types=1);
namespace Models;

/**
 * Class ShopProductWriterV2
 *
 * @package Models
 */
class ShopProductWriterV2
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
     * Get writer info
     *
     * @return void
     */
    public function write(): void
    {
        $str = '';
        foreach ($this->products as $product) {
            /** @var \Models\ShopProductParent $product */
            $str .= "{$product->title}: "
                . $product->getProducer()
                . " ({$product->getPrice()})\n";
        }
        print $str;
    }
}
