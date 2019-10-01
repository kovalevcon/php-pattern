<?php
declare(strict_types=1);
namespace Interfaces;

/**
 * Interface ModuleReflectionAPIInterface
 *
 * @package Interfaces
 */
interface ModuleReflectionAPIInterface
{
    /**
     * Method of execute module
     *
     * @return void
     */
    public function execute(): void;
}
