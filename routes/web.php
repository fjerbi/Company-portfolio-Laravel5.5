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

Route::get('/', 'WelcomePageController@index');
Route::get('/files', 'FileController@index')->name('files');
Route::get('/devis', 'DevisController@index')->name('devis');
Route::get('/jobs', 'JobController@index')->name('jobs');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/references', 'AcebetController@index')->name('references');
Route::get('/acenet', 'AcenetController@index')->name('acenet');
Route::get('/videos', 'VideoController@index')->name('videos');
Route::get('/organigramme', 'OrganigrammeController@index')->name('organigramme');
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('/work','WorkController@index')->name('work.index');
Route::get('/category','WelcomePageController@index')->name('category.index');
Route::get('/article/{article}', 'ArticleController@show')->name('article.show');
Route::group(['prefix' => 'dashboard'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
