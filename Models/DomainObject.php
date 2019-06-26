<?php
declare(strict_types=1);
namespace Models;

/**
 * Class DomainObject
 *
 * @package Models
 */
abstract class DomainObject
{
    /** @var string $group */
    private $group;

    /**
     * DomainObject constructor.
     *
     * @param string $group
     */
    public function __construct()
    {
        $this->group = static::getGroup();
    }

    /**
     * Create new instance statical
     *
     * @return \Models\DomainObject
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get group value
     *
     * @return string
     */
    public static function getGroup(): string
    {
        return 'default';
    }
}
