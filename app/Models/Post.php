<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Descriptor\Descriptor;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'body',
        'is_active',
        'thumb',
        'slug'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}