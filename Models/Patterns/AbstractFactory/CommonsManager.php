<?php
declare(strict_types=1);

namespace Models\Patterns\AbstractFactory;

/**
 * Class CommonsManager
 *
 * @package Models\Patterns\AbstractFactory
 */
abstract class CommonsManager
{
    /**
     * Get instance of app encoder class
     *
     * @return AppEncoder
     */
    abstract public function getAppEncoder(): AppEncoder;

    /**
     * Get instance of ttd encoder class
     *
     * @return TtdEncoder
     */
    abstract public function getTtdEncoder(): TtdEncoder;

    /**
     * Get instance of contact encoder class
     *
     * @return ContactEncoder
     */
    abstract public function getContactEncoder(): ContactEncoder;

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
