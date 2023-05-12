<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'content',
        'category_id',
        'author_id',
        'display_order',
        'status',
        'slug',
    ];
    public function user()
    {
        return $this-> belongsTo(User::class);
    }

    public function category()
    {
        return $this-> belongsTo(Categories::class);
    }

    public function comments()
    {
        return $this-> hasMany(Comment::class);
    }
}
