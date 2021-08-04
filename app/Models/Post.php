<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'title',
        'description',
        'body',
        'category_id',
    ];

    protected $with = ['author', 'category'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeFilter(Builder $query, array $filters)
    {
        $query->when(
            $filters['search'] ?? false,
            fn ($query, $search) =>
            $query
                ->where('title', 'like', "%{$search}%")
                ->orWhere('body', 'like', "%{$search}%")
        );
    }
}
