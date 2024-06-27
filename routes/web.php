<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CorporateController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestController;
use Barryvdh\Debugbar\DataCollector\EventCollector;
use Illuminate\Support\Facades\Route;

// Route::get('test', [TestController::class, 'index']);

// Home
Route::prefix('/')->name('home.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/kimlik-dogrulama', [HomeController::class, 'authentications'])->name('authentication');
});

// Category
Route::prefix('kategori')->name('category.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/{id?}', [CategoryController::class, 'show'])->name('show');
});

// Corporate
Route::prefix('kurumsal')->name('corporate.')->group(function () {
    Route::get('/hakkimizda', [CorporateController::class, 'about'])->name('about');
    Route::get('/referanslar', [CorporateController::class, 'testimonials'])->name('testimonials');
    Route::get('/gizlilik-politikasi', [CorporateController::class, 'privacy'])->name('privacy');
    Route::get('/kullanim-kosullari', [CorporateController::class, 'terms'])->name('terms');
    Route::get('/sikca-sorulan-sorular', [CorporateController::class, 'faq'])->name('faq');
    Route::get('/kurucular', [CorporateController::class, 'founders'])->name('founders');
});

// Contact
Route::prefix('iletisim')->name('contact.')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('index');
    Route::post('/', [ContactController::class, 'store'])->name('post');
});

// Project
Route::prefix('projeler')->name('project.')->group(function () {
    Route::get('/', [ProjectController::class, 'index'])->name('index');
    Route::get('/{id?}', [ProjectController::class, 'show'])->name('show');
});

// Service
Route::prefix('hizmetler')->name('service.')->group(function () {
    Route::get('/', [ServiceController::class, 'index'])->name('index');
    Route::get('/{id?}', [ServiceController::class, 'show'])->name('show');
});

// Event
Route::prefix('etkinlikler')->name('event.')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('index');
    Route::get('/{id?}', [EventController::class, 'show'])->name('show');
});

// Blog
Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/{id?}', [BlogController::class, 'show'])->name('show');
});

// Gallery
Route::prefix('galeri')->name('gallery.')->group(function () {
    Route::get('/{type}', [GalleryController::class, 'index'])->name('index');
    Route::get('/{type}/{id?}', [GalleryController::class, 'show'])->name('show');
});

// Newsletter
Route::prefix('bulten')->name('newsletter.')->group(function () {
    Route::post('/', [NewsletterController::class, 'store'])->name('store');
    Route::get('/iptal/{token}', [NewsletterController::class, 'unsubscribe'])->name('unsubscribe');
});
