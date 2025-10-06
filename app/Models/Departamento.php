<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    /** @use HasFactory<\Database\Factories\DepartamentoFactory> */
    use HasFactory;

      public function centro()
    {
        return $this->belongsTo(Centro::class);
    }
      public function empleado()
    {
        return $this->hasMany(Empleado::class);
    }
}
