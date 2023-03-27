<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
"driver" => "mysql",
"host" =>"us-cdbr-east-06.cleardb.net",
"database" => "heroku_0e2c099e17f0ca9",
"username" => "b9309572efa27f",
"password" => "899e2f1a"
]);

$capsule->setAsGlobal();

$capsule->bootEloquent();