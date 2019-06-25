<?php
declare(strict_types=1);
namespace Models;

use Traits\{PriceUtilitiesTrait, TaxToolsTrait};

/**
 * Class UtilityService
 *
 * @package Models
 */
class UtilityService
{
    use PriceUtilitiesTrait, TaxToolsTrait {
        TaxToolsTrait::calculateTax insteadof PriceUtilitiesTrait;
        PriceUtilitiesTrait::calculateTax as basicTax;
    }
}
