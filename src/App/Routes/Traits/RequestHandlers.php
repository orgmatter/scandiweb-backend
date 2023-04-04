<?php 

namespace App\Routes\Traits;

use App\Services\ProductService;

trait RequestHandlers {

    public function productService() 
    {
        return new ProductService;
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
    //     $products = $this->productService()->validate($field, $value);
    //     return $this->productService()->toJson($products);
    // }
}