<?php
declare(strict_types=1);
namespace Models;

/**
 * Class BookProduct
 *
 * @package Models
 */
class BookProduct
{
    /** @var int $numPages */
    public $numPages;
    /** @var string $title */
    public $title;
    /** @var string $producerMainName */
    public $producerMainName;
    /** @var string $producerFirstName */
    public $producerFirstName;
    /** @var float $price */
    public $price;

    /**
     * BookProduct constructor.
     *
     * @param string $title
     * @param string $firstName
     * @param string $mainName
     * @param float  $price
     * @param int    $numPages
     */
    public function __construct(string $title, string $firstName, string $mainName, float $price, int $numPages)
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
        $this->numPages = $numPages;
    }

    /**
     * Get number of pages
     *
     * @return int
     */
    public function getNumberOfPages(): int
    {
        return $this->numPages;
    }

    /**
     * Get summary line info
     *
     * @return string
     */
    public function getSummaryLine(): string
    {
        return "{$this->title} ( {$this->producerMainName}, {$this->producerFirstName} )"
            . ": {$this->numPages} pages.";
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
