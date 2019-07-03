<?php
declare(strict_types=1);
namespace Controllers;

use Models\{SpreadSheetObject, UserObject};

/**
 * Class ShopProductController
 *
 * @package Controllers
 */
class ObjectController
{
    /**
     * Show product info
     *
     * @return void
     */
    public function showLateStaticBindings(): void
    {
        print_r(UserObject::create());
        print_r(SpreadSheetObject::create());
    }
}
