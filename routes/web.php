<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsHomePageController;
use App\Http\Controllers\ShopCartController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CatalogController;

Route::get('/', EventsHomePageController::class)->name('home.index');
Route::get('/shopcart/{id}', [ShopCartController::class, 'show'])->name('shopcart.index');
Route::post('/shopcart/submit', [TicketController::class, 'buy'])->name('shopcart.submit');

Route::get('/tour-guides', function () {return view('tourGuides');})->name('tourGuides.index');
Route::get('/excursions', function () {return view('excursions');})->name('excursions.index');

//EventController
Route::get('/event-info/{id}', [EventController::class, 'show'])->name('event.show');

Route::get('/stories', function () {return view('stories');})->name('stories.index');

Route::get('/event/sie30908982334982039849788', function () {return view('event');})->name('event');

//CatalogController
Route::get('/catalog', [EventController::class, 'index'])->name('catalog.index');
