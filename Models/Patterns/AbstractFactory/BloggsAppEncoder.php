<?php
declare(strict_types=1);

namespace Models\Patterns\AbstractFactory;

/**
 * Class BloggsAppEncoder
 *
 * @package Models\Patterns\AbstractFactory
 */
class BloggsAppEncoder extends AppEncoder
{
    /**
     * @inheritDoc
     */
    public function encode(): string
    {
        return "Encode by BloggsAppEncoder\n";
    }
}
