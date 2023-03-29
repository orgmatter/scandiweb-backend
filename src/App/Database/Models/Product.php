<?php 

namespace App\Database\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

$rootPath = $_SERVER['DOCUMENT_ROOT'];
require_once($rootPath.'/src/App/Database/config.php');

class Product extends Eloquent
{
   /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
   protected $fillable = [
       'name', 'price', 'sku','productType', 'attributes'
   ];

   protected $cast = [
       'attributes' => 'array'
   ];
 }