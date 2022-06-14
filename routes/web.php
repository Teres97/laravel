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
use App\Http\Controllers;

Route::get('/', function () {
    return ('MainPage!!!');
});


Route::group(['namespace' => 'App\Http\Controllers\Post'], function(){
  Route::get('/posts', 'IndexController')->name('post.index');


  Route::get('/posts/create', 'CreateController')->name('post.create');
  Route::post('/posts', 'StoreController')->name('post.store');
  Route::get('/posts/{post}', 'ShowController')->name('post.show');
  Route::get('/posts/{post}/edit', 'EditController')->name('post.edit');
  Route::patch('/posts/{post}', 'UpdateController')->name('post.update');
  Route::delete('/posts/{post}', 'DestroyController')->name('post.delete');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix'=>'admin'], function(){
  Route::group(['namespace' => 'App\Http\Controllers\Post'], function(){
    Route::get('/post', 'App\Http\Controllers\IndexController')->name('main.index');
  });
});

Route::get('/main', 'App\Http\Controllers\MainController@index')->name('main.index');


Route::get('/scripts', 'App\Http\Controllers\ScriptController@index')->name('script.index');
