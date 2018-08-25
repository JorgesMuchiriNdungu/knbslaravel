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
//Agriclture sugar route @George Kagwe
Route::get('Agriculture/sugar', 'Agriculture@get_sugar')->name('sugar');
//Agriclture categories_of_land route @George Kagwe
Route::get('Agriculture/categories_of_land', 'Agriculture@get_categories_of_land')->name('categories');
//Agriclture get_agriculture_chemical_med_feed_input route @George Kagwe
Route::get('Agriculture/get_agriculture_chemical_med_feed_input', 'Agriculture@get_agriculture_chemical_med_feed_input')->name('chemical_input');

//Agriclture get_cooperatives route @George Kagwe
Route::get('Agriculture/cooperatives', 'Agriculture@get_cooperatives')->name('get_cooperatives');
//Agriclture agriculture_gross_market_production route @George Kagwe
Route::get('Agriculture/gross_production', 'Agriculture@agriculture_gross_market_production')->name('gross_production');

// @Charles Ndirangu
// CPI get cpi_annual_avg_retail_prices_of_certain_consumer_goods_in_kenya route
Route::get('CPI/cpi_annual_avg_retail_prices_of_certain_consumer_goods_in_kenya', 'Endpoints\CPI@get_cpi_annual_avg_retail_prices_of_certain_consumer_goods_in_kenya')->name('cpi_annual_avg_retail_prices_of_certain_consumer_goods_in_kenya');

// CPI get cpi_consumer_price_index route
Route::get('CPI/cpi_consumer_price_index', 'Endpoints\CPI@get_cpi_consumer_price_index')->name('cpi_consumer_price_index');

// CPI get cpi_elementary_aggregates_weights_in_the_cpi_baskets route
Route::get('CPI/cpi_elementary_aggregates_weights_in_the_cpi_baskets', 'Endpoints\CPI@get_cpi_elementary_aggregates_weights_in_the_cpi_baskets')->name('cpi_elementary_aggregates_weights_in_the_cpi_baskets');

// CPI get cpi_group_weights_for_kenya_cpi_october_base_1997 route
Route::get('CPI/cpi_group_weights_for_kenya_cpi_october_base_1997', 'Endpoints\CPI@get_cpi_group_weights_for_kenya_cpi_october_base_1997')->name('cpi_group_weights_for_kenya_cpi_febuary_base_2009');

