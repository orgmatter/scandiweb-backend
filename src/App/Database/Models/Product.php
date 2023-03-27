<?php 

namespace App\Database\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

require_once('/Users/user/Desktop/scandiweb-test/scandiweb-backend/src/App/Database/config.php');

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