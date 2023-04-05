<?php

namespace App\Products;

use App\Services\ProductService;

class Product
{
    public function productService() 
    {
        return new ProductService;
    }

    public function getProducts() 
    { 
        $products = $this->productService()->getProducts();
        return $this->productService()->toJson($products);
    }


    public function deleteProducts($data) 
    {
        $product =  $this->productService()->deleteProducts($data);
        return $this->productService()->toJson($product);
    }


    public function validateRecord($field, $value) 
    { 
        $products = $this->productService()->validate($field, $value);
        return $this->productService()->toJson($products);
    }   
}