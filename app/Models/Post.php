<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends Model {

    use SoftDeletes;
   
    // use HasFactory;

    protected $table = 'posts';

    protected $dates = ['deleted_at'];
    
    protected $fillable = [
        'title',
        'body',
        'is_admin'
    ];
} 