<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $fillable = [
    'autor_name','date_birth','sex_genre','nationality'   
    ]; 
}
