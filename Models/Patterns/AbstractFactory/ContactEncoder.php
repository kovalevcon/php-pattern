<?php
declare(strict_types=1);

namespace Models\Patterns\AbstractFactory;

/**
 * Class ContactEncoder
 *
 * @package Models\Patterns\AbstractFactory
 */
abstract class ContactEncoder
{
    /**
     * Method for encode message
     *
     * @return string
     */
    abstract public function encode(): string;
}
