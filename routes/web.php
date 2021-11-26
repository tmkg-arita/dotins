<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;

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

Route::get('/', [Postcontroller::class,'index'])
    ->name('posts.index');



Route::get('/posts/{post}', [Postcontroller::class,'show'])
-> name('posts.show')->where('post','[0-9]');

Route::get('/posts/create', [Postcontroller::class,'create'])
    -> name('posts.create');

Route::post('/posts/store', [Postcontroller::class,'store'])
    -> name('posts.store');

Route::get('/posts/{post}/edit', [Postcontroller::class,'edit'])
-> name('posts.edit')->where('post','[0-9]');

Route::patch('/posts/{post}/update', [Postcontroller::class,'update'])
-> name('posts.update')->where('post','[0-9]');

Route::delete('/posts/{post}/destory', [Postcontroller::class,'destory'])
-> name('posts.destory')->where('post','[0-9]');

