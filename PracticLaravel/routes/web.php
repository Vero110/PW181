<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;

//Rutas individuales para controlador
Route::get('/', [diarioController::class, 'metodoInicio'])->name('apodoInicio');
Route::get('/form', [diarioController::class, 'metodoFormulatio'])->name('apodoForm');
Route::get('/memories', [diarioController::class, 'metodoRecuerdos'])->name('apodoMemories');

//ruta para el request post del recuerdo
Route::post('/guardarRecuerdo',[diarioController::class,'guardarRecuerdo'])->name('guardar');

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
