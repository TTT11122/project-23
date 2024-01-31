<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $primaryKey = 'category_id';

<<<<<<< HEAD
    public function product(){
        return $this->hasMany(Product::class, 'category_');
=======

    public function product(){
        return $this->hasMany(Product::class,'create_id');
>>>>>>> 5d86b96a27a11a5f53fb5123f1877cf80fbc9f8c
    }
}
