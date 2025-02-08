<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class HomePage extends Model
{
    use HasFactory;

    protected $table = 'homepage_sliders';

    protected $fillable = ['title', 'description', 'thumbnail', 'image_1', 'image_2', 'image_3', 'image_4', 'image_5'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    public function getThumbnailAttribute($value)
    {
        return $value ? '/images/homepage/' . $value : null;
    }


}
