<?php
declare(strict_types=1);
namespace Models;

/**
 * Class PersonWriter
 *
 * @package Models
 */
class PersonWriter
{
    /**
     * Write name
     *
     * @param PersonInterception $person
     */
    public function writeName(PersonInterception $person)
    {
        print "{$person->getName()}\n";
    }

    /**
     * Write age
     *
     * @param PersonInterception $person
     */
    public function writeAge(PersonInterception $person)
    {
        print "{$person->getAge()}\n";
    }
}
