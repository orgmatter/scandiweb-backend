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
        try {
            // $products = $this->productService()->getProducts();
            // $productService = new ProductService;
            // return $productService->toJson([
            //     "status" => "array to json"
            // ]);

            echo ProductService::class;
        
        }catch(Error $ex) {
            echo $ex->getMessage();
        }
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