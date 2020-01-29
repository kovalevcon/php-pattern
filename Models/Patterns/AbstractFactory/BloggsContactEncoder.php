<?php
declare(strict_types=1);

namespace Models\Patterns\AbstractFactory;

/**
 * Class BloggsContactEncoder
 *
 * @package Models\Patterns\AbstractFactory
 */
class BloggsContactEncoder extends ContactEncoder
{
    /**
     * @inheritDoc
     */
    public function encode(): string
    {
        return "Encode by BloggsContactEncoder\n";
    }
}
