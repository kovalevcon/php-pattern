<?php
declare(strict_types=1);

namespace Models\Patterns\FactoryMethod;

/**
 * Class BloggsMessageEncoder
 *
 * @package Models\Patterns\FactoryMethod
 */
class BloggsMessageEncoder extends MessageEncoder
{
    /**
     * @inheritDoc
     */
    public function encode(): string
    {
        return "Encode by BloggsMessageEncoder\n";
    }
}
