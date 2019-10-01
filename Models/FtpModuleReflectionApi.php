<?php
declare(strict_types=1);
namespace Models;

use Interfaces\ModuleReflectionAPIInterface;

/**
 * Class PersonReflectionApi
 *
 * @package Models
 */
class FtpModuleReflectionApi implements ModuleReflectionAPIInterface
{
    /**
     * Method of execute module
     *
     * @return void
     */
    public function execute(): void
    {
        print_r("FtpModuleReflectionApi::execute(): - OK\n");
    }

    /**
     * Set host
     *
     * @param string $host
     */
    public function setHost(string $host): void
    {
        print_r("FtpModuleReflectionApi::setHost(): {$host}\n");
    }

    /**
     * Set user
     *
     * @param string $user
     */
    public function setUser(string $user): void
    {
        print_r("FtpModuleReflectionApi::setUser(): {$user}\n");
    }
}
