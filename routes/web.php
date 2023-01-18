<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin;

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
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');
Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::prefix('photos')->group(function(){
        Route::get('/', Admin\Photos\Index::class)->name('admin.photos.index');
        Route::get('/create', Admin\Photos\Create::class)->name('admin.photos.create');
        Route::get('/{id}/edit', Admin\Photos\Edit::class)->name('admin.photos.edit');
    });

    Route::prefix('site-images')->group(function(){

    });

});
