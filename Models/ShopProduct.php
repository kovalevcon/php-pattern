<?php
namespace Models;

/**
 * Class ShopProduct
 *
 * @package Models
 */
class ShopProduct
{
    /** @var string $title */
    public $title = "Стандартный товар";
    /** @var string $productMainName */
    public $productMainName = "Фамилия автора";
    /** @var string $productFistName */
    public $productFistName = "Имя автора";
    /** @var float $price */
    public $price = 0;

    /**
     * @return string
     */
    public function getProducer(): string
    {
        return "{$this->productFistName} {$this->productMainName}";
    }
}
