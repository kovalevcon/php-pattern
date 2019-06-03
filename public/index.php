<?php

require_once __DIR__ . '/../vendor/autoload.php';

// Chapter 3: Class and object
/** @var Controllers\ShopProductController $shopController */
$shopController = new Controllers\ShopProductController();
$shopController->showProduct();
$shopController->showProductWriter();
$shopController->showCDAndBookProduct(); // Before use inheritance
