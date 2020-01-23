<?php
declare(strict_types=1);

namespace Controllers;

use Models\Patterns\FactoryMethod\BloggsCommonsManager;
use Models\Patterns\FactoryMethod\MegaCommonsManager;
use Models\Patterns\PreferencesSingleton;

/**
 * Class PatternController
 *
 * @package Controllers
 */
class PatternController
{
    /**
     * Check singleton pattern
     *
     * @return void
     */
    public function checkSingletonPattern(): void
    {
        $property = ['size', 'Large'];
        $pref = PreferencesSingleton::getInstance();
        $pref->setProperty(...$property);
        unset($pref);

        $pref2 = PreferencesSingleton::getInstance();
        print $pref2->getProperty($property[0]) . "\n";
    }

    /**
     * Check factory method pattern
     *
     * @return void
     */
    public function checkFactoryMethodPattern(): void
    {
        $megaManager = new MegaCommonsManager();
        print $megaManager->getHeaderText();
        print $megaManager->getMessageEncoder()->encode();
        print $megaManager->getFooterText();

        $bloggsManager = new BloggsCommonsManager();
        print $bloggsManager->getHeaderText();
        print $bloggsManager->getMessageEncoder()->encode();
        print $bloggsManager->getFooterText();
    }
}
