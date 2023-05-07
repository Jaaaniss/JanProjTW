<?php

use App\Http\Controllers\AddController;
use App\Http\Controllers\VansController;
use App\Http\Controllers\NikeController;
use App\Http\Controllers\AdidasController;
use App\Http\Controllers\DestroyController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NBController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\UpdateController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


// Atgriež 'sakums' skatu, kad lietotājs atrodas '/' url
Route::get('/', function () {
    return view('/start_pages/sakums');
});

// Atgriež 'check-size' skatu, kad lietotājs atrodas '/check-size' url
Route::get('/check-size', function () {
    return view('check-size');
});

// Atgriež 'user_profile' skatu, kad lietotājs atrodas '/auth/user/user_profile' url
Route::get('/auth/user/user_profile', function () {
    return view('/auth/user/user_profile');
});

// Atgriež 'self-delete-success' skatu, kad lietotājs atrodas '/auth/user/self-delete-success' url
Route::get('/auth/user/self-delete-success', function () {
    return view('/auth/user/self-delete-success');
});



// Atgriež visas zīmolu tabulas uz 'size_converter' skatu
Route::get('/start_pages/size_converter',[VansController::class,'vans']);



// Lietotāja paroles mainisanai
Route::get('auth/user/user_profile', [UserController::class, 'changePassword'])->name('change-password');
Route::post('auth/user/user_profile', [UserController::class, 'updatePassword'])->name('update-password');



// Atgriež skatu balstoties uz to vai lietotājam ir saglabats pedas izmers vai ne
Route::get('/enter_size',[VansController::class,'vans2']);


// Izvelk datus no izmeru tabulam uz 'size_converter' skatu
Route::get('/vanssize/{size}',[VansController::class,'index']);
Route::get('/nikesize/{size}',[NikeController::class,'index']);
Route::get('/adidassize/{size}',[AdidasController::class,'index']);
Route::get('/nbsize/{size}',[NBController::class,'index']);



// Routi autorizētam lietotājam priekš sava profila parvaldisanas
Route::middleware(['auth'])->group(function () {

    // Lietotājs izdzēš sevi no datubāzes
    Route::delete('self-delete', [DestroyController::class, 'destroy_user_from_profile']);

    // Lietotājs atjauno savus datus datubāzē
    Route::put('update_user/{id}', [UpdateController::class, 'update_profile']);

});



// Lietotājs pievieno savam tabulas ierakstam pēdas izmēru
Route::POST('/enter_size',[SizeController::class,'insert']);

// Ļauj piekļūt/attēlot skatā lietotāja pēdas izmēram
Route::get('view-records','ViewSizeController@index');



// Routi adminam priekš tabulu pārvaldīšanas
Route::middleware(['auth','role:Admin'])->name('admin.')->group(function () {


    // Atgriež visas zīmolu tabulas no datubāzes
    Route::get('/manage_tables/manage_Vans', [VansController::class, 'vans3']);
    Route::get('/manage_tables/manage_Nike', [VansController::class, 'nike3']);
    Route::get('/manage_tables/manage_Adidas', [VansController::class, 'adidas3']);
    Route::get('/manage_tables/manage_NewBalance', [VansController::class, 'newbalance3']);
    Route::get('/manage_tables/manage_Users', [VansController::class, 'users3']);


    // Pievieno jaunu izmēru tabulai
    Route::get('/manage_tables/add/add', [AddController::class, 'create']);
    Route::post('/manage_tables/add/add', [AddController::class, 'storeAnything']);


    // Edito esošo ierakstu izmēru tabulai
    Route::get('manage_tables/edit/edit/{id}/{company}', [EditController::class, 'editAnything']);

    // Edito esošo ierakstu lietotaju tabulai
    Route::get('manage_tables/edit/edit_users/{id}', [EditController::class, 'edit_user']);


    // Atjauno un saglabā datubāzē esošo ierakstu izmēru tabulai
    Route::put('update/{id}/{company}', [UpdateController::class, 'updateAnything']);

    // Atjauno un saglabā datubāzē esošo ierakstu lietotaju tabulai
    Route::put('update/{id}', [UpdateController::class, 'update_user']);


    // Izdzēš datubāzē esošo izmēru
    Route::delete('delete/{id}/{company}', [DestroyController::class, 'destroyAnything']);

    // Izdzēš datubāzē esošo lietotāju
    Route::delete('delete/{id}', [DestroyController::class, 'destroy_user']);

});

