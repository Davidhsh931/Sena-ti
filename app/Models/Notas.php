<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notas extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class);
    }
}
