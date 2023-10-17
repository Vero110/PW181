<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;
/*
//Rutas individuales para controlador
Route::get('/', [diarioController::class, 'metodoInicio'])->name('apodoInicio');
Route::get('/form', [diarioController::class, 'metodoform'])->name('apodoForm');
Route::get('/memories', [diarioController::class, 'metodomemories'])->name('apodoMemories');
*/

//Rutas agrupadas para controlador 
Route::controller(diarioController::class)->group(function(){
    Route::get('/', 'metodoInicio')->name('apodoInicio');
    Route::get('/form', 'metodoform')->name('apodoForm');
    Route::get('/memories', 'metodomemories')->name('apodoMemories');
});




#rutas tipo view
#Route::view('/', 'welcome')->name('apodoInicio');
#Route::view('/form', 'formulario')->name('apodoForm');
#Route::view('/memories', 'recuerdos')->name('apodoMemories'); 
