<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Model;

class LinkModel extends Model
{
    protected $table = 'links';
    protected $fillable = [
        'title',
        'url',
    ];
}
