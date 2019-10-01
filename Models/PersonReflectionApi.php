<?php
declare(strict_types=1);
namespace Models;

/**
 * Class PersonReflectionApi
 *
 * @package Models
 */
class PersonReflectionApi
{
    /** @var string $name */
    public $name;

    /**
     * PersonReflectionApi constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
