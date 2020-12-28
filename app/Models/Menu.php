<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubMenu;

class Menu extends Model
{
    use HasFactory;

    public function submenu()
    {
        return $this->hasMany('App\Models\SubMenu');
    }



}
