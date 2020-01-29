<?php
declare(strict_types=1);

namespace Models\Patterns\AbstractFactory;

/**
 * Class MegaAppEncoder
 *
 * @package Models\Patterns\AbstractFactory
 */
class MegaAppEncoder extends AppEncoder
{
    /**
     * @inheritDoc
     */
    public function encode(): string
    {
        return "Encode by MegaAppEncoder\n";
    }
}
