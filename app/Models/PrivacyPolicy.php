<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivacyPolicy extends Model
{
    use HasFactory;


    protected $table = 'privacy_policy';

    protected $fillable = ['title','description','image'];

    public function getImageAttribute($value)
    {
        return $value ? '/images/privacy/'.$value : null;
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

}
