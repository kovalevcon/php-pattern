<?php
declare(strict_types=1);

namespace Models\Patterns\AbstractFactory;

/**
 * Class MegaTtdEncoder
 *
 * @package Models\Patterns\AbstractFactory
 */
class MegaTtdEncoder extends TtdEncoder
{
    /**
     * @inheritDoc
     */
    public function encode(): string
    {
        return "Encode by MegaTtdEncoder\n";
    }
}
