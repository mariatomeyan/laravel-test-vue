<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
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


Auth::routes();



Route::middleware('auth')->group(function () {

    Route::get('/user', function (Request $request) {
        return response()->json( [ 'user'=>  $user = $request->user() ?? false ] );
    });

    Route::resource('todos', \App\Http\Controllers\TodoController::class);
    Route::post('todo/{todo}/comment',  [\App\Http\Controllers\TodoController::class, 'comment']);
    Route::resource('category', \App\Http\Controllers\CategoryController::class);
});


Route::get('/auth', function (Request $request) {
    return response()->json( [ 'success'=>  $user = $request->user() ? true : false ] );
});

Route::get('/route/{route_name}', [HomeController::class, 'checkRoute']);


Route::get('/{any?}', function () {
    return view('index');
});
