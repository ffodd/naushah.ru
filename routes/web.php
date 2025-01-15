<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsHomePageController;
use App\Http\Controllers\ShopCartController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\PayController;

Route::get('/', EventsHomePageController::class)->name('home.index');
Route::get('/contact', function () {return view('contact');})->name('contact.index');
Route::get('/shopcart/{id}', [ShopCartController::class, 'show'])->name('shopcart.index');
Route::post('/shopcart/submit', [TicketController::class, 'buy'])->name('shopcart.submit');

Route::get('/tour-guides', function () {return view('tourGuides');})->name('tourGuides.index');
Route::get('/excursions', function () {return view('excursions');})->name('excursions.index');

//EventController
Route::get('/event-info/{id}', [EventController::class, 'show'])->name('event.show');

//HotelController
Route::get('/hotels', [HotelController::class, 'index'])->name('hotels.index');
Route::get('/hotels/{id}', [HotelController::class, 'show'])->name('hotels.show');

Route::get('/stories', function () {return view('stories');})->name('stories.index');

Route::get('/event/sie30908982334982039849788', function () {return view('event');})->name('event');

//CatalogController
Route::get('/catalog', [EventController::class, 'index'])->name('catalog.index');

//PayController - Платежи
Route::post('/shopcart/pay', [PayController::class, 'create'])->name('pays.create');

//preview
Route::get('/preview-1', function () {return view('prew-1');});
Route::get('/preview-4', function () {return view('prew-4');});