<?php

namespace App\Abstracts;
use App\Services\ProductService;

abstract class Product {

    public function productService()
    {
        return new ProductService;
    }
}