<?php 

// We define our routes here
$router->get('api/v1/products', 'getProducts');
$router->get('api/v1/product', 'getProduct');
$router->validateRecord('api/v1/product/validate-record', 'validateRecord');
$router->delete('api/v1/products', 'deleteProducts');
$router->post('api/v1/product', 'addProduct');