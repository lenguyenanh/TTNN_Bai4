<?php

namespace App\Models\Web;

use App\User;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'content',
        'category_id',
        'author_id',
        'display_order',
        'status',
    ];

    public function category_id(){
        return $this->belongsTo(CategoryModel::class, 'category_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'author_id');
    }
}
