<?php
declare(strict_types=1);
namespace Models;

/**
 * Class ShopProductParent
 *
 * @package Models
 */
class ShopProductParent
{
    /** @var string $title */
    public $title = "Стандартный товар";
    /** @var string $producerMainName */
    public $producerMainName = "Фамилия автора";
    /** @var string $producerFistName */
    public $producerFistName = "Имя автора";
    /** @var float $price */
    protected $price = 0;
    /** @var float $discount */
    public $discount = 0;

    /**
     * ShopProductParent constructor.
     *
     * @param string $title
     * @param string $firstName
     * @param string $mainName
     * @param float  $price
     */
    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float $price
    ) {
        $this->title = $title;
        $this->producerFistName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    /**
     * Get producer full name
     *
     * @return string
     */
    public function getProducer(): string
    {
        return "{$this->producerFistName} {$this->producerMainName}";
    }

    /**
     * Get summary line
     *
     * @return string
     */
    public function getSummaryLine(): string
    {
        return "{$this->title} ( {$this->producerMainName}, {$this->producerFistName} )";
    }

    /**
     * Set discount value
     *
     * @param float $num
     * @return void
     */
    public function setDiscount(float $num): void
    {
        $this->discount = $num;
    }

    /**
     * Get price with discount
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price - $this->discount;
    }
}
