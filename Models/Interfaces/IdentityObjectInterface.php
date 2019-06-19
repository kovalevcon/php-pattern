<?php
declare(strict_types=1);
namespace Interfaces;

/**
 * Interface IdentityObjectInterface
 *
 * @package Interfaces
 */
interface IdentityObjectInterface
{
    /**
     * Generate ID value
     *
     * @return string
     */
    public function generateId(): string;
}
