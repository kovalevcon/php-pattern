<?php
declare(strict_types=1);
namespace Controllers;

use Models\{Person, PersonInterception, PersonWriter};

/**
 * Class PersonController
 *
 * @package Controllers
 */
class PersonController
{
    /**
     * Get person name and age via __get
     *
     * @return void
     */
    public function getPerson(): void
    {
        /** @var PersonInterception $person */
        $person = new PersonInterception();
        $person->name = 'Yan';
        $person->age = 25;
        if (isset($person->name)) {
            print "Get name: {$person->name}";
        }
        if (isset($person->age)) {
            print "Get age: {$person->age}";
        }
        print "{$person}\n";
        unset($person->name);
        print "Get name after unset: " . (is_null($person->name) ? 'null' : $person->name);
    }

    /**
     * Get person name and age via __call method
     *
     * @return void
     */
    public function getPersonViaWriter(): void
    {
        /** @var PersonInterception $person */
        $person = new PersonInterception(new PersonWriter);
        $person->name = 'Yan';
        $person->age = 25;
        $person->writeName();
        $person->writeAge();
    }

    /**
     * Get person method by anonymous class
     *
     * @return void
     */
    public function getMethodWithAnonymousClass(): void
    {
        /** @var Person $person */
        $person = new Person;
        $person->output(
            new class extends Person {
                public function write(Person $person)
                {
                    print("{$person->getName()} {$person->getAge()}\n");
                }
            }
        );
    }
}
