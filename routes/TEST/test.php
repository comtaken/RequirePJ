<?php

use App\Http\Controllers\TestController;


use App\Http\Controllers\AuthCountroller;

use Illuminate\Support\Facades\Route;



Route::get('/TEST/test.php', [TestController::class,'test'])->name('test');

Route::post('/TEST/post_test.php', [TestController::class,'post_test'])->name('post_test');