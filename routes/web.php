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
    return redirect('/page1');
});

Route::get('/page1', function() {
    return 'this is page 1';
});

Route::get('/blog', 'PostController@index');

Route::get('/post/create', 'PostController@create');

Route::post('/post/store', 'PostController@store');

Route::get('/post/{id}',['as' => 'post.detail', function($id)  {
    echo"post $id";
    echo"</br>";
    echo"Body post in id $id";
}]);
