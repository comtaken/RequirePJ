<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//メニューへ
require __DIR__ . '/menu.php';

//TEST機能のルーティングファイルを取り込み
require __DIR__ . '/TEST/test.php';

//TASK機能のルーティングファイルを取り込み
require __DIR__ . '/TASK/task.php';