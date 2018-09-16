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
        $posts = App\Post::where('category_id','1')->take(8)->get();
        $nash = App\Page::where('slug', '=', 'nash-magazin')->firstOrFail();
        $team= App\Page::where('slug', '=', 'nasha-komanda')->firstOrFail();
        $services= App\Page::where('slug', '=', 'chto-my-predlagaem')->firstOrFail();



    return view('main',compact('posts', 'nash','team','services'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('page/{slug}', function($slug){
    $data = App\Page::where('slug', '=', $slug)->firstOrFail();
    return view('content', compact('data'));
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
