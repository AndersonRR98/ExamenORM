<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    /** @use HasFactory<\Database\Factories\EmpleadoFactory> */
    use HasFactory;

      public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

      public function habilidades()
    {
        return $this->belongsToMany(Habilidades::class ,'empleado_habilidades','empleado_id','habilidad_id');
    }
     public function hijo()
    {
        return $this->hasMany(Hijo::class);
    }
}
