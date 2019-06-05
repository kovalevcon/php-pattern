<?php
declare(strict_types=1);
namespace Models;

/**
 * Class CDProduct
 *
 * @package Models
 */
class CDProduct
{
    /** @var float $playLength */
    public $playLength;
    /** @var string $title */
    public $title;
    /** @var string $producerMainName */
    public $producerMainName;
    /** @var string $producerFirstName */
    public $producerFirstName;
    /** @var float $price */
    public $price;

    /**
     * CDProduct constructor.
     *
     * @param string $title
     * @param string $firstName
     * @param string $mainName
     * @param float  $price
     * @param float  $playLength
     */
    public function __construct(string $title, string $firstName, string $mainName, float $price, float $playLength)
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
        $this->playLength = $playLength;
    }

    /**
     * Get play length
     *
     * @return float
     */
    public function getPlayLength(): float
    {
        return $this->playLength;
    }

    /**
     * Get summary line
     *
     * @return string
     */
    public function getSummaryLine(): string
    {
        return "{$this->title} ( {$this->producerMainName}, {$this->producerFirstName} )"
            . ": Play length - {$this->playLength}";
    }

    /**
     * Get producer full name
     *
     * @return string
     */
    public function getProducer(): string
    {
        return "{$this->producerFirstName} {$this->producerMainName}";
    }
}
