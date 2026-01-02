<?php

use App\Http\Controllers\ThemeController;
use Illuminate\Support\Facades\Route;

// Controllers here
$themeController = ThemeController::class;

// Routes here
Route::get('/', function () {
    return view('register');
});


// ThemeController Routes

Route::controller($themeController)->name('theme.')->group(function () {
    
  Route::get('/', 'index')->name('index');
  Route::get('login', 'login')->name('login');
  Route::get('register', 'register')->name('register');
  Route::get('blog-details', 'blogDetails')->name('blogDetails');

});



