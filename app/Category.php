<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['category_id','category_name', 'category_desc', 'category_status'];
    protected $primaryKey = 'category_id';
    protected $table = 'categories';
}
