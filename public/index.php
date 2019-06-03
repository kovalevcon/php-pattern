<?php

use Controllers\ShopProductController;

require_once __DIR__ . '/../vendor/autoload.php';

(new ShopProductController())->index();