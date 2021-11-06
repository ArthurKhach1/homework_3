<?php

use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
});

// commit 2 test

Route::get('home',function () {
    return view("home");
});

use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CarsController;
Route::get('/login', [UserController::class,'getLogin'])->name("login") ;
//Route::post('/login', [UserController::class,'postLogin']) ;
Route::post('/login', [CarsController::class,'postList'])->name('list') ;
//Route::post('/login',[PhotoController::class,'show'])->name('photo.list');

Route::get('/sign-up', [UserController::class,'getSignUp']) ;
Route::post('/sign-up', [UserController::class,'store']) ;


Route::group(['middleware'=>['loggedIn']], function (){
    Route::get('users',[UserController::class,'getUsers'])->name('users.list');
    Route::get('allProd',[ProductController::class,'getProd'])->name('allProd');
    Route::post('/saveprod', [ProductController::class,'postSaveProd']) ;
    Route::get('/saveprod', [ProductController::class,'getSaveProd']) ;
    Route::get('/feed', [DashboardController::class,'getFeed']) ;
    Route::post('/logout', [UserController::class,'logout']) ;


    Route::post('/cars', [CarsController:: class,'postCars']) ;
    Route::get('/cars', [CarsController::class,'getCars']) ;

    Route::get('/list', [CarsController::class,'getList']) ;

    Route::get('users/edit',[UserController::class,'edit'])->name('users.edit');
    Route::put('users',[UserController::class,'update']);
    Route::delete('users',[UserController::class,'delete']);

    Route::get('photos/create',[PhotoController::class,'edit'])->name('photo.create');
    Route::post('photos/list',[PhotoController::class,'show'])->name('photo.list');
    Route::get('photos/list',[PhotoController::class,'store'])->name('photo.show');
});






