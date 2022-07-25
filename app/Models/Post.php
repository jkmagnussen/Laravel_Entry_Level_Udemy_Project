<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends Model {
   
    // use HasFactory;

    protected $table = 'posts';

    // Mass assignment - 
    
    protected $fillable = [
        'title',
        'body',
        'is_admin'
    ];
}