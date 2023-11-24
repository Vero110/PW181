<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;
use App\Http\Controllers\controllerCrudD;



//Rutas para el nuevo controladorCrudD
Route::get('/recuerdo/create', [controllerCrudD::class, 'create'])->name('recuerdo.create');
//boton para insertar
Route::post('/recuerdo',[controllerCrudD::class,'store'])->name('recuerdo.store');
//ruta nueva
Route::get('/recuerdo', [controllerCrudD::class, 'index'])->name('recuerdo.index');
//ruta de inicio 
Route::get('/', [controllerCrudD::class, 'inicio'])->name('recuerdo.inicio');
//ruta recuerdo, para que se haga la actualizacion de nuestro recuerdo
Route::put('/recuerdo/{id}/confirm',[controllerCrudD::class,'update'])->name('recuerdo.update');
//ruta para eliminar
Route::delete('/recuerdo/{id}', [controllerCrudD::class, 'destroy'])->name('recuerdo.destroy');







//Rutas individuales para controlador
//Route::get('/', [diarioController::class, 'metodoInicio'])->name('apodoInicio');
//Route::get('/form', [diarioController::class, 'metodoFormulatio'])->name('apodoForm');
//Route::get('/memories', [diarioController::class, 'metodoRecuerdos'])->name('apodoMemories');

//ruta para el request post del recuerdo
//Route::post('/guardarRecuerdo',[diarioController::class,'guardarRecuerdo'])->name('guardar');

//Rutas agrupadas para controlador 
/*
Route::controller(diarioController::class)->group(function(){
    Route::get('/', 'metodoInicio')->name('apodoInicio');
    Route::get('/form', 'metodoFormulatio')->name('apodoForm');
    Route::get('/memories', 'metodoRecuerdos')->name('apodoMemories');
});
*/




#rutas tipo view
#Route::view('/', 'welcome')->name('apodoInicio');
#Route::view('/form', 'formulario')->name('apodoForm');
#Route::view('/memories', 'recuerdos')->name('apodoMemories'); 
