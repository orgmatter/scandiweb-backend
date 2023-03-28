<?php 

use App\Routes\Request;

require "vendor/autoload.php";

header("Cache-Control: no-cache, must-revalidate");

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, PATCH, OPTIONS');

header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept, Origin, Authorization');

header("Content-Type: application/json; charset=UTF-8");

$app = require './bootstrap.php';

// get my route object here
$router = $app['router'];
$load = $app["load"];

// directing my route to fetch my controller
$load->direct(Request::uri(), Request::method(), Request::data(), Request::isID());