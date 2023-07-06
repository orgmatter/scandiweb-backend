<?php

namespace App\Abstracts;
use App\Services\ProductService;

abstract class Product {

    abstract public function addProduct($data);

    public function productService()
    {
        echo "kljghdhf---hjvg";
        return new ProductService;
    }
}