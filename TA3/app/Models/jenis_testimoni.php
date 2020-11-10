<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jenis_testimoni extends Model
{
    protected $guarded = [];

    public function testimoni()
    {
        return $this->hasMany(testimoni::class, 'foreign_testimoni', 'id');
    }
}
