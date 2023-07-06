<?php

namespace App\Abstracts;
use App\Services\ProductService;

abstract class Product {

    abstract public function addProduct($data);

    public static function say(){
        echo "say what";
    }

    // public function productService()
    // {
    //     return new ProductService;
    // }
}

Product::say();