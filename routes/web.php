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





// environment `environment_and_natural_resources_average_export_prices_ash` @david
Route::get('Environment/environment_and_natural_resources_average_export_prices_ash', 
     'Endpoints\Environment@get_environment_and_natural_resources_average_export_prices_ash')->
      name('environment_and_natural_resources_average_export_prices_ash');


//environment environment_and_natural_resources_development_expenditure_water @david
Route::get('Environment/environment_and_natural_resources_development_expenditure_water', 
	   'Endpoints\Environment@get_environment_and_natural_resources_development_expenditure_water')->
       name('environment_and_natural_resources_development_expenditure_water');


//environment environment_and_natural_resources_expenditure_cleaning_refuse @david
Route::get('Environment/environment_and_natural_resources_expenditure_cleaning_refuse', 
	'Endpoints\Environment@get_environment_and_natural_resources_expenditure_cleaning_refuse')->
     name('environment_and_natural_resources_expenditure_cleaning_refuse');


 //environment environment_and_natural_resources_government_forest @david
Route::get('Environment/environment_and_natural_resources_government_forest', 
	'Endpoints\Environment@get_environment_and_natural_resources_government_forest')->
    name('environment_and_natural_resources_government_forest');


 //environment  environment_and_natural_resources_num_high_risk_environ_impact @david
Route::get('Environment/environment_and_natural_resources_num_high_risk_environ_impact', 
	 'Endpoints\Environment@get_environment_and_natural_resources_num_high_risk_environ_impact')->
     name('environment_and_natural_resources_num_high_risk_environ_impact');



//environment  environment_and_natural_resources_population_wildlife @david
Route::get('Environment/environment_and_natural_resources_population_wildlife', 
	'Endpoints\Environment@get_environment_and_natural_resources_population_wildlife')->
    name('environment_and_natural_resources_population_wildlife');


//environment  environment_and_natural_resources_quantity_of_total_mineral @david
Route::get('Environment/environment_and_natural_resources_quantity_of_total_mineral', 
	'Endpoints\Environment@get_environment_and_natural_resources_quantity_of_total_mineral')->
    name('environment_and_natural_resources_quantity_of_total_mineral');


//environment  environment_and_natural_resources_quantity_value_fish_landed @david
Route::get('Environment/environment_and_natural_resources_quantity_value_fish_landed', 
     'Endpoints\Environment@get_environment_and_natural_resources_quantity_value_fish_landed')->
    name('environment_and_natural_resources_quantity_value_fish_landed');


//environment  environment_and_natural_resources_record_sale_goverment_products @david
Route::get('Environment/environment_and_natural_resources_record_sale_goverment_products', 
	'Endpoints\Environment@get_environment_and_natural_resources_record_sale_goverment_products')->
    name('environment_and_natural_resources_record_sale_goverment_products');


//environment  environment_and_natural_resources_trends_envi_natural_resources @david
Route::get('Environment/environment_and_natural_resources_trends_envi_natural_resources', 
	'Endpoints\Environment@get_environment_and_natural_resources_trends_envi_natural_resources')->
    name('environment_and_natural_resources_trends_envi_natural_resources');


  //environment   environment_and_natural_resources_value_of_total_mineral @david
Route::get('Environment/environment_and_natural_resources_value_of_total_mineral', 
	'Endpoints\Environment@get_environment_and_natural_resources_value_of_total_mineral')->
    name('environment_and_natural_resources_value_of_total_mineral');


//environment   environment_and_natural_resources_water_purification_points @david
Route::get('Environment/environment_and_natural_resources_water_purification_points', 
	'Endpoints\Environment@get_environment_and_natural_resources_water_purification_points')->
    name( 'environment_and_natural_resources_water_purification_points');



//Manufacturing  manufacturing_per_change_in_quantum_indices_of_man_production @david
Route::get('Manufacturing/manufacturing_per_change_in_quantum_indices_of_man_production', 
	'Endpoints\Manufacturing@get_manufacturing_per_change_in_quantum_indices_of_man_production')->
    name('manufacturing_per_change_in_quantum_indices_of_man_production');


//Manufacturing  manufacturing_quantum_indices_of_manufacturing_production @david
Route::get('Manufacturing/manufacturing_quantum_indices_of_manufacturing_production', 
	'Endpoints\Manufacturing@get_manufacturing_quantum_indices_of_manufacturing_production')->
    name('manufacturing_quantum_indices_of_manufacturing_production');

 //Energy energy_averagemonthlypumppricesforfuelbycategory @david
    Route::get('Energy/energy_averagemonthlypumppricesforfuelbycategory', 
	'Endpoints\Energy@get_energy_averagemonthlypumppricesforfuelbycategory')->
    name('energy_averagemonthlypumppricesforfuelbycategory');

//Energy energy_average_retail_prices_of_selected_petroleum_products @david
  Route::get('Energy/energy_average_retail_prices_of_selected_petroleum_products', 
	'Endpoints\Energy@get_energy_average_retail_prices_of_selected_petroleum_products')->
    name('energy_energy_average_retail_prices_of_selected_petroleum_products');

//Energy energy_electricity_demand_and_supply @david
  Route::get('Energy/energy_electricity_demand_and_supply', 
	'Endpoints\Energy@get_energy_electricity_demand_and_supply')->
    name('energy_electricity_demand_and_supply');

 //Energy energy_generation_and_imports_of_electricity @david
  Route::get('Energy/energy_generation_and_imports_of_electricity', 
	'Endpoints\Energy@get_energy_generation_and_imports_of_electricity')->
    name('energy_generation_and_imports_of_electricity');

    //Energy energy_installed_and_effective_capacity_of_electricity  @david
  Route::get('Energy/energy_installed_and_effective_capacity_of_electricity', 
	'Endpoints\Energy@get_energy_installed_and_effective_capacity_of_electricity')->
    name('energy_installed_and_effective_capacity_of_electricity');


    //Energy energy_net_domestic_sale_of_petroleum_fuels_by_consumer_category  @david
  Route::get('Energy/energy_net_domestic_sale_of_petroleum_fuels_by_consumer_category', 
	'Endpoints\Energy@get_energy_net_domestic_sale_of_petroleum_fuels_by_consumer_category')->
    name('energy_net_domestic_sale_of_petroleum_fuels_by_consumer_category');


  //Energy energy_petroleum_supply_and_demand  @david
  Route::get('Energy/energy_petroleum_supply_and_demand', 
	'Endpoints\Energy@get_energy_petroleum_supply_and_demand')->
    name('energy_petroleum_supply_and_demand');



 //Energy energy_value_and_quantity_of_imports_exportsand  @david
  Route::get('Energy/energy_value_and_quantity_of_imports_exports', 
	'Endpoints\Energy@get_energy_value_and_quantity_of_imports_exports')->
    name('energy_value_and_quantity_of_imports_exports');


  //Labour labour_average_wage_earnings_per_employee_private_sector  @david
  Route::get('Labour/labour_average_wage_earnings_per_employee_private_sector', 
	'Endpoints\Labour@get_labour_average_wage_earnings_per_employee_private_sector')->
    name('labour_average_wage_earnings_per_employee_private_sector');


 //Labour  labour_average_wage_earnings_per_employee_public_sector  @david
  Route::get('Labour/labour_average_wage_earnings_per_employee_public_sector', 
	'Endpoints\Labour@get_labour_average_wage_earnings_per_employee_public_sector')->
    name('labour_average_wage_earnings_per_employee_public_sector');


 //Labour  labour_employment_public_sector  @david
  Route::get('Labour/labour_employment_public_sector', 
	'Endpoints\Labour@get_labour_employment_public_sector')->
    name('labour_employment_public_sector');


 //Labour  labour_memorandum_items_in_public_sector  @david
  Route::get('Labour/labour_memorandum_items_in_public_sector', 
	'Endpoints\Labour@get_labour_memorandum_items_in_public_sector')->
    name('labour_memorandum_items_in_public_sector');

  //Labour  labour_sectors  @david
  Route::get('Labour/labour_sectors', 
	'Endpoints\Labour@get_labour_sectors')->
    name('labour_sectors');

  // labour    labour_total_recorded_employment   @david
    Route::get('Labour/labour_total_recorded_employment', 
	'Endpoints\Labour@get_labour_total_recorded_employment')->
    name('labour_total_recorded_employment');

 // labour    labour_wage_employment_by_industry_and_sex   @david
    Route::get('Labour/labour_wage_employment_by_industry_and_sex', 
	'Endpoints\Labour@get_labour_wage_employment_by_industry_and_sex')->
    name('labour_wage_employment_by_industry_and_sex');


 // labour    labour_wage_employment_by_industry_in_private_sector   @david
    Route::get('Labour/labour_wage_employment_by_industry_in_private_sector', 
	'Endpoints\Labour@get_labour_wage_employment_by_industry_in_private_sector')->
    name(' labour_wage_employment_by_industry_in_private_sector');



 // labour   labour_wage_employment_by_industry_in_public_sector   @david
    Route::get('Labour/labour_wage_employment_by_industry_in_public_sector', 
	'Endpoints\Labour@get_labour_wage_employment_by_industry_in_public_sector')->
    name('labour_wage_employment_by_industry_in_public_sector');







