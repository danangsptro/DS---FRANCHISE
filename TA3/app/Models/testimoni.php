<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class testimoni extends Model
{
    protected $guarded = [];

    public function jenis_testimoni()
    {
        return $this->belongsTo(jenis_testimoni::class, 'foreign_testimoni', 'id');
    }
}
