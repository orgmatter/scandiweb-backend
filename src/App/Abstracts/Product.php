<?php

namespace App\Abstracts;
use App\Services\ProductService;
echo "kljghdhf---hjvg";

abstract class Product {

    abstract public function addProduct($data);

    public function productService()
    {
        return new ProductService;
    }
}