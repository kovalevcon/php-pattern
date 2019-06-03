<?php
namespace Models;

/**
 * Class ShopProductWriter
 *
 * @package Models
 */
class ShopProductWriter
{
    /**
     * Get writer info
     *
     * @param \Models\ShopProduct $shopProduct
     * @return void
     */
    public function write(ShopProduct $shopProduct): void
    {
        $str = "{$shopProduct->title}: "
            . $shopProduct->getProducer()
            . " ({$shopProduct->price})\n"
        ;
        print $str;
    }
}