<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes([
    'register' => true
]);

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome.index');

Route::group(['middleware' => ['auth']], function() {


 });