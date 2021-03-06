<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $fillable = ['brand_id','brand_name', 'brand_desc', 'brand_status'];
    protected $primaryKey = 'brand_id';
    protected $table = 'brands';
}
