<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $person = [
        'name'=>"John Doe",
        "email"=> "abc@gmail.com",
    ];
    dump($person);
    return view('welcome');
});

Route::view('/about', 'about');

Route::get('/products/{id}', function(string $id){
    return "Product ID =$id";
})->whereNumber('id');
Route::get('/products/{category?}', function(string $category = null){
    return "Product for category = $category";
});

Route::get('/users/{username}', function(string $username){
    return "User = $username";
})->whereAlpha("username");