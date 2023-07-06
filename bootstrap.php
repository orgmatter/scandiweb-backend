<?php 

use App\Routes\Router;

$rootPath = $_SERVER["DOCUMENT_ROOT"];
$routePath = "{$rootPath}/src/App/Routes/routes.php";

echo "your head again";
$app = [
    "router" => new Router,
    "load" => Router::load($routePath),
];

return $app;