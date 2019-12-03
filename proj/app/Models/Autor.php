<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    public $timestamps = true;
    public $primaryKey= "id_autor";
    protected $fillable = [
    'autor_name','date_birth','sex_genre','nationality'   
    ]; 
}
