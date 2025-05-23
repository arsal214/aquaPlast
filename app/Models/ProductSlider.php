<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSlider extends Model
{
    use HasFactory;

    protected $table ='product_sliders';

    protected $fillable = ['image','title','description'];

    public function getImageAttribute($value)
    {
        return $value ? '/images/productSliders/'.$value : null;
    }

}
