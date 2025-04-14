<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;


    protected $fillable = ['title','short_description','our_story','our_vision','our_aim','background_image'];

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


    public function getBackgroundImageAttribute($value)
    {
        return $value ? '/images/aboutUs/'.$value : null;
    }

}
