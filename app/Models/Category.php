<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Model Relationships -----------------------------------------------------
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'mentor_id');
    }
}
