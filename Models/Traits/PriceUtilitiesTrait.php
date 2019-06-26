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
    /**
     * Calculate tax price
     *
     * @param float|int $price
     * @return float|int
     */
    public function calculateTax($price)
    {
        return ($this->getTaxRate() / 100) * $price;
    }

    /**
     * Get tax rate
     *
     * @return float|int
     */
    abstract public function getTaxRate();
}
