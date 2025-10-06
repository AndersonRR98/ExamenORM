<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habilidades extends Model
{
    /** @use HasFactory<\Database\Factories\HabilidadesFactory> */
    use HasFactory;
         protected $table ='habilidades';


            protected $fillable = [
        'descripcion'];
        

       public function empleados()
    {
        return $this->belongsToMany(Empleado::class ,'empleado_habilidades','empleado_id','habilidad_id');
    }
}
