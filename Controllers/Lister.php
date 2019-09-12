<?php
declare(strict_types=1);
namespace Controllers;

/**
 * Class Lister
 */
class Lister
{
    /**
     * Method say 'hi'
     *
     * @return void
     */
    public static function helloWord(): void
    {
        print('Hi there, from ' . __NAMESPACE__ . "\n");
    }
}