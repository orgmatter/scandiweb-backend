<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
"driver" => "mysql",
"host" =>"q0h7yf5pynynaq54.cbetxkdyhwsb.us-east-1.rds.amazonaws.com",
"port" => 3306,
"database" => "r7wf13h0s8or0zgs",
"username" => "vlcwy23lkevovopm",
"password" => "ts32e6337lojboh7"
]);

$capsule->setAsGlobal();

$capsule->bootEloquent();