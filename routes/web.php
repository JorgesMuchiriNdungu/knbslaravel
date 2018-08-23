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
    return view('welcome');
});

Route::get('Agriculture/sugar', 'Agriculture@get_sugar')->name('sugar');
Route::get('Agriculture/categories_of_land', 'Agriculture@get_categories_of_land')->name('categories');
Route::get('Agriculture/chemical_input', 'Agriculture@get_agriculture_chemical_med_feed_input')->name('chemical_input');


Route::get('Agriculture/cooperatives', 'Agriculture@get_cooperatives')->name('get_cooperatives');

Route::get('Agriculture/gross_production', 'Agriculture@agriculture_gross_market_production')->name('gross_production');