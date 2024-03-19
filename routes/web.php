<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Newcontroller;
use App\Http\Controllers\Acontroller;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\UploadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('get', [Newcontroller::class, "index"]);

Route::get('/one', function() {
    return app(Acontroller::class)->multiple(2);
});

Route::get('/test', function() {
    return "미들웨어 테스트 페이지 입니다.";
})->middleware('test');
// Web.php 또는 해당하는 라우트 파일
Route::get('/some-route', function () {
    return view('welcome', ['post' => 'livewire 실습 강의']);
});


Route::get('/', [SampleController::class, 'index']);

Route::get('/crud', function(){
    return view('crud');
});

Route::get('/upload', function(){
    return view('upload');
});


Route::post('/upload', [UploadController::class, 'upload'])->name('upload');
