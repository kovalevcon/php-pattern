<?php
declare(strict_types=1);
namespace Controllers;

use Models\{ClassInfo, SpreadSheetObject, UserObject};

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

    /**
     * Show class info by Reflection API
     *
     * @param string $class
     * @return void
     * @throws \ReflectionException
     */
    public function getClassInfoByReflectionApi(string $class): void
    {
        /** @var \ReflectionClass $refection */
        $refection = new \ReflectionClass($class);
        $infoData = ClassInfo::getInfoData($refection);

        foreach ($infoData as $data) {
            print_r("{$data}\n");
        }
    }

    /**
     * Get class source by Reflection API
     *
     * @param string $class
     * @throws \ReflectionException
     */
    public function getClassSourceByRefectionApi(string $class): void
    {
        /** @var \ReflectionClass $refection */
        $refection = new \ReflectionClass($class);
        $source = ClassInfo::getClassSource($refection);

        print_r($source);
    }
}
