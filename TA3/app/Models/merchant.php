<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class merchant extends Model
{
    protected $guarded = [];

    public function kategori(){
        return $this->belongsTo(kategori::class, 'foreign_kategori','id');
    }
}
