<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'category_id',
        'name',
        'description','status',
        'subcategory_id',
        'short_description',
        'is_popular',
        'is_featured'
        ];


    protected $hidden = [
        'created_at',
        'updated_at',
    ];


    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function subCategory(){
        return $this->belongsTo(Category::class,'subcategory_id');
    }


    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function faqs()
    {
        return $this->hasMany(ProductFaq::class);
    }






}
