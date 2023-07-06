<?php

use Illuminate\Database\Capsule\Manager as Capsule;

// $capsule = new Capsule;

echo var_dump(["jbvbs" => "kjgsg"]);

$capsule->addConnection([
"driver" => "mysql",
"host" =>"localhost",
"port" => 3306,
"database" => "scandiweb-products",
"username" => "root",
"password" => "root_pwd"
]);

$capsule->setAsGlobal();

$capsule->bootEloquent();