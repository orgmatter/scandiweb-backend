<?php

namespace App\Products;

use App\Abstracts\Product as ProductAbstract;

echo "hjghjkff";

class Product extends ProductAbstract
{
    public function addProduct($data) {
        return;
    }
    public function getProducts() 
    { 
        // $products = $this->productService()->getProducts();
        // return $this->productService()->toJson($products);

        return $this->sayWhat();
    }


    public function deleteProducts($data) 
    {
        $product =  $this->productService()->deleteProducts($data);
        return $this->productService()->toJson($product);
    }


    public function validateRecord($field, $value) 
    { 
        $products = $this->productService()->validateRecord($field, $value);
        return $this->productService()->toJson($products);
    }   
}