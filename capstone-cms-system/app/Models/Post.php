<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    use HasFactory;

    // should be changed to protected for production, this is a security issue 
    protected $guarded = [];


    public function user() {
        return $this->belongsTo(User::class);
    }
}