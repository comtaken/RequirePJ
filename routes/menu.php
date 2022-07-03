<?php

use App\Http\Controllers\AuthCountroller;

use Illuminate\Support\Facades\Route;


Route::get('/menu.php', function () {
    return view('menu');
});
