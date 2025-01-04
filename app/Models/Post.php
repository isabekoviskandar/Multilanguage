<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    protected $fillable = 
    [
        'category_id',
        'title',
        'description',
    ];

    protected $casts = 
    [
        'title'=>'array',
        'description' => 'array',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
