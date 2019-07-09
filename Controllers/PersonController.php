<?php
declare(strict_types=1);
namespace Controllers;

use Models\PersonInterception;

/**
 * Class PersonController
 *
 * @package Controllers
 */
class PersonController
{
    /**
     * Get person name
     *
     * @return void
     */
    public function getPerson(): void
    {
        /** @var PersonInterception $person */
        $person = new PersonInterception;
        $person->name = 'Yan';
        $person->age = 25;
        if (isset($person->name)) {
            print "Get name: {$person->name}";
        }
        if (isset($person->age)) {
            print "Get age: {$person->age}";
        }
        unset($person->name);
        print "Get name after unset: " . (is_null($person->name) ? 'null' : $person->name);
    }
}
