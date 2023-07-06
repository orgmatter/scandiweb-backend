<?php 

use App\Routes\Router;

$rootPath = $_SERVER["DOCUMENT_ROOT"];
$routePath = "{$rootPath}/src/App/Routes/routes.php";


$app = [
    "router" => new Router,
    // "load" => Router::load($routePath),
];

echo var_dump($app);

return $app;