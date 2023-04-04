<?php 

namespace App\Products\ProductTypes;

use App\Abstracts\Product;
use App\Services\ProductService;

class Furniture extends Product
{
    public function productService()
    {
        return new ProductService;
    }
    

    public function addProduct($data)
    {
        $product = $this->productService()->addProduct($data);
        return $this->productService()->toJson($product);
    }
}