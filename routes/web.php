<?php


use App\Article;
use App\Http\Controllers\ArticlesController;

// Default render the view
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', 'PagesController@home');

Route::get('/articles', function () {
    return view('articles.index', [
        'articles' => App\Article::latest()->get()
    ]);
});

Route::get('/articles', 'ArticlesController@index')->name('articles.index');;
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');
