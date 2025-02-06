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

use App\Http\Controllers\TestController;


Route::get('/', EventsHomePageController::class)->name('home.index');
Route::get('/contact', function () {return view('contact');})->name('contact.index');
Route::get('/faq', function () {return view('faq');})->name('faq.index');
Route::get('/agreement', function () {return view('agreement');})->name('agreement.index');

Route::get('/pupa', [TestController::class, 'test'])->name('test');

Route::get('/preview-1', function () {return view('prew-1');});
Route::get('/preview-4', function () {return view('prew-4');});

//ShopCartController
Route::get('/shopcart/{id}', [ShopCartController::class, 'show'])->name('shopcart.index');

//TicketController
Route::post('/shopcart/submit', [TicketController::class, 'buy'])->name('shopcart.submit');

Route::get('/tour-guides', function () {return view('tourGuides');})->name('tourGuides.index');
Route::get('/excursions', function () {return view('excursions');})->name('excursions.index');

//EventController
Route::get('/event-info/{id}', [EventController::class, 'show'])->name('event.show');

//PostController
Route::get('/posts', [PostController::class, 'indexFront'])->name('posts.index');
Route::get('/posts/{id}', [PostController::class, 'showFront'])->name('posts.show');

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
    //Статьи
Route::get('/dashboard/indexPost', [PostController::class, 'indexBack'])->middleware(['auth', 'verified'])->name('postsBack.index');
Route::get('/dashboard/createPost', [PostController::class, 'createBack'])->middleware(['auth', 'verified'])->name('postsBack.create');
Route::post('/dashboard/createPost', [PostController::class, 'storeBack'])->middleware(['auth', 'verified'])->name('postsBack.store');
Route::get('/dashboard/editPost/{id}', [PostController::class, 'editBack'])->middleware(['auth', 'verified'])->name('postsBack.edit');
Route::post('/dashboard/updatePost', [PostController::class, 'updateBack'])->middleware(['auth', 'verified'])->name('postsBack.update');
//События
Route::get('/dashboard/indexEvent', [EventController::class, 'indexBack'])->middleware(['auth', 'verified'])->name('eventsBack.index');
Route::get('/dashboard/editEvent/{id}', [EventController::class, 'editBack'])->middleware(['auth', 'verified'])->name('eventsBack.edit');
Route::post('/dashboard/updateEvent', [EventController::class, 'updateBack'])->middleware(['auth', 'verified'])->name('eventsBack.update');

require __DIR__.'/auth.php';

