<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsHomePageController;
use App\Http\Controllers\ShopCartController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\PostController;



Route::get('/', EventsHomePageController::class)->name('home.index');
Route::get('/contact', function () {return view('contact');})->name('contact.index');
Route::get('/faq', function () {return view('faq');})->name('faq.index');

//ShopCartController
Route::get('/shopcart/{id}', [ShopCartController::class, 'show'])->name('shopcart.index');

//TicketController
Route::post('/shopcart/submit', [TicketController::class, 'buy'])->name('shopcart.submit');

Route::get('/tour-guides', function () {return view('tourGuides');})->name('tourGuides.index');
Route::get('/excursions', function () {return view('excursions');})->name('excursions.index');

//EventController
Route::get('/event-info/{id}', [EventController::class, 'show'])->name('event.show');

//HotelController
Route::get('/hotels', [HotelController::class, 'index'])->name('hotels.index');
Route::get('/hotels/{id}', [HotelController::class, 'show'])->name('hotels.show');

Route::get('/stories', function () {return view('stories');})->name('stories.index');

//CatalogController
Route::get('/catalog', [EventController::class, 'index'])->name('catalog.index');

//PayController - Платежи
Route::post('/shopcart/pay', [PayController::class, 'create'])->name('pays.create');
Route::get('/shopcart/pay/{orderId}', [PayController::class, 'createTicket'])->name('pays.createTicket')->middleware('signed');

//Админка
Route::get('/dashboard', function () {return view('dashboard.dashboard');})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/createPost', [PostController::class, 'create'])->middleware(['auth', 'verified'])->name('posts.create');
Route::post('/dashboard/createPost', [PostController::class, 'store'])->middleware(['auth', 'verified'])->name('posts.store');
Route::get('/dashboard/indexPost', [PostController::class, 'index'])->middleware(['auth', 'verified'])->name('posts.index');

require __DIR__.'/auth.php';