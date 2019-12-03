<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    public $timestamps = true;
    public $primaryKey= "id_publisher";
    protected $fillable = [
        'publisher_name'
    ];
}
