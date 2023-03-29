<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$rootPath = $_SERVER['DOCUMENT_ROOT'];

require_once($rootPath.'/vendor/autoload.php');

require_once($rootPath.'/src/App/Database/config.php');

Capsule::schema()->table('products', function ($table) {
    $table->string('productType')->after('sku');
});