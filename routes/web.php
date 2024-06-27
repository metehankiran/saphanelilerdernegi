<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('test', [TestController::class, 'index']);

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::post('/contact', [HomeController::class, 'sendContact'])->name('home.contact.post');

// Project
Route::get('/projects', [HomeController::class, 'project'])->name('home.project');
Route::get('/projects/{id?}', [HomeController::class, 'projectDetail'])->name('home.project.show');

// Services
Route::get('/services', [HomeController::class, 'service'])->name('home.service');
Route::get('/services/{id?}', [HomeController::class, 'serviceDetail'])->name('home.service.show');

Route::get('/faq', [HomeController::class, 'faq'])->name('home.faq');
Route::get('/founders', [HomeController::class, 'founders'])->name('home.founders');

Route::get('/events', [HomeController::class, 'events'])->name('home.events');
Route::get('/events/{id?}', [HomeController::class, 'eventDetail'])->name('home.events.show');

Route::get('/category/{id?}', [HomeController::class, 'category'])->name('home.category.show');
Route::get('/authentications', [HomeController::class, 'authentications'])->name('home.authentications');
Route::get('testimonials', [HomeController::class, 'testimonials'])->name('home.testimonials');

Route::get('/404', [HomeController::class, 'notFound'])->name('home.notFound');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('home.privacyPolicy');
Route::get('/terms-and-conditions', [HomeController::class, 'termsAndConditions'])->name('home.termsAndConditions');

Route::get('/blogs', [HomeController::class, 'blogs'])->name('home.blogs');
Route::get('/blogs/{id?}', [HomeController::class, 'blogDetail'])->name('home.blogs.show');
