<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    protected $fillable = 
    [
        'name',
        'order',
    ];

    protected $casts = 
    [
        'name' => 'array',
        'order' => 'array',
    ];

    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
