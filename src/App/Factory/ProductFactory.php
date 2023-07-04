<?php

namespace App\Factory;

class ProductFactory {

    public function createProduct($productType = null) {

        $className = "App\\Products\\ProductTypes\\{$productType}";

        if(!class_exists($className)) {

            throw new Exception("Sorry this class name: {$className} does not exist!");
        }

        return new $className;
    }
}