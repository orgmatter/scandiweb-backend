<?php 

use App\Routes\Router;

$rootPath = $_SERVER["DOCUMENT_ROOT"];
$routePath = "{$rootPath}/src/App/Routes/routes.php";


try {

    $app = [
        "router" => new Router,
        // "load" => Router::load($routePath),
    ];
    return $app;
}catch(\Exception $ex) {
    echo "cannot load the router {$ex->getMessage()}";
}