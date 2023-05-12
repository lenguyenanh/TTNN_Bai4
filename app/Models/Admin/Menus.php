<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $table = 'menus';
    protected $fillable = [
        'title',
        'url',
        'id_parent',
    ];
}
