<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'description',
        'display_order',
        'status',
    ];
}
