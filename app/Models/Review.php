<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use App\Models\User;


class Review extends Model
{
  use HasFactory;

  public function books()
  {
    return $this->belongsToMany(Book::class);
  }

  public function users()
  {
    return $this->belongsToMany(User::class);
  }
}
