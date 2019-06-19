<?php
declare(strict_types=1);
namespace Traits;

/**
 * Trait PriceUtilitiesTrait
 *
 * @package Traits
 */
trait PriceUtilitiesTrait
{
    /** @var int $taxRate */
    private $taxRate = 17;

    /**
     * Calculate tax price
     *
     * @param $price
     * @return float|int
     */
    public function calculateTax($price)
    {
        return ($this->taxRate / 100) * $price;
    }
}
