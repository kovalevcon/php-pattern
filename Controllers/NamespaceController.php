<?php
declare(strict_types=1);
namespace Controllers;

/**
 * Class NamespaceController
 *
 * @package Controllers
 */
class NamespaceController
{
    /**
     * Get global and local namespaces
     *
     * @return void
     */
    public function getNamespaces(): void
    {
        Lister::helloWord();
        \Lister::helloWord();
    }
}
