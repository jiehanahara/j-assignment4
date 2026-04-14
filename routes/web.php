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

Route::get('/User', function () {
    $users = App\Models\User::all();
    return view('pages.indexUser', compact('users'));
});

Route::get('/User/create', [App\Http\Controllers\UserController::class, 'create']);
Route::post('/User', [App\Http\Controllers\UserController::class, 'store']);

Route::get('/User/{id}/edit', [App\Http\Controllers\UserController::class, 'edit']);
Route::put('/User/{id}', [App\Http\Controllers\UserController::class, 'update']);

Route::delete('/User/{id}', [App\Http\Controllers\UserController::class, 'destroy']);