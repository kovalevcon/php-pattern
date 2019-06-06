<?php
declare(strict_types=1);
namespace Models;

/**
 * Class BookProductChild
 *
 * @package Models
 */
class BookProductChild extends ShopProductParent
{
    /** @var int $numPages */
    private $numPages;

    /**
     * BookProductChild constructor.
     *
     * @param string $title
     * @param string $firstName
     * @param string $mainName
     * @param float  $price
     * @param float  $numPages
     */
    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float $price,
        float $numPages
    ) {
        parent::__construct($title, $firstName, $mainName, $price);
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
        return parent::getSummaryLine() .": {$this->numPages} pages.";
    }
}
