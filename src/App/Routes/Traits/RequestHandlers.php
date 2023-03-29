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
            $products = $this->productService()->getProducts();
            return $this->productService()->toJson($products);
        
        }catch(\Exception $ex) {
            echo $ex->getMessage();
        }
    }


    public function addProduct($data) 
    {
        var_dump($data);
        $product = $this->productService()->addProduct($data);

        // var_dump($data);

        // return $this->productService()->toJson($product);
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