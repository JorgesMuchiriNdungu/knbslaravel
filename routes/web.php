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

Route::get('Agriculture/', 'Forms\Agriculture@index')->name('Agriculture');

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

// @Charles Ndirangu
// CPI  cpi_consumer_price_index route
Route::get('CPI/cpi_consumer_price_index', 'Endpoints\CPI@get_cpi_consumer_price_index')->name('cpi_consumer_price_index');

// @Charles Ndirangu
// CPI  cpi_elementary_aggregates_weights_in_the_cpi_baskets route
Route::get('CPI/cpi_elementary_aggregates_weights_in_the_cpi_baskets', 'Endpoints\CPI@get_cpi_elementary_aggregates_weights_in_the_cpi_baskets')->name('cpi_elementary_aggregates_weights_in_the_cpi_baskets');


// @Charles Ndirangu
// CPI  cpi_group_weights_for_kenya_cpi_febuary_base_2009 route
Route::get('CPI/cpi_group_weights_for_kenya_cpi_febuary_base_2009', 'Endpoints\CPI@get_cpi_group_weights_for_kenya_cpi_febuary_base_2009')->name('cpi_group_weights_for_kenya_cpi_febuary_base_2009');


// @Charles Ndirangu
// CPI  cpi_group_weights_for_kenya_cpi_october_base_1997 route
Route::get('CPI/cpi_group_weights_for_kenya_cpi_october_base_1997', 'Endpoints\CPI@get_cpi_group_weights_for_kenya_cpi_october_base_1997')->name('get_cpi_group_weights_for_kenya_cpi_october_base_1997');


// @Charles Ndirangu
// Administration  administrative_unit route
Route::get('Administration/administrative_unit', 'Endpoints\Administration@get_administrative_unit')->name('administrative_unit');


// @Charles Ndirangu
// Trade  trade_and_commerce_balance_of_trade route
Route::get('Trade/trade_and_commerce_balance_of_trade', 'Endpoints\Trade@get_trade_and_commerce_balance_of_trade')->name('trade_and_commerce_balance_of_trade');

// @Charles Ndirangu
// Trade  trade_and_commerce_import_trade_africa_countries route
Route::get('Trade/trade_and_commerce_import_trade_africa_countries', 'Endpoints\Trade@get_trade_and_commerce_import_trade_africa_countries')->name('trade_and_commerce_import_trade_africa_countries');

// @Charles Ndirangu
// Trade  trade_and_commerce_quantities_principal_domestic_exports route
Route::get('Trade/trade_and_commerce_quantities_principal_domestic_exports', 'Endpoints\Trade@get_trade_and_commerce_quantities_principal_domestic_exports')->name('trade_and_commerce_quantities_principal_domestic_exports');

// @Charles Ndirangu
// Trade  trade_and_commerce_quantities_principal_imports route
Route::get('Trade/trade_and_commerce_quantities_principal_imports', 'Endpoints\Trade@get_trade_and_commerce_quantities_principal_imports')->name('trade_and_commerce_quantities_principal_imports');


// @Charles Ndirangu
// Trade  trade_and_commerce_revenue_collection_by_amount route
Route::get('Trade/trade_and_commerce_revenue_collection_by_amount', 'Endpoints\Trade@get_trade_and_commerce_revenue_collection_by_amount')->name('trade_and_commerce_revenue_collection_by_amount');

// @Charles Ndirangu
// Trade  trade_and_commerce_trading_centres route
Route::get('Trade/trade_and_commerce_trading_centres', 'Endpoints\Trade@get_trade_and_commerce_trading_centres')->name('trade_and_commerce_trading_centres');

// @Charles Ndirangu
// Trade  trade_and_commerce_value_of_total_exports_all_destinations route
Route::get('Trade/trade_and_commerce_value_of_total_exports_all_destinations', 'Endpoints\Trade@get_trade_and_commerce_value_of_total_exports_all_destinations')->name('trade_and_commerce_value_of_total_exports_all_destinations');

// @Charles Ndirangu
// Trade  trade_and_commerce_value_of_total_exports_european_union route
Route::get('Trade/trade_and_commerce_value_of_total_exports_european_union', 'Endpoints\Trade@get_trade_and_commerce_value_of_total_exports_european_union')->name('trade_and_commerce_value_of_total_exports_european_union');

// @Charles Ndirangu
// Trade  trade_and_commerce_value_total_exports_east_africa_communities route
Route::get('Trade/trade_and_commerce_value_total_exports_east_africa_communities', 'Endpoints\Trade@get_trade_and_commerce_value_total_exports_east_africa_communities')->name('trade_and_commerce_value_total_exports_east_africa_communities');


// @Charles Ndirangu
// Trade  trade_and_commerce_values_of_principal_domestic_exports route
Route::get('Trade/trade_and_commerce_values_of_principal_domestic_exports', 'Endpoints\Trade@get_trade_and_commerce_values_of_principal_domestic_exports')->name('trade_and_commerce_values_of_principal_domestic_exports');


// @Charles Ndirangu
// Trade  trade_and_commerce_values_of_principal_imports route
Route::get('Trade/trade_and_commerce_values_of_principal_imports', 'Endpoints\Trade@get_trade_and_commerce_values_of_principal_imports')->name('trade_and_commerce_values_of_principal_imports');



//Building and Construction
// @Charles Ndirangu
// Building  building_and_construction_quarterly_civil_engineering_cost_index route
Route::get('Building/building_and_construction_quarterly_civil_engineering_cost_index', 'Endpoints\Building@get_building_and_construction_quarterly_civil_engineering_cost_index')->name('building_and_construction_quarterly_civil_engineering_cost_index');

// @Charles Ndirangu
// Building  building_and_construction_quarterly_non_residential_build_cost route
Route::get('Building/building_and_construction_quarterly_non_residential_build_cost', 'Endpoints\Building@get_building_and_construction_quarterly_non_residential_build_cost')->name('building_and_construction_quarterly_non_residential_build_cost');


// @Charles Ndirangu
// Building  building_and_construction_quarterly_overal_construction_cost route
Route::get('Building/building_and_construction_quarterly_overal_construction_cost', 'Endpoints\Building@get_building_and_construction_quarterly_overal_construction_cost')->name('building_and_construction_quarterly_overal_construction_cost');



// @Charles Ndirangu
// Building  building_and_construction_quarterly_residential_bulding_cost route
Route::get('Building/building_and_construction_quarterly_residential_bulding_cost', 'Endpoints\Building@get_building_and_construction_quarterly_residential_bulding_cost')->name('building_and_construction_quarterly_residential_bulding_cost');


//Tourism
// @Charles Ndirangu
// Building  tourism_arrivals route
Route::get('Tourism/tourism_arrivals', 'Endpoints\Tourism@get_tourism_arrivals')->name('tourism_arrivals');

// @Charles Ndirangu
// Building  tourism_conferences route
Route::get('Tourism/tourism_conferences', 'Endpoints\Tourism@get_tourism_conferences')->name('tourism_conferences');

// @Charles Ndirangu
// Building  tourism_departures route
Route::get('Tourism/tourism_departures', 'Endpoints\Tourism@get_tourism_departures')->name('tourism_departures');


// @Charles Ndirangu
// Building  tourism_earnings route
Route::get('Tourism/tourism_earnings', 'Endpoints\Tourism@get_tourism_earnings')->name('tourism_earnings');

// @Charles Ndirangu
// Building  tourism_hotel_occupancy_by_residence route
Route::get('Tourism/tourism_hotel_occupancy_by_residence', 'Endpoints\Tourism@get_tourism_hotel_occupancy_by_residence')->name('tourism_hotel_occupancy_by_residence');

// @Charles Ndirangu
// Building  tourism_hotel_occupancy_by_zone route
Route::get('Tourism/tourism_hotel_occupancy_by_zone', 'Endpoints\Tourism@get_tourism_hotel_occupancy_by_zone')->name('tourism_hotel_occupancy_by_zone');
