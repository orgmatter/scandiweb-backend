<?php 

namespace App\Routes\Traits;

use App\Services\ProductService;

trait RequestHandlers {

    public function productService() 
    {
        return new ProductService;
    }


    public function getProducts() 
    { 
        echo json_encode([
            "status" => "checking"
        ]);
        $products = $this->productService()->getProducts();

        return $this->productService()->toJson($products);
    }


    public function addProduct($data) 
    {
        $product = $this->productService()->addProduct($data);

        return $this->productService()->toJson($product);
    }


    public function deleteProducts($data) 
    {
        $product =  $this->productService()->deleteProducts($data);

        return $this->productService()->toJson($product);
    }


    // method to validate a record in the database;
    public function validate($field, $value) 
    { 
        $products = $this->productService()->validate($field, $value);

        return $this->productService()->toJson($products);
    }
}