<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserCrudController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

//main page
Route::get('/',
    [   \App\Http\Controllers\HomeController::class,"index" ]
)->name('mainPage');

//group of named routes for user's controller with group by name
Route::name('user.')->group(function () {
    Route::controller(UserCrudController::class)->group(function () {
    Route::post('/reg', 'userRegistration')->name('userReg');
    Route::get('/show', "userShowing")->name('userShow');
    Route::post('/auth', "userAuthentication")->name('userAuth');;
    Route::delete('/del', "userDeletion")->name('userDel');
});
});

//tasks
Route::resource('/tasks', TaskController::class);

//db check connection
Route::get('/db',
    [   \App\Http\Controllers\DbController::class,"index" ]
);


