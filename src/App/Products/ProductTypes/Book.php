<?php 

namespace App\Products\ProductTypes;

use App\Products\Product;

class Book extends Product
{
    public function addProduct($data)
    {
        $product = $this->productService()->addProduct($data);
        return $this->productService()->toJson($product);
    }
}