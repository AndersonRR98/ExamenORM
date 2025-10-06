<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hijo extends Model
{
    /** @use HasFactory<\Database\Factories\HijoFactory> */
    use HasFactory;

    
            protected $fillable = [
        'nombre',
        'fecha_nacimiento',
         'empleado_id'];

     public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}
