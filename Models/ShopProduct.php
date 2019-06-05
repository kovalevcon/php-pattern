<?php
declare(strict_types=1);
namespace Models;

/**
 * Class ShopProduct
 *
 * @package Models
 */
class ShopProduct
{
    /** @var string $title */
    public $title = "Standard product";
    /** @var string $productMainName */
    public $productMainName = "Main name author";
    /** @var string $productFistName */
    public $productFistName = "First name author";
    /** @var float $price */
    public $price = 0;

    /**
     * ShopProduct constructor.
     *
     * @param string $title
     * @param string $firstName
     * @param string $mainName
     * @param float  $price
     */
    public function __construct(string $title, string $firstName, string $mainName, float $price)
    {
        $this->title = $title;
        $this->productFistName = $firstName;
        $this->productMainName = $mainName;
        $this->price = $price;
    }

    /**
     * Get producer full name
     *
     * @return string
     */
    public function getProducer(): string
    {
        return "{$this->productFistName} {$this->productMainName}";
    }
}
