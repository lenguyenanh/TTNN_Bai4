<?php
namespace App\Models\Web;

use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model
{
    protected $table = 'menus';
    protected $fillable = ['title', 'id_parent', 'url','order'];

    public function children()
    {
        return $this->hasMany(MenuModel::class, 'id_parent');
    }

    public function parent()
    {
        return $this->belongsTo(MenuModel::class, 'id_parent');
    }
}
