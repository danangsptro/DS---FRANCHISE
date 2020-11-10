<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    protected $guarded = [];

    public function jenis_artikel()
    {
        return $this->belongsTo(jenis_artikel::class, 'foreign_artikel', 'id');
    }
}
