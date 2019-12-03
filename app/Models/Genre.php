<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public $timestamps = true;
    public $primaryKey= "id_genre";
    protected $fillable = [
        'literary_genre'
    ];
}
