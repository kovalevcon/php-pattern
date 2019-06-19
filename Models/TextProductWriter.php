<?php
declare(strict_types=1);
namespace Models;

/**
 * Class TextProductWriter
 *
 * @package Models
 */
class TextProductWriter extends ShopProductWriterAbstract
{
    /**
     * @inheritDoc
     */
    public function write(): void
    {
        $str = "Products:\n";
        foreach ($this->products as $product) {
            /** @var \Models\ShopProductParent $product */
            $str .= "{$product->getSummaryLine()}\n";
        }
        print $str;
    }
}
