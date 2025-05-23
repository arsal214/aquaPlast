<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportQuery extends Model
{
    use HasFactory;

     protected $table = 'support_queries';

    protected $fillable = ['phone','name','subject','message','email'];
}
