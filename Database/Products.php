<?php
namespace Database;

use SQLite3;

/**
 * Class Products
 *
 * @package Database
 */
class Products extends SQLite3
{
    /**
     * Products constructor.
     */
    public function __construct()
    {
        parent::__construct(__DIR__ . '/../Database/products.db');
    }

    /**
     * Create `products` table
     *
     * @return void
     */
    public function createTable(): void
    {
        $sql = <<<EOF
        CREATE TABLE products (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            type TEXT,
            firstname TEXT,
            mainname TEXT,
            title TEXT,
            price FLOAT,
            numpages INT,
            playlength FLOAT,
            discount FLOAT
        )
EOF;
        error_reporting(E_ERROR | E_PARSE);
        /** @var bool $result */
        $result = $this->exec($sql);
        if ($result) {
            print "Table `products` created successfully\n";
        } elseif ($this->lastErrorMsg() === 'table products already exists') {
            print "Table `products` already exists\n";
        } else {
            print "Error while creating `products` table: {$this->lastErrorMsg()}\n";
        }
    }
}
