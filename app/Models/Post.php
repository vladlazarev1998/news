<?php

namespace App\Models;

use App\Enum\PostStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'cropped_body',
        'body',
        'status'
    ];

    const UPDATED_AT = null;

    public function scopeActive($query)
    {
        return $query->where('status', PostStatus::ACTIVE);
    }
}
