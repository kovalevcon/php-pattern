<?php
declare(strict_types=1);

namespace Models\Patterns\FactoryMethod;

/**
 * Class MegaMessageEncoder
 *
 * @package Models\Patterns\FactoryMethod
 */
class MegaMessageEncoder extends MessageEncoder
{
    /**
     * @inheritDoc
     */
    public function encode(): string
    {
        return "Encode by MegaMessageEncoder\n";
    }
}
