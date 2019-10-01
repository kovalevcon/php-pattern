<?php
declare(strict_types=1);
namespace Models;

use Interfaces\ModuleReflectionAPIInterface;

/**
 * Class PersonReflectionApi
 *
 * @package Models
 */
class ModuleRunnerReflectionApi
{
    /** @var array $configData */
    private $configData = [
        'Models\PersonModuleReflectionApi'  => ['person' => 'kovalevcon'],
        'Models\FtpModuleReflectionApi'     => [
            'host'  => 'kovalevcon.github.io',
            'user'  => 'guest',
        ],
    ];

    /** @var array $modules */
    private $modules = [];

    /**
     * Init
     *
     * @return ModuleRunnerReflectionApi
     * @throws \ReflectionException
     * @throws \Exception
     */
    public function init(): self
    {
        $interface = new \ReflectionClass('Interfaces\ModuleReflectionAPIInterface');
        foreach ($this->configData as $moduleName => $params) {
            $moduleClass = new \ReflectionClass($moduleName);
            if (!$moduleClass->isSubclassOf($interface)) {
                throw new \Exception("Unknown type of module: {$moduleName}");
            }
            $module = $moduleClass->newInstance();
            foreach ($moduleClass->getMethods() as $method) {
                $this->handleMethod($module, $method, $params);
            }
            array_push($this->modules, $module);
        }

        return $this;
    }

    /**
     * Execute modules
     *
     * @return void
     */
    public function execute(): void
    {
        foreach ($this->modules as $module) {
            /** @var PersonModuleReflectionApi|FtpModuleReflectionApi $module */
            $module->execute();
        }
    }

    /**
     * Handle method
     *
     * @param ModuleReflectionAPIInterface $module
     * @param \ReflectionMethod            $method
     * @param                              $params
     * @return void
     */
    private function handleMethod(ModuleReflectionAPIInterface $module, \ReflectionMethod $method, $params): void
    {
        $name = $method->getName();
        $args = $method->getParameters();

        if (count($args) !== 1 || mb_substr($name, 0, 3) !== 'set') {
            return;
        }

        $property = strtolower(mb_substr($name, 3));

        if (!isset($params[$property])) {
            return;
        }

        $argClass = $args[0]->getClass();

        if (empty($argClass)) {
            $method->invoke($module, $params[$property]);
        } else {
            $method->invoke($module, $argClass->newInstance($params[$property]));
        }
    }
}
