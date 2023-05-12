<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $table = 'pages';
    protected $fillable = [
        'title',
        'content',
        'author_id',
        'slug',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
