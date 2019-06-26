<?php
declare(strict_types=1);
namespace Models;

use Traits\PriceUtilitiesTrait;

/**
 * Class UtilityService
 *
 * @package Models
 */
class UtilityService
{
    use PriceUtilitiesTrait {
        PriceUtilitiesTrait::calculateTax as private;
//        TaxToolsTrait::calculateTax insteadof PriceUtilitiesTrait;
//        PriceUtilitiesTrait::calculateTax as basicTax;
    }

    /** @var int|float $price */
    private $price;

    /**
     * UtilityService constructor.
     *
     * @param float|int $price
     */
    public function __construct($price)
    {
        $this->price = $price;
    }

    /**
     * @inheritDoc
     */
    public function getTaxRate()
    {
        return 17;
    }

    /**
     * Get final price
     *
     * @return float|int
     */
    public function getFinalPrice()
    {
        return $this->price + $this->calculateTax($this->price);
    }
}
