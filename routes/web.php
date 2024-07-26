<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ReviewsController;
use App\Models\Articles;
use App\Models\Destinations;
use App\Models\Gallery;
use App\Models\Packages;
use App\Models\Reviews;
use App\Http\Middleware\ThrottleLoginAttempts;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        'title' => 'Your Friendly Woman Guide',
        'destinations' => Destinations::paginate(5),
        'packages' => Packages::all(),
        'gallery' => Gallery::all(),
        'articles' => Articles::limit(5)->get(),
        'reviews' => Reviews::all()
    ]);
});

Route::get('/about-us', function () {
    return view('about',[
        'title' => 'About',
        'destinations' => Destinations::paginate(5),
    ]);
});
Route::get('/packages', function () {
    return view('packages',[
        'title' => 'Packages',
        'packages' => Packages::paginate(10),
    ]);
});
Route::get('/destinations', function () {
    return view('destinations',[
        'title' => 'Destinations',
        'destinations' => Destinations::paginate(10),
    ]);
});
Route::get('/articles', function () {
    return view('destinations',[
        'title' => 'Packages',
        'articles' => Articles::paginate(10),
    ]);
});
Route::get('/login',[LoginController::class,'index'])->middleware('guest')->name('login');
Route::post('/login',[LoginController::class,'login']);
Route::post('/logout',[LoginController::class,'logout']);
Route::get('/admin-dashboard',[DashboardController::class,'index'])->middleware('auth');
Route::resource('admin-dashboard/destinations', DestinationController::class)->middleware('auth');
Route::resource('admin-dashboard/library', LibraryController::class)->middleware('auth');
Route::resource('admin-dashboard/packages', PackageController::class)->middleware('auth');
Route::resource('admin-dashboard/gallery', GalleryController::class)->middleware('auth');

Route::resource('admin-dashboard/articles', ArticlesController::class)->middleware('auth');
Route::resource('admin-dashboard/reviews', ReviewsController::class)->middleware('auth');
