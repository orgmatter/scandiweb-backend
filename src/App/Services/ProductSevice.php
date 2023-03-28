<?php

namespace App\Services;

// use App\Database\Models\Product;

// require_once('/Users/user/Desktop/scandiweb-test/scandiweb-backend/src/App/Database/config.php');

echo json_encode([
    "status" => "checking again"
]);

class ProductService {

    public function __construct($var = null)
    {
        
    }

    // public function getProducts()
    // {
    //     if(!$products = Product::all()) {

    //         return [
    //             "status" => "error",
    //             "msg" => "Product cannot be fetched",
    //             "data" => []
    //         ];
    //     }
    //     $products = Product::all();

    //     return [
    //         "status" => "success",
    //         "msg" => "Product fetched",
    //         "data" => $products
    //     ];
    // }

    // public function addProduct($data)
    // {
    //     if(!$product = Product::create($data)) {
            
    //         return [
    //             "status" => "error",
    //             "msg" => "Product cannot be saved",
    //             "data" => []
    //         ];
    //     }

    //     return [
    //         "status" => "success",
    //         "msg" => "Product saved",
    //         "data" => $product
    //     ];
    // }

    // public function deleteProducts($data)
    // {
    //     if(!$product = Product::destroy($data)) {

    //         return [
    //             "status" => "error",
    //             "msg" => "Product cannot be deleted",
    //             "data" => []
    //         ];
    //     }

    //     return [
    //         "status" => "success",
    //         "msg" => "Product deleted",
    //         "data" => $product
    //     ];
    // }

    // public function validate($field, $value)
    // {
    //     $record = Product::where('sku', '=', $value)->get();

    //     if(!$record) {
           
    //         return [
    //             "status" => "error",
    //             "msg" => "field cannot be validated",
    //             "data" => []
    //         ];
    //     }

    //     if(count($record) === 0) {

    //         return [
    //             "status" => "success",
    //             "isUnique" => true,
    //             "msg" => "no duplicate found",
    //             "data" => []
    //         ];
    //     }

    //     return [
    //         "status" => "success",
    //         "isUnique" => false,
    //         "msg" => "duplicate found",
    //         "data" => $record
    //     ];
    // }

    public function toJson($data)
    {
        echo json_encode($data);
    }
}