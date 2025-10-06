<?php
namespace App\Http\Controllers;

use App\Models\Hijo;
use Illuminate\Support\Facades\Route;

Route::get('/orm/centros', [ORMController::class, 'centroRelations']);
Route::get('/orm/departamentos', [ORMController::class, 'departamentoRelations']);
Route::get('/orm/empleados', [ORMController::class, 'empleadoRelations']);
Route::get('/orm/habilidades', [ORMController::class, 'habilidadesRelations']);
Route::get('/orm/hijo', [ORMController::class, 'hijoRelations']);

Route::resource('habilidades', HabilidadController::class);
Route::resource('hijos', HijoController::class);

