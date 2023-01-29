<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable {
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts() {
        // Has Many refers to a One To Many relationship.
        // One user to Many Posts.
        return $this->hasMany(Post::class);
    }

    public function permissions() {
        // Belongs to many refers to a Many to Many relationship.
        // Many Users to Many Permissions.
        return $this->belongsToMany(Permission::class);
    }

    public function roles() {
        // Belongs to many refers to a Many to Many relationship.
        // Many Users to Many Roles.
        return $this->belongsToMany(Role::class);
    }
}