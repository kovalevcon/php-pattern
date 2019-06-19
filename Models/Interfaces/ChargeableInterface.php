<?php
declare(strict_types=1);
namespace Interfaces;

/**
 * Interface ChargeableInterface
 *
 * @package Interfaces
 */
interface ChargeableInterface
{
    /**
     * Getter for price with discount
     *
     * @return float
     */
    public function getPrice(): float;
}
