<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['category_id','brand_id', 'product_desc', 'product_status','product_content','product_price','product_image'];
    protected $primaryKey = 'product_id';
    protected $table = 'products';
}
