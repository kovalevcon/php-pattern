<?php
declare(strict_types=1);
namespace Models;

use Interfaces\ModuleReflectionAPIInterface;

/**
 * Class PersonReflectionApi
 *
 * @package Models
 */
class PersonModuleReflectionApi implements ModuleReflectionAPIInterface
{
    /**
     * Method of execute module
     *
     * @return void
     */
    public function execute(): void
    {
        print_r("PersonModuleReflectionApi::execute(): - OK\n");
    }

    /**
     * Set person
     *
     * @param PersonReflectionApi $person
     */
    public function setPerson(PersonReflectionApi $person): void
    {
        print_r("PersonModuleReflectionApi::setPerson(): {$person->name}\n");
    }
}
