<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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

Route::get('/hotel', function (){
    return view('hotel');
});
Route::get('/villa', function (){
    return view('villa');
});
Route::get('/appartement', function (){
    return view('appartement');
});
Route::get('/booking', function (){
    return view('booking');
});

Route::resource('/hotels', 'App\Http\Controllers\HotelController');
Route::resource('/villas', 'App\Http\Controllers\VillaController');
Route::resource('/apartments', 'App\Http\Controllers\ApartmentController');



Route::get("/", [HomeController::class,"index"]);
Route::get("/users", [AdminController::class,"user"]);
Route::get("/hotelmanage", [AdminController::class,"hotelmanage"]);
Route::get("/villamanage", [AdminController::class,"villamanage"]);
Route::get("/appartementmanage", [AdminController::class,"appartementmanage"]);

Route::get("/deleteuser/{id}", [AdminController::class,"deleteuser"]);

Route::get("/redirects", [HomeController::class,"redirects"]);
Route::get("/book", [AdminController::class,"book"]);
Route::post("/uploadhotel", [AdminController::class,"upload"]);

Route::post("/uploadvilla", [AdminController::class,"uploadvilla"]);
Route::resource('/booking', 'App\Http\Controllers\BookingController');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

