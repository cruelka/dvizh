<?php

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
        $posts = App\Post::where('category_id','1')->take(2)->get();
        $why = App\Page::where('slug', '=', 'why-its-good-for-your-car')->firstOrFail();
        $eco = App\Page::where('slug', '=', 'why-eco-wash')->firstOrFail();
        $products = App\Product::take(4)->get();
    return view('main',compact('posts'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
