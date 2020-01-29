<?php
declare(strict_types=1);

namespace Models\Patterns\AbstractFactory;

/**
 * Class AppEncoder
 *
 * @package Models\Patterns\AbstractFactory
 */
abstract class AppEncoder
{
    /**
     * Method for encode message
     *
     * @return string
     */
    abstract public function encode(): string;
}
