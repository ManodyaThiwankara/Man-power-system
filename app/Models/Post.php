<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Post extends Model
{
    use HasFactory;


   // public function comments()
   // {
   //     return $this->hasMany(Comment::class)->whereNull('parent_id');
  //  }

  public function comments()
  {
      return $this->hasMany(Comment::class)->whereNull('parent_id');
  }

}
