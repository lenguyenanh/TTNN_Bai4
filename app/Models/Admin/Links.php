<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    protected $table = 'links';
    protected $fillable = [
        'title',
        'url',
    ];
}
