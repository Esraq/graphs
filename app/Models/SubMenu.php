<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;


class SubMenu extends Model
{
    use HasFactory;

    protected $table = 'sub_menus';

    public function menu()
    {
        return $this->belongsTo('App\Models\Menu');
    }
}
