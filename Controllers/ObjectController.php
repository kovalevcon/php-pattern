<?php
declare(strict_types=1);
namespace Controllers;

use Models\{ClassInfo, ModuleRunnerReflectionApi, SpreadSheetObject, UserObject};

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
        $infoData = ClassInfo::getClassInfoData($refection);

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

    /**
     * Show method of class info by Reflection API
     *
     * @param string $class
     * @param string $method
     * @return void
     * @throws \ReflectionException
     */
    public function getMethodInfoByReflectionApi(string $class, string $method): void
    {
        /** @var \ReflectionClass $refection */
        $refection = new \ReflectionClass($class);
        $infoData = ClassInfo::getMethodInfoData($refection->getMethod($method));

        foreach ($infoData as $data) {
            print_r("{$data}\n");
        }
    }

    /**
     * Get class source by Reflection API
     *
     * @param string $class
     * @param string $method
     * @throws \ReflectionException
     */
    public function getMethodSourceByRefectionApi(string $class, string $method): void
    {
        /** @var \ReflectionClass $refection */
        $refection = new \ReflectionClass($class);
        $source = ClassInfo::getMethodSource($refection->getMethod($method));

        print_r($source);
    }

    /**
     * Init and run module runner
     *
     * @throws \ReflectionException
     */
    public function runModuleRunner(): void
    {
        (new ModuleRunnerReflectionApi())->init()->execute();
    }
}
