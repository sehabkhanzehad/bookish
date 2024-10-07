<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    use HasFactory;

    protected $guarded = [];

    function products(){
        return $this->hasMany(Product::class, 'writer_id');
    }
}
