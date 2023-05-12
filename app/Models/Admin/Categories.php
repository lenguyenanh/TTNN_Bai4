<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'description',
        'display_order',
        'status',


    ];
    public function posts()
    {
        return $this-> hasMany(Post::class);
    }
}
