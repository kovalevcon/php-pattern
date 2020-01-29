<?php
declare(strict_types=1);

namespace Models\Patterns\AbstractFactory;

/**
 * Class TtdEncoder
 *
 * @package Models\Patterns\AbstractFactory
 */
abstract class TtdEncoder
{
    /**
     * Method for encode message
     *
     * @return string
     */
    abstract public function encode(): string;
}
