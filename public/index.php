<?php
declare(strict_types=1);
require_once __DIR__ . '/../vendor/autoload.php';

// Chapter 3: Class and object
///** @var Controllers\ShopProductController $shopController */
//$shopController = new Controllers\ShopProductController;
//$shopController->showProduct();
//$shopController->showProductWriter();
//$shopController->showCDAndBookProduct(); // Before use inheritance
//$shopController->showCDAndBookInheritanceProduct(); // Use inheritance models
//$shopController->showCDAndBookInheritanceProductWriter();
//$shopController->showTextProductWriter();
//$shopController->showXMLProductWriter();
// Chapter 4: Traits
//$shopController->showProductCalculateTax();
//$shopController->showProductGenerateId();
//$shopController->showPriceUtilities();

///** @var Controllers\ProductDbController $productDbController */
//$productDbController = new Controllers\ProductDbController;
//$productDbController->checkConnection();
//$productDbController->createTable();

// Chapter 4: Late Static Bindings
///** @var \Controllers\ObjectController $objectController */
//$objectController = new \Controllers\ObjectController;
//$objectController->showLateStaticBindings();

// Chapter 4: Exceptions
///** @var \Controllers\XmlConfController $xmlConfController */
//$xmlConfController = new \Controllers\XmlConfController;
//$xmlConfController->getAndSetXmlConf();

// Chapter 4: Interception
/** @var \Controllers\PersonController $personController */
//$personController = new \Controllers\PersonController;
//$personController->getPerson();
//$personController->getPersonViaWriter();
//$personController->getMethodWithAnonymousClass();

// Chapter 4: Composite properties
///** @var \Controllers\AddressController $addressController */
//$addressController = new \Controllers\AddressController;
//$addressController->getAddresses();

// Chapter 5: Namespace
/** @var \Controllers\NamespaceController $namespaceController */
$namespaceController = new \Controllers\NamespaceController;
$namespaceController->getNamespaces();
