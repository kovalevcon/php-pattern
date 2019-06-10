<?php
declare(strict_types=1);
namespace Database;

use Models\BookProductChild;
use Models\CDProductChild;
use Models\ShopProductParent;
use PDO;
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

    /**
     * Get instance of ShopProductParent by DB values
     *
     * @param int  $id
     * @param \PDO $pdo
     * @return \Models\ShopProductParent|null
     */
    public static function getInstance(int $id, PDO $pdo): ?ShopProductParent
    {
        /** @var \PDOStatement $smtm */
        $smtm = $pdo->prepare("select * from products where id=?");
        $smtm->execute([$id]);
        $row = $smtm->fetch();

        if (empty($row)) {
            return null;
        }

        /** @var BookProductChild|CDProductChild $product */
        if ($row['type'] === "book") {
            $product = new BookProductChild(
                $row['title'],
                $row['firstname'],
                $row['mainname'],
                $row['price'],
                $row['numpages']
            );
        } elseif ($row['type'] === "cd") {
            $product = new CDProductChild(
                $row['title'],
                $row['firstname'],
                $row['mainname'],
                $row['price'],
                $row['playlength']
            );
        } else {
            $product = new ShopProductParent(
                $row['title'],
                $row['firstname'],
                $row['mainname'],
                $row['price']
            );
        }
        $product->setId($row['id']);
        $product->setDiscount($row['discount']);

        return $product;
    }
}
