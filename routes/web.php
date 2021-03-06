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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('page/{slug}', function($slug){
    $data = App\Page::where('slug', '=', $slug)->firstOrFail();
    $footer= App\Page::where('slug', '=', 'zagolovok-v-futer')->firstOrFail();

    return view('content', compact('data','footer'));
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', function () {
    $posts = App\Post::where('category_id','1')->take(8)->get();
    $nash = App\Page::where('slug', '=', 'nash-magazin')->get();
    $team= App\Page::where('slug', '=', 'nasha-komanda')->get();
    $services= App\Page::where('slug', '=', 'chto-my-predlagaem')->get();
    $footer= App\Page::where('slug', '=', 'zagolovok-v-futer')->get();

    return view('main',compact('posts', 'nash','team','services','footer'));
});


