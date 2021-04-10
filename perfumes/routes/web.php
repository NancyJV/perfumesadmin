<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministradoresController;



//route::get('vista', [AdministradoresController::class,'vista'])->name('vista');

//route::get('ejemplo', [AdministradoresController::class,'ejemplo'])->name('ejemplo');




route::get('reporteadmin',[AdministradoresController::class,'reporteadmin'])->name('reporteadmin');

route::get('altaadmin',[AdministradoresController::class,'altaadmin'])->name('altaadmin');
route::POST('guardaradmin',[AdministradoresController::class,'guardaradmin'])->name('guardaradmin');

route::get('desactivaradmin/{ClaveAdministrador}',[AdministradoresController::class,'desactivaradmin'])->name('desactivaradmin');
route::get('activaradmin/{ClaveAdministrador}',[AdministradoresController::class,'activaradmin'])->name('activaradmin');
route::get('borraradmin/{ClaveAdministrador}',[AdministradoresController::class,'borraradmin'])->name('borraradmin');

route::get('modificaradmin/{ClaveAdministrador}',[AdministradoresController::class,'modificaradmin'])->name('modificaradmin');
route::post('cambiaradmin',[AdministradoresController::class,'cambiaradmin'])->name('cambiaradmin');


route::get('eloquent',[AdministradoresController::class,'eloquent'])->name('eloquent');




Route::get('/', function () {
    return view('welcome');
});