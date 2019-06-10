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
    private $title;
    /** @var string $producerMainName */
    private $producerMainName;
    /** @var string $producerFistName */
    private $producerFistName;
    /** @var float $price */
    protected $price = 0;
    /** @var float $discount */
    private $discount = 0;
    /** @var int $id */
    private $id = 0;

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
     * Setter for ID attribute
     *
     * @param int $id
     * @return void
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Getter for title attribute
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Getter for producerMainName attribute
     *
     * @return string
     */
    public function getProducerMainName(): string
    {
        return $this->producerMainName;
    }

    /**
     * Getter for producerFistName attribute
     *
     * @return string
     */
    public function getProducerFistName(): string
    {
        return $this->producerFistName;
    }

    /**
     * Getter for price with discount
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price - $this->discount;
    }

    /**
     * Setter for discount attribute
     *
     * @param float $num
     * @return void
     */
    public function setDiscount(float $num): void
    {
        $this->discount = $num;
    }

    /**
     * Getter for discount attribute
     *
     * @return float
     */
    public function getDiscount(): float
    {
        return $this->discount;
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
}
