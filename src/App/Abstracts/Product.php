<?php

namespace App\Abstracts;

abstract class Product {

    public function __construct()
    {

    }

    abstract public function addProduct($data);    
}