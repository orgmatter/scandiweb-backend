<?php

namespace App\Products;

class Product
{
    // use App\Routes\Traits\RequestHandlers;

    public function shout()
    {
        echo App\Routes\Traits\RequestHandlers::class;
    }
}