<?php

namespace App\Services;

use App\Database\Models\Product;

$rootPath = $_SERVER['DOCUMENT_ROOT'];
require_once($rootPath.'/src/App/Database/config.php');

class ProductService {

    public function __construct($var = null)
    {
        
    }

    public function getProducts()
    {
        try {
            $products = Product::all();
            return [
                "status" => "success",
                "msg" => "Product fetched",
                "data" => $products
            ];
        }catch(\Exception $ex) {
            return [
                "status" => "error",
                "msg" => "Unable to fetch product {$ex->getMessage()}",
                "data" => []
            ];
        }
    }

    public function addProduct($data)
    {
        try {
            $product = Product::create($data);
            return [
                "status" => "success",
                "msg" => "Product saved",
                "data" => $product
            ];
        }catch(\Exception $ex) {
            return [
                "status" => "error",
                "msg" => "Product cannot be saved {$ex->getMessage()}",
                "data" => []
            ];
        }
    }

    public function deleteProducts($data)
    {
        try {
            $product = Product::destroy($data);
            return [
                "status" => "success",
                "msg" => "Product deleted",
                "data" => $product
            ];
        }catch(\Exception $ex) {
            return [
                "status" => "error",
                "msg" => "Product cannot be deleted {$ex->getMessage()}",
                "data" => []
            ];
        }
    }

    public function validateRecord($field, $value)
    {
        $record = Product::where('sku', '=', $value)->get();

        if(!$record) {
           
            return [
                "status" => "error",
                "msg" => "field cannot be validated",
                "data" => []
            ];
        }

        if(count($record) === 0) {

            return [
                "status" => "success",
                "isUnique" => true,
                "msg" => "no duplicate found",
                "data" => []
            ];
        }

        return [
            "status" => "success",
            "isUnique" => false,
            "msg" => "duplicate found",
            "data" => $record
        ];
    }

    public function toJson($data)
    {
        echo json_encode($data);
    }
}