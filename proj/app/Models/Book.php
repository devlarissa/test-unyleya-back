<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'books_title','release_year','book_autor','book_genre','book_publisher'
    ];
}
