<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/admin', function () {
     return view('layouts/admin');
 });
Route::get('/about_us2', function () {
     return view('about_us2');
 });
Route::get('/contact_us2', function () {
     return view('contact_us2');
 });
Route::get('/shop2', function () {
     return view('shop2');
 });
Route::get('/gallery2', function () {
     return view('gallery2');
 });
Route::get('/pelanggan', function () {
     return view('pelanggan');
 });
Route::get('/pemasok', function () {
     return view('pemasok');
 });
Route::get('/login2', function () {
     return view('login2');
 });
