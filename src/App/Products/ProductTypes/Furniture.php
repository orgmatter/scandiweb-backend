<?php 

namespace App\Products\ProductTypes;

use App\Abstracts\Product;

class Furniture extends Product
{
    public function addProduct($data)
    {
        $product = $this->productService()->addProduct($data);
        return $this->productService()->toJson($product);
    }
}