<?php
declare(strict_types=1);

namespace Models\Patterns\AbstractFactory;

/**
 * Class MegaContactEncoder
 *
 * @package Models\Patterns\AbstractFactory
 */
class MegaContactEncoder extends ContactEncoder
{
    /**
     * @inheritDoc
     */
    public function encode(): string
    {
        return "Encode by MegaContactEncoder\n";
    }
}
