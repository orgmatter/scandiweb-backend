<?php 

namespace App\Routes;

use App\Products\Product;

class Router {

    public function __construct()
    {
        $this->product = new Product;

        echo $this->product->shout();
    }

    // protected $product;
    
    // protected $routes = [
    //     "GET" => [],
    //     "POST" => [],
    //     'DELETE' => [],
    // ];

    // protected $requestActionFinder = [];

    // public function __construct($route = null)
    // {
    //     $this->product = new Product;
    // }

    // // function to load my route file here
    // public static function load($file)
    // {
    //     $router = new static;

    //     require $file;

    //     return $router;
    // }


    // public function direct($requestUri, $requestType, $requestData, $id = null)
    // {

    //     if($requestType === "OPTIONS") {
    //         return;
    //     }
    //     if(!array_key_exists($requestUri, $this->routes[$requestType])) {

    //         throw new Exception("the request url {$requestUri} does not exit");

    //     }

    //     $requestTypeSmallCaps = strtolower($requestType);

        
    //     // get my request action in the request-action-finder array
    //     if(($requestTypeSmallCaps === "get") && isset($_GET['field']) && isset($_GET['value'])) {

    //         $requestValidateAction = $this->requestActionFinder["{$requestTypeSmallCaps}-validate-{$requestUri}"];

    //         $field = $_GET['field'];
    //         $value = $_GET['value'];

    //         $this->product->$requestValidateAction($field, $value);
        
    //     }elseif($requestTypeSmallCaps === "get") {

    //         $requestAction = $this->requestActionFinder["{$requestTypeSmallCaps}-{$requestUri}"];

    //         $this->product->$requestAction();
        
    //     }elseif($requestTypeSmallCaps === "post") {

    //         $postData = [
    //             "name" => ucwords($requestData->name),
    //             "price" => $requestData->price,
    //             "sku" => $requestData->sku,
    //             "productType" => $requestData->productType,
    //             "attributes" => $requestData->attributes
    //         ];

    //         $requestAction = $this->requestActionFinder["{$requestTypeSmallCaps}-{$requestUri}"];

    //         $productType = new $requestData->productType;

    //         $productType->$requestAction($postData);

    //     }elseif($requestTypeSmallCaps === "delete") {

    //         $requestAction = $this->requestActionFinder["{$requestTypeSmallCaps}-{$requestUri}"];

    //         $this->product->$requestAction($requestData);
    //     }
        
    // }

    // public function get($requestUri, $requestAction)
    // {
    //     $this->routes['GET'][$requestAction] = $requestAction;

    //     $this->requestActionFinder["get-{$requestUri}"] = $requestAction;
    // }

    // public function post($requestUri, $requestAction)
    // {
    //     $this->routes['POST'][$requestAction] = $requestAction;

    //     $this->requestActionFinder["post-{$requestUri}"] = $requestAction;
    // }

    // public function delete($requestUri, $requestAction)
    // {
    //     $this->routes['DELETE'][$requestUri] = $requestUri;
    //     $this->routes['DELETE'][$requestAction] = $requestAction;

    //     $this->requestActionFinder["delete-{$requestUri}"] = $requestAction;
    // }

    // public function validateRecord($requestUri, $requestAction)
    // {
    //     $this->routes['GET'][$requestUri] = $requestUri;
    //     $this->routes['GET'][$requestAction] = $requestAction;

    //     $this->requestActionFinder["get-validate-{$requestUri}"] = $requestAction;
    // }
}