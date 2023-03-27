<?php

use Illuminate\Database\Capsule\Manager as Capsule;

require '../../../../vendor/autoload.php';

require '../config.php';

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