<?php
declare(strict_types=1);

namespace Models\Patterns\AbstractFactory;

/**
 * Class BloggsTtdEncoder
 *
 * @package Models\Patterns\AbstractFactory
 */
class BloggsTtdEncoder extends TtdEncoder
{
    /**
     * @inheritDoc
     */
    public function encode(): string
    {
        return "Encode by BloggsTtdEncoder\n";
    }
}
