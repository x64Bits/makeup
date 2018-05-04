<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Product extends Model
{
    protected $fillable = [
    	'category', 'name', 'brand', 'code', 'price', 'image_path'
    ];
}
