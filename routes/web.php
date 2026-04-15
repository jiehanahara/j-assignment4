<?php

use Illuminate\Support\Facades\Route;
use App\Models\Destination;
use App\Http\Controllers\DestinationController;

Route::get( uri: '/', action: function () {
    return view('welcome');
});

Route::get( uri: '/Hellooo', action: function () {
    $name = "Jiehan";
    $hobis = ["reading", "writing", "drawing"];
    return view( view: 'halo', data: compact('name', 'hobis'));
});
 Route::get( uri: "/switch", action: function () {
    $role = "penulis";
    return view( view: 'switch', data: compact('role'));
 });

 Route::get( uri: "master", action: function () {
    return view( view: 'pages.home');

 });

Route::get(uri: "/about", action: function (){
    return view( view: 'pages.about');
});

Route::get(uri: "/destination", action: function () {
$destination = [
        "name" => "Bali",
        "price" => 5000000,
        "lokation" => "Denpasar, Bali",
        "duration" => "4 Days 3 Nights",
        "transportation" => "Plane",
        "hotel" => "4 Stars",
        "rating" => 4.8,
        "fasilities" => ["Hotel", "Free Breakfast", "Tour Guide", "Local Transport"],
    ];    
return view( view: 'pages.destination', data: compact("destination"));
});

Route::get(
    uri: "/destinations",
    action: [DestinationController::class, 'index']
);

Route::get( uri: "/asiaheritage/{id}", action: [DestinationController::class, 'show']);


Route::get("/destination/create", [DestinationController::class, 'create']);
Route::post("/destinations", [DestinationController::class, 'store']);

Route::delete('/destination/{id}', [DestinationController::class, 'delete']
);

Route::get('/destinations/{id}/edit', [DestinationController::class, 'edit']);
Route::put('/destinations/{id}', [DestinationController::class, 'update']);




Route::prefix('destination')->name('destination.')->group(function () {
    Route::get('/', [DestinationController::class, 'index'])->name('index');
    Route::get('/create', [DestinationController::class, 'create'])->name('create');
    Route::post('/', [DestinationController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [DestinationController::class, 'edit'])->name('edit');
    Route::put('/{id}', [DestinationController::class, 'update'])->name('update');
    Route::delete('/{id}', [DestinationController::class, 'delete'])->name('delete');
});

Route::prefix('User')->name('User.')->group(function () {
    Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('index');
    Route::get('/create', [App\Http\Controllers\UserController::class, 'create'])->name('create');
    Route::post('/', [App\Http\Controllers\UserController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('edit');
    Route::put('/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('update');
    Route::delete('/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('destroy');
    Route::get('/showUser/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('show');
});

Route::prefix('attractions')->name('attractions.')->group(function () {
    Route::get('/', [App\Http\Controllers\AttractionController::class, 'index'])->name('index');
    Route::get('/create', [App\Http\Controllers\AttractionController::class, 'create'])->name('create');
    Route::post('attractions/store', [App\Http\Controllers\AttractionController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [App\Http\Controllers\AttractionController::class, 'edit'])->name('edit');
    Route::put('/{id}', [App\Http\Controllers\AttractionController::class, 'update'])->name('update');
    Route::delete('/{id}', [App\Http\Controllers\AttractionController::class, 'delete'])->name('delete');
    Route::get('/showAttraction/{id}', [App\Http\Controllers\AttractionController::class, 'show'])->name('show');
});