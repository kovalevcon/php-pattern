<?php
declare(strict_types=1);
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
     * @param \Models\ShopProduct|\Models\BookProduct|\Models\CDProduct $shopProduct
     * @return void
     */
    public function write($shopProduct): void
    {
        if (!($shopProduct instanceof CDProduct) &&
            !($shopProduct instanceof BookProduct) &&
            !($shopProduct instanceof ShopProduct)) {
            die('Send wrong type value');
        }

        print "{$shopProduct->title}: "
            . $shopProduct->getProducer()
            . " ({$shopProduct->price})\n"
        ;
    }
}
