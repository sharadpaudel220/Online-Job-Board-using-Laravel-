<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Models\Listing;
use Illuminate\Http\Request;

Route::get('/', [Controllers\ListingController::class, 'index']) 
->name('listings.index');

Route::get('/new', [Controllers\ListingController::class,'create'])
->name('listings.create');

Route::post('/new', [Controllers\ListingController:: class, 'store'])
->name('listings.store');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function (\Illuminate\Http\Request $request) {
    return view('dashboard', [
        'listings' => $request->user()->listings
    ]);
})->middleware(['auth'])->name('dashboard');





require __DIR__.'/auth.php';

Route::get('/{listing}', [Controllers\ListingController::class, 'show'])
->name('listing.show');

Route::get('/{listing}/apply', [Controllers\ListingController::class, 'apply'])
->name('listing.apply');
