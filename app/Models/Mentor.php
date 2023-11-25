<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\User;

class Mentor extends Model
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
