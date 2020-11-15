<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
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
// Route::get('/layout', function () {
//     return view('layouts/layout');
// });
Route::get('/layout', function () {
     return view('layouts/layout');
 });
Route::get('/login', function () {
     return view('login');
 });
Route::get('/about_us', function () {
     return view('about_us');
 });
Route::get('/shop', function () {
     return view('shop');
 });
Route::get('/gallery', function () {
     return view('gallery');
 });
Route::get('/contact_us', function () {
     return view('contact_us');
 });

Route::get('/about', [HomeController::class, 'showAbout']);
Route::get('/contact', [HomeController::class, 'showContact']);


Route::get('/gallery',  [GalleryController::class, 'index']);
Route::get('/gallery/create',  [GalleryController::class, 'create']);

Route::get('/shop', [ShopController::class, 'index']);
Route::get('/shop/create', [ShopController::class, 'create']);
Route::post('/shop', [ShopController::class, 'store']);
Route::get('/shop/{shop}', [ShopController::class, 'show']);

Route::get('/pelanggan', function () {
     return view('pelanggan');
 });
Route::get('/pemasok', function () {
     return view('pemasok');
 });
Route::get('/login', [AuthController::class, 'showLogin']);

