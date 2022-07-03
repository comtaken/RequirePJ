<?php

use App\Http\Controllers\IttangoController;

use App\Http\Controllers\KosikikaisetuController;

use App\Http\Controllers\AuthCountroller;

use Illuminate\Support\Facades\Route;


Route::get('/TASK/task.php', function () {
    echo'TASKのルート';
})->name('task');
