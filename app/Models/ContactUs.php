<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;


    protected $table = 'contact_us';
    protected $fillable = ['title', 'background_image', 'email', 'phone', 'location'];
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
        return $value ? '/images/contactUs/' . $value : null;
    }
}
