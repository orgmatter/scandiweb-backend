<?php 

use App\Routes\Request;

require "vendor/autoload.php";

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, PATCH, OPTIONS');

header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept, Origin, Authorization');

header('Access-Control-Max-Age: 1728000');

header("Content-Type: application/json; charset=UTF-8");

echo $_SERVER['REQUEST_URI'];

$app = require './bootstrap.php';

// get my route object here
$router = $app['router'];
$load = $app["load"];

// directing my route to fetch my controller
$load->direct(Request::uri(), Request::method(), Request::data(), Request::isID());