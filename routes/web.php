<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pet', function () {
    return view('pet.index', ['title' => 'Pet']);
})->name('pet.index');
