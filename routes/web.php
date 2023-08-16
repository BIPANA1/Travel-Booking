<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.welcome');
});

Route::get('/about',[FrontendController::class,'about']);
Route::get('/package',[FrontendController::class,'package']);
Route::get('/book',[BookController::class,'book']);


Auth::routes();


Route::group(['middleare'=>["auth","admin"]],function(){ 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// destination 
Route::get('/destination',[DestinationController::class,'index']);
Route::post('/create-destination',[DestinationController::class,'create']);
Route::get('/show-destination',[DestinationController::class,'show']);
Route::get('/destroy/{id}',[DestinationController::class,'destroy']);

Route::get('/edit/{id}',[DestinationController::class,'edit']);
Route::post('/edit-destination/{id}',[DestinationController::class,'update']);

// show booking list
Route::get('/booking',[BookController::class,'Booking']);

});


Route::group(['middleare'=>["auth"]],function(){
   
Route::get('/about',[FrontendController::class,'about']);
Route::get('/package',[FrontendController::class,'package']);
Route::get('/book',[BookController::class,'book']);
Route::post('/booking',[BookController::class,'create']);
// show booked details
Route::get('/details',[BookController::class,'details']);

});