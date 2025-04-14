<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

    use HasFactory;

    protected $fillable = ['name','image','status','designation'];
  
  
      public function getImageAttribute($value)
      {
          return $value ? '/images/teams/'.$value : null;
      }
  
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
}
