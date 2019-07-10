<?php
declare(strict_types=1);
namespace Controllers;

use Models\AddressInterception;

/**
 * Class AddressController
 *
 * @package Controllers
 */
class AddressController
{
    /**
     * Get addresses
     *
     * @return void
     */
    public function getAddresses(): void
    {
        /** @var AddressInterception $address */
        $address = new AddressInterception("441b Bakers Street");
        print "Address 1: {$address->streetAddress}";

        $address = new AddressInterception(15, "Albert Mews");
        print "Address 2: {$address->streetAddress}";

        $address->streetAddress = "34, West 24th Avenue";
        print "Address 3: {$address->streetAddress}";
    }
}
