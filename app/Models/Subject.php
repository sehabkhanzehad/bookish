<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $guarded = [];

    function user(){
        return $this->belongsTo(User::class);
    }

    function products(){
        return $this->hasMany(Product::class, 'subject_id');
    }
}
