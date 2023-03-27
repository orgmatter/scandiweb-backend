<?php

use Illuminate\Database\Capsule\Manager as Capsule;

require '../../../../vendor/autoload.php';

require '../config.php';

Capsule::schema()->table('products', function ($table) {
    $table->string('productType')->after('sku');
});