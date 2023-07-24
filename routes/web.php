<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\NewsletterController;
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

//first change
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

//Add subscriber email
Route::post('/add-subscriber-email', [NewsletterController::class, 'addNewsletterSubscriber'])->name('newsletterSubscriber');

//Contact us details
Route::post('/add-contact-us-details', [ContactUsController::class, 'contactUsDetails'])->name('contactUs');

/**
 * Redirect Routes
 *  - /admin  -/dashboard
 */


Route::redirect('admin', 'admin/dashboard');
Route::redirect('dashboard', 'admin/dashboard');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->prefix('admin')->group(function () {
    Route::get('/dashboard', Admin\Dashboard::class)->name('admin.dashboard');


    Route::prefix('photos')->group(function(){
        Route::get('/', Admin\Photos\Index::class)->name('admin.photos.index');
        Route::get('/create', Admin\Photos\Create::class)->name('admin.photos.create');
        Route::get('/{id}/edit', Admin\Photos\Edit::class)->name('admin.photos.edit');
    });
    Route::prefix('photo_categories')->group(function(){
        Route::get('/', Admin\PhotoCategories\Index::class)->name('admin.photo_categories.index');
        Route::get('/create', Admin\PhotoCategories\Create::class)->name('admin.photo_categories.create');
        Route::get('/{id}/edit', Admin\PhotoCategories\Edit::class)->name('admin.photo_categories.edit');
    });

    Route::get('contacts', Admin\Contacts\Index::class)->name('admin.contacts.index');
    Route::get('subscribers', Admin\Subscribers\Index::class)->name('admin.subscribers.index');

    Route::prefix('site-images')->group(function(){

    });

});
