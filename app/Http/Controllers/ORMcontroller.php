<?php

namespace App\Http\Controllers;

use App\Models\Centro;
use App\Models\Departamento;
use App\Models\Empleado;
use App\Models\Habilidades;
use App\Models\Hijo;
use Illuminate\Http\Request;

class ORMcontroller extends Controller
{
    public function centroRelations()
    {
        $centros = Centro::with([
            'departamento',
            'departamento.empleado',
            
        ])->get();

        return response()->json($centros);
    }


    public function departamentoRelations()
    {
        $departamentos = Departamento::with([
            'centro',
            'empleado',
            
        ])->get();

        return response()->json($departamentos);
    }


       public function empleadoRelations()
       {
         $empleados =Empleado::with([

               'departamento',
               'habilidades',
               'hijo',
             
         ])->get();

          return response()->json($empleados);
     }

     public function habilidadesRelations()
     {
         $habilidades = Habilidades::with([
             'empleados',
         ])->get();

         return response()->json($habilidades);
     }

     public function hijoRelations()
     {
         $hijos = Hijo::with([
            'empleado',
             'empleado.habilidades',
         ])->get();

         return response()->json($hijos);
     }

    
}
