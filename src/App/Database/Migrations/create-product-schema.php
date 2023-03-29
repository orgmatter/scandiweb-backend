<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$rootPath = $_SERVER['DOCUMENT_ROOT'];

require_once($rootPath.'/vendor/autoload.php');

require_once($rootPath.'/src/App/Database/config.php');

try {
    Capsule::schema()->create('products', function ($table) {
        $table->increments('id');
        $table->string('name');
        $table->string('price');
        $table->string('sku')->unique();
        $table->string('productType');
        $table->json('attributes');
        $table->timestamps();
        $table->softDeletes();
    });
}catch(\Exception $ex) {
    echo "unable to create table {$ex->getMessage()}";
}