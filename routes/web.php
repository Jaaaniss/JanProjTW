<?php

use App\Http\Controllers\AddController;
use App\Http\Controllers\VansController;
use App\Http\Controllers\NikeController;
use App\Http\Controllers\AdidasController;
use App\Http\Controllers\DestroyController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NBController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\UpdateController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/start_pages/sakums');
});

Route::get('/search_size', function () {
    return view('search_size');
});

Route::get('/auth/user/user_profile', function () {
    return view('/auth/user/user_profile');
});

// Paroles mainisanai
Route::get('auth/user/change-password', [HomeController::class, 'changePassword'])->name('change-password');
Route::post('auth/user/change-password', [HomeController::class, 'updatePassword'])->name('update-password');


Route::get('/start_pages/size_converter',[VansController::class,'vans']);

Route::get('/enter_size',[VansController::class,'vans2']);

Route::get('/vanssize/{size}',[VansController::class,'index']);
Route::get('/nikesize/{size}',[NikeController::class,'index']);
Route::get('/adidassize/{size}',[AdidasController::class,'index']);
Route::get('/nbsize/{size}',[NBController::class,'index']);


Route::POST('/enter_size',[SizeController::class,'insert']);


Route::get('view-records','StudViewController@index');


// Updates users data in profile page
    Route::put('update_user/{id}', [UpdateController::class, 'update_profile']);


Route::middleware(['auth','role:Admin'])->name('admin.')->group(function () {

    Route::get('/manage_tables/manage_vans', [VansController::class, 'vans3']);
    Route::get('/manage_tables/manage_nike', [VansController::class, 'nike3']);
    Route::get('/manage_tables/manage_adidas', [VansController::class, 'adidas3']);
    Route::get('/manage_tables/manage_nb', [VansController::class, 'newbalance3']);
    Route::get('/manage_tables/manage_users', [VansController::class, 'users3']);

    Route::get('/manage_tables/add/add', [AddController::class, 'create']);
    Route::post('/manage_tables/add/add', [AddController::class, 'storeAnything']);


    Route::get('manage_tables/edit/edit/{id}/{company}', [EditController::class, 'editAnything']);
    Route::get('manage_tables/edit/edit_users/{id}', [EditController::class, 'edit_user']);


    Route::put('update/{id}/{company}', [UpdateController::class, 'updateAnything']);
    Route::put('update/{id}', [UpdateController::class, 'update_user']);


    Route::delete('delete/{id}/{company}', [DestroyController::class, 'destroyAnything']);
    Route::delete('delete/{id}', [DestroyController::class, 'destroy_user']);

});
