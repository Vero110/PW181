<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;

route::get('/', [diarioController::class, 'metodoInicio'])->name('apodoInicio');

route::get('/form', [diarioController::class, 'metodoform'])->name('apodoForm');

route::get('/memories', [diarioController::class, 'metodomemories'])->name('apodoMemories');



#rutas tipo view
#Route::view('/', 'welcome')->name('apodoInicio');
#Route::view('/form', 'formulario')->name('apodoForm');
#Route::view('/memories', 'recuerdos')->name('apodoMemories'); 
