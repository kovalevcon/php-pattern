<?php
declare(strict_types=1);
namespace Models;

/**
 * Class CDProductChild
 *
 * @package Models
 */
class CDProductChild extends ShopProductParent
{
    /** @var float $playLength */
    public $playLength;

    /**
     * CDProductChild constructor.
     *
     * @param string $title
     * @param string $firstName
     * @param string $mainName
     * @param float  $price
     * @param float  $playLength
     */
    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float $price,
        float $playLength
    ) {
        parent::__construct($title, $firstName, $mainName, $price);
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
        return parent::getSummaryLine() . ": Play length - {$this->playLength}";
    }
}
