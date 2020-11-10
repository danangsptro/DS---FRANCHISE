<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $guarded = [];

    public function merchant(){
        return $this->hasMany(merchant::class, 'foreign_kategori','id');
    }

    public function form(){
        return $this->hasMany(form::class, 'foreign_form', 'id');
    }
}
