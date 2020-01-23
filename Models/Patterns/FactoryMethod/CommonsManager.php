<?php
declare(strict_types=1);

namespace Models\Patterns\FactoryMethod;

/**
 * Class CommonsManager
 *
 * @package Models\Patterns\FactoryMethod
 */
abstract class CommonsManager
{
    /**
     * Get instance of message encoder class
     *
     * @return MessageEncoder
     */
    abstract public function getMessageEncoder(): MessageEncoder;

    /**
     * Get header text message
     *
     * @return string
     */
    abstract public function getHeaderText(): string;

    /**
     * Get footer text message
     *
     * @return string
     */
    abstract public function getFooterText(): string;
}
