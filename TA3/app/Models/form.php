<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    protected $guarded = [];

    public function kategori(){
        return $this->belongsTo(kategori::class, 'foreign_form', 'id');
    }
}
