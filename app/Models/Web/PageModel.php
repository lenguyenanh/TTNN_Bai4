<?php

namespace App\Models\Web;

use App\User;
use Illuminate\Database\Eloquent\Model;

class PageModel extends Model
{
    protected $table = 'pages';
    protected $fillable = [
        'title',
        'content',
        'author_id',
        'slug',
    ];
    public function user(){
        return $this->belongsTo(User::class, 'author_id');
    }
}
