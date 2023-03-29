<?php 

namespace App\Routes;

use App\Controllers\ProductController;

class Router {

    protected $productController;
    
    protected $routes = [
        "GET" => [],
        "POST" => [],
        'DELETE' => [],
    ];

    protected $requestActionFinder = [];

    public function __construct($route = null)
    {

        $this->productController = new ProductController;
    }

    // function to load my route file here
    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }


    public function direct($requestUri, $requestType, $requestData, $id = null)
    {

        if($requestType === "OPTIONS") {
            return;
        }
        if(!array_key_exists($requestUri, $this->routes[$requestType])) {

            throw new Exception("the request url {$requestUri} does not exit");

        }

        $requestTypeSmallCaps = strtolower($requestType);

        
        // get my request action in the request-action-finder array
        if(($requestTypeSmallCaps === "get") && isset($_GET['field']) && isset($_GET['value'])) {

            $requestValidateAction = $this->requestActionFinder["{$requestTypeSmallCaps}-validate-{$requestUri}"];

            $field = $_GET['field'];
            $value = $_GET['value'];

            $this->productController->$requestValidateAction($field, $value);
        
        }elseif($requestTypeSmallCaps === "get") {

            $requestAction = $this->requestActionFinder["{$requestTypeSmallCaps}-{$requestUri}"];

            $this->productController->$requestAction();
        
        }elseif($requestTypeSmallCaps === "post") {

            $postData = [
                "name" => ucwords($requestData->name),
                "price" => $requestData->price,
                "sku" => $requestData->sku,
                "productType" => $requestData->productType,
                "attributes" => $requestData->attributes
            ];

            echo $requestData->price;

            $requestAction = $this->requestActionFinder["{$requestTypeSmallCaps}-{$requestUri}"];

            $this->productController->$requestAction($postData);

        }elseif($requestTypeSmallCaps === "delete") {

            $requestAction = $this->requestActionFinder["{$requestTypeSmallCaps}-{$requestUri}"];

            $this->productController->$requestAction($requestData);
        }
        
    }

    public function get($requestUri, $controller, $requestAction)
    {

        $this->routes['GET'][$requestUri] = $controller;
        $this->routes['GET'][$requestAction] = $requestAction;

        $this->requestActionFinder["get-{$requestUri}"] = $requestAction;
    }

    public function validate($requestUri, $controller, $requestAction)
    {

        $this->routes['GET'][$requestUri] = $controller;
        $this->routes['GET'][$requestAction] = $requestAction;

        $this->requestActionFinder["get-validate-{$requestUri}"] = $requestAction;
    }

    public function post($requestUri, $controller, $requestAction)
    {

        $this->routes['POST'][$requestUri] = $controller;
        $this->routes['POST'][$requestAction] = $requestAction;

        $this->requestActionFinder["post-{$requestUri}"] = $requestAction;
    }

    public function delete($requestUri, $controller, $requestAction)
    {

        $this->routes['DELETE'][$requestUri] = $controller;
        $this->routes['DELETE'][$requestAction] = $requestAction;

        $this->requestActionFinder["delete-{$requestUri}"] = $requestAction;
    }
}