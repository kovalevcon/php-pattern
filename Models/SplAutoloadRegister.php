<?php
declare(strict_types=1);

$basic = function ($className) {
    $file = __DIR__ . DIRECTORY_SEPARATOR . "{$className}.php";
    if (file_exists($file)) {
        require_once($file);
    }
};

spl_autoload_register($basic);

/** @var \SplAutoloadTest $splAutoloadTest */
$splAutoloadTest = new SplAutoloadTest();
$splAutoloadTest->test();
