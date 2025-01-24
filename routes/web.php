<?php
// Importa el orden de las rutas

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

Route::get('/', function () {
    return view('principal');
});

Route::get('avisos', function () {
    //Mostrar vista aviso.blade.php
    return view('aviso');
});

Route::get('/agregar', [CursoController::class, 'create']) -> name('create');

Route::get('cursos', function () {
    return "Bienvenido a la página de cursos";
});

Route::get('sesiones/{sesion}', function ($sesion) {
    return "Ingresaste a la sesión numero:  $sesion";
});

Route::get('alumnos/{carrera}/{asignatura}', function ($carrera, $asignatura=null) {
    if($asignatura){
        return "Bienvenido a la carrera: $carrera, asignatura: $asignatura";
    }else{
        return "Bienvenido a la carrera: $carrera";
    }
});


/* 
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\TiendaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/', InicioController::class);
Route::get('productos', [TiendaController::class, 'index']);
Route::get('productos/crear', [TiendaController::class, 'crear']);
Route::get('productos/mostrar/{producto?}', [TiendaController::class, 'mostrar']);
 */
