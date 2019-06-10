<?php
declare(strict_types=1);
namespace Controllers;

use Database\Products;

/**
 * Class ProductDbController
 *
 * @package Controllers
 */
class ProductDbController
{
    /**
     * Check connection to DB `products`
     *
     * @return void
     */
    public function checkConnection(): void
    {
        /** @var Products $dbConnect */
        $dbConnect = new Products;
        print($dbConnect ?
            "Success open connect to DB `products`\n"
            : "Error while opening connect ot DB `products`: {$dbConnect->lastErrorMsg()}\n"
        );
    }

    /**
     * Create `products` table in DB
     *
     * @return void
     */
    public function createTable(): void
    {
        /** @var Products $dbConnect */
        $dbConnect = new Products;
        $dbConnect ?
            $dbConnect->createTable() :
            print "Error while opening connect ot DB `products`: {$dbConnect->lastErrorMsg()}\n";
    }
}
