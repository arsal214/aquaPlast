<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;


    protected $table = 'contact_us';
    protected $fillable = ['first_name','last_name','email','phone','message','user_type','user_id','subject'];

}
