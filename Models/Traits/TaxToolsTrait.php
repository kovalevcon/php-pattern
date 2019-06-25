<?php
declare(strict_types=1);
namespace Traits;

/**
 * Trait TaxToolsTrait
 *
 * @package Traits
 */
trait TaxToolsTrait
{
    /**
     * Calculate tax price
     *
     * @param float|int $price
     * @return float|int
     */
    public function calculateTax($price)
    {
        return 222;
    }
}
