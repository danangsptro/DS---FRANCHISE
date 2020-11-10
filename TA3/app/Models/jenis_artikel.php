<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jenis_artikel extends Model
{
    protected $guarded = [];

    public function artikel()
    {
        return $this->hasMany(artikel::class, 'foreign_artikel', 'id');
    }
}
