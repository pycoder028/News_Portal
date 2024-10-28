<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingPageController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
});
 */

Route::get('/',[HomeController::class,'index']);
Route::get('/listing',[ListingPageController::class,'index']);