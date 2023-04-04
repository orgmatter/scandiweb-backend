<?php

namespace App\Products;

class Product
{
    public function __construct()
    {
        echo $this->productService()->toJson([
            "jjhjkh" => "jhjhk"
        ]);
    }

    use App\Routes\Traits\RequestHandlers;
}