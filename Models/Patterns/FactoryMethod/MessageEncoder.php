<?php
declare(strict_types=1);

namespace Models\Patterns\FactoryMethod;

/**
 * Class MessageEncoder
 *
 * @package Models\Patterns\FactoryMethod
 */
abstract class MessageEncoder
{
    /**
     * Method for encode message
     *
     * @return string
     */
    abstract public function encode(): string;
}
