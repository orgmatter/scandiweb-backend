<?php

namespace App\Products;

class Product
{
    public function __construct()
    {
        echo "product crazy";
    }
    use App\Routes\Traits\RequestHandlers;
}