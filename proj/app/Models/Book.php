<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $timestamps = true;
    public $primaryKey= "id_book";
    protected $fillable = [
        'book_title','release_year','id_autor','id_genre','id_publisher'
    ];
}

