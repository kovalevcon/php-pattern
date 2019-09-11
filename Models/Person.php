<?php
declare(strict_types=1);
namespace Models;

/**
 * Class Person
 *
 * @package Models
 */
class Person
{
    /**
     * Output method for use anonymous method
     *
     * @param \Models\Person $person
     * @return void
     */
    public function output(Person $person): void
    {
        $person->write($person);
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName(): ?string
    {
        return "Kovalevcon";
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge(): ?int
    {
        return 30;
    }
}
