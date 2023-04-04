<?php 

use App\Routes\Router;

$rootPath = $_SERVER["DOCUMENT_ROOT"];
$routePath = "{$rootPath}/src/App/Routes/routes.php";


try {

    $app = [
        "router" => "kugugug",
        // "load" => Router::load($routePath),
    ];
    print_r($app);
}catch(\Exception $ex) {
    echo "cannot load the router {$ex->getMessage()}";
}