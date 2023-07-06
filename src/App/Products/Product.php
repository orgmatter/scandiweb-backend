<?php

namespace App\Products;

use App\Abstracts\Product as ProductAbstract;
use App\Services\ProductService;

class AnotherClass {
    public function anotherFunc(){
        echo "you dey mad";
    }
}

class Product extends AnotherClass
{
    public static function testProduct() {
        echo "product test";
    }

    // public function getProducts() 
    // { 
    //     $products = $this->productService()->getProducts();
    //     return $this->productService()->toJson($products);
    // }


    // public function deleteProducts($data) 
    // {
    //     $product =  $this->productService()->deleteProducts($data);
    //     return $this->productService()->toJson($product);
    // }


    // public function validateRecord($field, $value) 
    // { 
    //     $products = $this->productService()->validateRecord($field, $value);
    //     return $this->productService()->toJson($products);
    // }   
}