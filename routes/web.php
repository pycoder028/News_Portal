<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\DetailsPageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingPageController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
});
 */

Route::get('/',[HomeController::class,'index']);
Route::get('/listing',[ListingPageController::class,'index']);
Route::get('/details',[DetailsPageController::class,'index']);

Route::group(['prefix' => 'back'], function(){

    Route::get('/', [DashboardController::class,'index']);
    Route::get('/category', [CategoryController::class,'index']);


});