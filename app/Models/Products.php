<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
<<<<<<< HEAD

    protected $primaryKey ='product_id';

    public function categor(){
        return $this-> belongsTo(categoryz::class,'category_id');
    }

=======
    protected $primaryKey = 'procduct_id';

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
>>>>>>> 5d86b96a27a11a5f53fb5123f1877cf80fbc9f8c
}
