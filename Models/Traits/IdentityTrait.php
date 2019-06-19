<?php
declare(strict_types=1);
namespace Traits;

/**
 * Trait IdentityTrait
 *
 * @package Traits
 */
trait IdentityTrait
{
    /**
     * Generate ID value
     *
     * @return string
     */
    public function generateId(): string
    {
        return uniqid();
    }
}
