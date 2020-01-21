<?php
declare(strict_types=1);

namespace Models\Patterns;

/**
 * Class PreferencesSingleton
 *
 * @package Models\Patterns
 */
class PreferencesSingleton
{
    /** @var array */
    private $props = [];

    /** @var self */
    private static $instance;

    /**
     * PreferencesSingleton constructor.
     */
    private function __construct()
    {
    }

    /**
     * Get instance
     *
     * @return static
     */
    public static function getInstance(): self
    {
        if (empty(self::$instance)) {
            self::$instance = new PreferencesSingleton();
        }

        return self::$instance;
    }

    /**
     * Set property value by key
     *
     * @param string $key
     * @param string $value
     *
     * @return void
     */
    public function setProperty(string $key, string $value): void
    {
        $this->props[$key] = $value;
    }

    /**
     * Get property value by key
     *
     * @param string $key
     *
     * @return string
     */
    public function getProperty(string $key): string
    {
        return $this->props[$key];
    }
}
