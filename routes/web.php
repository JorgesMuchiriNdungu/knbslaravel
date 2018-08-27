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
    return view('layouts.admin');
});

Route::get('Agriculture/', 'Forms\Agriculture@index')->name('Agriculture');

//Agriclture sugar route @George Kagwe
Route::get('Agriculture/agriculture_area_under_sugarcane_harvested_production_avg_yield', 'Agriculture@get_agriculture_area_under_sugarcane_harvested_production_avg_yield')->name('sugar');
//Agriclture categories_of_land route @George Kagwe
Route::get('Agriculture/categories_of_land', 'Agriculture@get_categories_of_land')->name('categories');
//Agriclture get_agriculture_chemical_med_feed_input route @George Kagwe
Route::get('Agriculture/get_agriculture_chemical_med_feed_input', 'Agriculture@get_agriculture_chemical_med_feed_input')->name('chemical_input');
//Agriclture get_cooperatives route @George Kagwe
Route::get('Agriculture/cooperatives', 'Agriculture@get_cooperatives')->name('get_cooperatives');
//Agriclture agriculture_gross_market_production route @George Kagwe
Route::get('Agriculture/gross_production', 'Agriculture@agriculture_gross_market_production')->name('gross_production');

<<<<<<< HEAD
=======

<<<<<<< HEAD
=======

// Health Sectors shows all the tables and all the apis @George Kagwe
Route::get('health/all_sectors', 
     'Endpoints\Health_Sectors@index')->
      name('Health_Sectors');




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







>>>>>>> c3ef70d6fbc50a0a20de8ea84aa0f0b0ea33e7da
//Education
//education_approved_degree_diploma_programs @fredrick muiruri
Route::get('Education/education_approved_degree_diploma_programs', 'Endpoints\Education@education_approved_degree_diploma_programs')->name('education_approved_degree_diploma_programs');
//Education
//education_csa_adulteducationcentresbysubcounty @fredrick muiruri
Route::get('Education/education_csa_adulteducationcentresbysubcounty', 'Endpoints\Education@education_csa_adulteducationcentresbysubcounty')->name('education_csa_adulteducationcentresbysubcounty');
//Education
//education_csa_adulteducationenrolmentbysexandsubcounty @fredrick muiruri
Route::get('Education/education_csa_adulteducationenrolmentbysexandsubcounty', 'Endpoints\Education@education_csa_adulteducationenrolmentbysexandsubcounty')->name('education_csa_adulteducationenrolmentbysexandsubcounty');
//Education
//education_csa_adulteducationproficiencytestresults @fredrick muiruri
Route::get('Education/education_csa_adulteducationproficiencytestresults', 'Endpoints\Education@education_csa_adulteducationproficiencytestresults')->name('education_csa_adulteducationproficiencytestresults');
//Education
//education_csa_ecdecentresbycategoryandsubcounty @fredrick muiruri
Route::get('Education/education_csa_ecdecentresbycategoryandsubcounty', 'Endpoints\Education@education_csa_ecdecentresbycategoryandsubcounty')->name('education_csa_ecdecentresbycategoryandsubcounty');
//Education
//education_csa_primaryenrolmentandaccessindicators @fredrick muiruri
Route::get('Education/education_csa_primaryenrolmentandaccessindicators', 'Endpoints\Education@education_csa_primaryenrolmentandaccessindicators')->name('education_csa_primaryenrolmentandaccessindicators');
//Education
//education_csa_primaryschoolenrollmentbyclasssexandsubcounty @fredrick muiruri
Route::get('Education/education_csa_primaryschoolenrollmentbyclasssexandsubcounty', 'Endpoints\Education@education_csa_primaryschoolenrollmentbyclasssexandsubcounty')->name('education_csa_primaryschoolenrollmentbyclasssexandsubcounty');
//Education
//education_csa_primaryschoolsbycategoryandsubcounty @fredrick muiruri
Route::get('Education/education_csa_primaryschoolsbycategoryandsubcounty', 'Endpoints\Education@education_csa_primaryschoolsbycategoryandsubcounty')->name('education_csa_primaryschoolsbycategoryandsubcounty');
//Education
//education_csa_secondaryenrolmentandaccessindicators @fredrick muiruri
Route::get('Education/education_csa_secondaryenrolmentandaccessindicators', 'Endpoints\Education@education_csa_secondaryenrolmentandaccessindicators')->name('education_csa_secondaryenrolmentandaccessindicators');
//Education
//education_csa_secondaryschoolenrollmentbyclasssexsubcounty @fredrick muiruri
Route::get('Education/education_csa_secondaryschoolenrollmentbyclasssexsubcounty', 'Endpoints\Education@education_csa_secondaryschoolenrollmentbyclasssexsubcounty')->name('education_csa_secondaryschoolenrollmentbyclasssexsubcounty');
//Education
//education_csa_studentenrolmentinyouthpolytechnics @fredrick muiruri
Route::get('Education/education_csa_studentenrolmentinyouthpolytechnics', 'Endpoints\Education@education_csa_studentenrolmentinyouthpolytechnics')->name('education_csa_studentenrolmentinyouthpolytechnics');
//Education
//education_csa_teachertrainingcolleges @fredrick muiruri
Route::get('Education/education_csa_teachertrainingcolleges', 'Endpoints\Education@education_csa_teachertrainingcolleges')->name('education_csa_teachertrainingcolleges');
//Education
//education_csa_youthpolytechnicsbycategoryandsubcounty @fredrick muiruri
Route::get('Education/education_csa_youthpolytechnicsbycategoryandsubcounty', 'Endpoints\Education@education_csa_youthpolytechnicsbycategoryandsubcounty')->name('education_csa_youthpolytechnicsbycategoryandsubcounty');
//Education
//education_distribution_abovefifteen_ability_readwrite @fredrick muiruri
Route::get('Education/education_distribution_abovefifteen_ability_readwrite', 'Endpoints\Education@education_distribution_abovefifteen_ability_readwrite')->name('education_distribution_abovefifteen_ability_readwrite');
//Education
//education_distribution_abovethreeyears_highestlevel_reached @fredrick muiruri
Route::get('Education/education_distribution_abovethreeyears_highestlevel_reached', 'Endpoints\Education@education_distribution_abovethreeyears_highestlevel_reached')->name('education_distribution_abovethreeyears_highestlevel_reached');
//Education
//education_distribution_abovethreeyears_training @fredrick muiruri
Route::get('Education/education_distribution_abovethreeyears_training', 'Endpoints\Education@education_distribution_abovethreeyears_training')->name('education_distribution_abovethreeyears_training');
//Education
//education_distribution_highest_education_qualification @fredrick muiruri
Route::get('Education/education_distribution_highest_education_qualification', 'Endpoints\Education@education_distribution_highest_education_qualification')->name('education_distribution_highest_education_qualification');
//Education
//education_distribution_sixthirteen_by_schooltype @fredrick muiruri
Route::get('Education/education_distribution_sixthirteen_by_schooltype', 'Endpoints\Education@education_distribution_sixthirteen_by_schooltype')->name('education_distribution_sixthirteen_by_schooltype');
//Education
//education_distribution_three_twentyfour_schoolattendance @fredrick muiruri
Route::get('Education/education_distribution_three_twentyfour_schoolattendance', 'Endpoints\Education@education_distribution_three_twentyfour_schoolattendance')->name('education_distribution_three_twentyfour_schoolattendance');
//Education
//education_edstat_ecde_enrollment_and_enrollment_rates_by_county @fredrick muiruri
Route::get('Education/education_edstat_ecde_enrollment_and_enrollment_rates_by_county', 'Endpoints\Education@education_edstat_ecde_enrollment_and_enrollment_rates_by_county')->name('education_edstat_ecde_enrollment_and_enrollment_rates_by_county');
//Education
//education_edstat_kcpe_examination_candidature @fredrick muiruri
Route::get('Education/education_edstat_kcpe_examination_candidature', 'Endpoints\Education@education_edstat_kcpe_examination_candidature')->name('education_edstat_kcpe_examination_candidature');
//Education
//education_edstat_kcpe_examination_results_by_subject @fredrick muiruri
Route::get('Education/education_edstat_kcpe_examination_results_by_subject', 'Endpoints\Education@education_edstat_kcpe_examination_results_by_subject')->name('education_edstat_kcpe_examination_results_by_subject');
//Education
//education_edstat_kcse_examination_results @fredrick muiruri
Route::get('Education/education_edstat_kcse_examination_results', 'Endpoints\Education@education_edstat_kcse_examination_results')->name('education_edstat_kcse_examination_results');
//Education
//education_edstat_primary_enrollment_enrollment_rates_county @fredrick muiruri
Route::get('Education/education_edstat_primary_enrollment_enrollment_rates_county', 'Endpoints\Education@education_edstat_primary_enrollment_enrollment_rates_county')->name('education_edstat_primary_enrollment_enrollment_rates_county');
//Education
//education_edstat_secondary_enrollment_enrollment_rates_county @fredrick muiruri
Route::get('Education/education_edstat_secondary_enrollment_enrollment_rates_county', 'Endpoints\Education@education_edstat_secondary_enrollment_enrollment_rates_county')->name('education_edstat_secondary_enrollment_enrollment_rates_county');
//Education
//education_gross_attendance_ratio_by_level @fredrick muiruri
Route::get('Education/education_gross_attendance_ratio_by_level', 'Endpoints\Education@education_gross_attendance_ratio_by_level')->name('education_gross_attendance_ratio_by_level');
//Education
//education_net_attendance_ratio_by_level @fredrick muiruri
Route::get('Education/education_net_attendance_ratio_by_level', 'Endpoints\Education@education_net_attendance_ratio_by_level')->name('education_net_attendance_ratio_by_level');
//Education
//education_number_of_candidates_by_sex_in_kcse @fredrick muiruri
Route::get('Education/education_number_of_candidates_by_sex_in_kcse', 'Endpoints\Education@education_number_of_candidates_by_sex_in_kcse')->name('education_number_of_candidates_by_sex_in_kcse');
//Education
//education_population_distribution_above_three_school_attendance @fredrick muiruri
Route::get('Education/education_population_distribution_above_three_school_attendance', 'Endpoints\Education@education_population_distribution_above_three_school_attendance')->name('education_population_distribution_above_three_school_attendance');
//Education
//education_primary_school_enrolments_by_sex @fredrick muiruri
Route::get('Education/education_primary_school_enrolments_by_sex', 'Endpoints\Education@education_primary_school_enrolments_by_sex')->name('education_primary_school_enrolments_by_sex');
//Education
//education_public_primaryteachers_trainingcollege_enrolment @fredrick muiruri
Route::get('Education/education_public_primaryteachers_trainingcollege_enrolment', 'Endpoints\Education@education_public_primaryteachers_trainingcollege_enrolment')->name('education_public_primaryteachers_trainingcollege_enrolment');
//Education
//education_public_primary_school_teachers_by_sex @fredrick muiruri
Route::get('Education/education_public_primary_school_teachers_by_sex', 'Endpoints\Education@education_public_primary_school_teachers_by_sex')->name('education_public_primary_school_teachers_by_sex');
//Education
//education_public_secondary_school_teachers_by_sex @fredrick muiruri
Route::get('Education/education_public_secondary_school_teachers_by_sex', 'Endpoints\Education@education_public_secondary_school_teachers_by_sex')->name('education_public_secondary_school_teachers_by_sex');
//Education
//education_secondary_school_enrolment_by_sex @fredrick muiruri
Route::get('Education/education_secondary_school_enrolment_by_sex', 'Endpoints\Education@education_secondary_school_enrolment_by_sex')->name('education_secondary_school_enrolment_by_sex');
//Education
//education_studentenrollmentbysextechnicalinstitutions @fredrick muiruri
Route::get('Education/education_studentenrollmentbysextechnicalinstitutions', 'Endpoints\Education@education_studentenrollmentbysextechnicalinstitutions')->name('education_studentenrollmentbysextechnicalinstitutions');
//Education
//education_studentenrollmentpublicuniversities @fredrick muiruri
Route::get('Education/education_studentenrollmentpublicuniversities', 'Endpoints\Education@education_studentenrollmentpublicuniversities')->name('education_studentenrollmentpublicuniversities');
//Health
//health_counties @fredrick muiruri
Route::get('Health/health_counties', 'Endpoints\Health@health_counties')->name('health_counties');
//Health
//health_current_use_of_contraception_by_county @fredrick muiruri
Route::get('Health/health_current_use_of_contraception_by_county', 'Endpoints\Health@health_current_use_of_contraception_by_county')->name('health_current_use_of_contraception_by_county');
//Health
//health_distributionofoutpatientvisitsbytypeofhealthcareprovider @fredrick muiruri
Route::get('Health/health_distributionofoutpatientvisitsbytypeofhealthcareprovider', 'Endpoints\Health@health_distributionofoutpatientvisitsbytypeofhealthcareprovider')->name('health_distributionofoutpatientvisitsbytypeofhealthcareprovider');
//Health
//health_early_childhood_mortality_rates_by_sex @fredrick muiruri
Route::get('Health/health_early_childhood_mortality_rates_by_sex', 'Endpoints\Health@health_early_childhood_mortality_rates_by_sex')->name('health_early_childhood_mortality_rates_by_sex');
//Health
//health_fertility_by_education_status @fredrick muiruri
Route::get('Health/health_fertility_by_education_status', 'Endpoints\Health@health_fertility_by_education_status')->name('health_fertility_by_education_status');
//Health
//health_fertility_rate_by_age_and_residence @fredrick muiruri
Route::get('Health/health_fertility_rate_by_age_and_residence', 'Endpoints\Health@health_fertility_rate_by_age_and_residence')->name('health_fertility_rate_by_age_and_residence');
//Health
//health_hiv_aids_awareness_and_testing @fredrick muiruri
Route::get('Health/health_hiv_aids_awareness_and_testing', 'Endpoints\Health@health_hiv_aids_awareness_and_testing')->name('health_hiv_aids_awareness_and_testing');
//Health
//health_immunization_rate @fredrick muiruri
Route::get('Health/health_immunization_rate', 'Endpoints\Health@health_immunization_rate')->name('health_immunization_rate');
//Health
//health_insurance_coverage_by_counties_and_types @fredrick muiruri
Route::get('Health/health_insurance_coverage_by_counties_and_types', 'Endpoints\Health@health_insurance_coverage_by_counties_and_types')->name('health_insurance_coverage_by_counties_and_types');
//Health
//health_kihibs_children_by_additional_supplement @fredrick muiruri
Route::get('Health/health_kihibs_children_by_additional_supplement', 'Endpoints\Health@health_kihibs_children_by_additional_supplement')->name('health_kihibs_children_by_additional_supplement');
//Health
//health_kihibs_children_by_place_of_delivery @fredrick muiruri
Route::get('Health/health_kihibs_children_by_place_of_delivery', 'Endpoints\Health@health_kihibs_children_by_place_of_delivery')->name('health_kihibs_children_by_place_of_delivery');
//Health
//health_kihibs_children_by_who_assisted_at_birth @fredrick muiruri
Route::get('Health/health_kihibs_children_by_who_assisted_at_birth', 'Endpoints\Health@health_kihibs_children_by_who_assisted_at_birth')->name('health_kihibs_children_by_who_assisted_at_birth');
//Health
//health_kihibs_children_immmunized_against_measles @fredrick muiruri
Route::get('Health/health_kihibs_children_immmunized_against_measles', 'Endpoints\Health@health_kihibs_children_immmunized_against_measles')->name('health_kihibs_children_immmunized_against_measles');
//Health
//health_kihibs_children_that_had_diarrhoea @fredrick muiruri
Route::get('Health/health_kihibs_children_that_had_diarrhoea', 'Endpoints\Health@health_kihibs_children_that_had_diarrhoea')->name('health_kihibs_children_that_had_diarrhoea');
//Health
//health_kihibs_disability_by_type @fredrick muiruri
Route::get('Health/health_kihibs_disability_by_type', 'Endpoints\Health@health_kihibs_disability_by_type')->name('health_kihibs_disability_by_type');
//Health
//health_kihibs_disability_that_had_difficulty @fredrick muiruri
Route::get('Health/health_kihibs_disability_that_had_difficulty', 'Endpoints\Health@health_kihibs_disability_that_had_difficulty')->name('health_kihibs_disability_that_had_difficulty');
//Health
//health_kihibs_health_insurance_cover_by_type @fredrick muiruri
Route::get('Health/health_kihibs_health_insurance_cover_by_type', 'Endpoints\Health@health_kihibs_health_insurance_cover_by_type')->name('health_kihibs_health_insurance_cover_by_type');
//Health
//health_kihibs_incidence_of_sickness_injury @fredrick muiruri
Route::get('Health/health_kihibs_incidence_of_sickness_injury', 'Endpoints\Health@health_kihibs_incidence_of_sickness_injury')->name('health_kihibs_incidence_of_sickness_injury');

// @George Muchiri
// governance_cases_forwarded_and_action_taken route

Route::get('Governance/governance_cases_forwarded_and_action_taken', 'Endpoints\Governance@get_governance_cases_forwarded_and_action_taken')->name('governance_cases_forwarded_and_action_taken');

// @George Muchiri
// governance_cases_forwarded_and_action_taken route

Route::get('Governance/governance_cases_handled_by_ethics_commision', 'Endpoints\Governance@get_governance_cases_handled_by_ethics_commision')->name('governance_cases_handled_by_ethics_commision');


// @George Muchiri
// @governance_cases_handled_by_various_courts

Route::get('Governance/governance_cases_handled_by_various_courts', 'Endpoints\Governance@get_governance_cases_handled_by_various_courts')->name('governance_cases_handled_by_various_courts');

// @George Muchiri
// @governance_convicted_prisoners_by_type_of_offence_and_sex

Route::get('Governance/governance_convicted_prisoners_by_type_of_offence_and_sex', 'Endpoints\Governance@get_governance_convicted_prisoners_by_type_of_offence_and_sex')->name('governance_convicted_prisoners_by_type_of_offence_and_sex');

// @George Muchiri
// @governance_convicted_prison_population_by_age_and_sex

Route::get('Governance/governance_convicted_prison_population_by_age_and_sex', 'Endpoints\Governance@get_governance_convicted_prison_population_by_age_and_sex')->name('governance_convicted_prison_population_by_age_and_sex'); 



// @George Muchiri
// @governance_crimes_reported_to_police_by_command_stations

Route::get('Governance/governance_crimes_reported_to_police_by_command_stations', 'Endpoints\Governance@get_governance_crimes_reported_to_police_by_command_stations')->name('governance_crimes_reported_to_police_by_command_stations'); 



// @George Muchiri
// @governance_daily_average_population_of_prisoners_by_sex

Route::get('Governance/governance_daily_average_population_of_prisoners_by_sex', 'Endpoints\Governance@get_governance_daily_average_population_of_prisoners_by_sex')->name('governance_daily_average_population_of_prisoners_by_sex'); 

// @George Muchiri
// @governance_environmental_crimes_reported_to_nema

Route::get('Governance/governance_environmental_crimes_reported_to_nema', 'Endpoints\Governance@get_governance_environmental_crimes_reported_to_nema')->name('governance_environmental_crimes_reported_to_nema'); 
 


// @George Muchiri
// @governance_experienceof_domestic_violence_by_age

Route::get('Governance/governance_experienceof_domestic_violence_by_age', 'Endpoints\Governance@get_governance_experienceof_domestic_violence_by_age')->name('governance_experienceof_domestic_violence_by_age'); 


// @George Muchiri
// @governance_experienceof_domestic_violence_by_marital_success

Route::get('Governance/governance_experienceof_domestic_violence_by_marital_success', 'Endpoints\Governance@get_governance_experienceof_domestic_violence_by_marital_success')->name('governance_experienceof_domestic_violence_by_marital_success'); 

// @George Muchiri
// @governance_experienceof_domestic_violence_by_residence

Route::get('Governance/governance_experienceof_domestic_violence_by_residence', 'Endpoints\Governance@get_governance_experienceof_domestic_violence_by_residence')->name('
governance_experienceof_domestic_violence_by_residence'); 


// @George Muchiri
// @governance_firearms_and_ammunition_recovered_or_surrendered

Route::get('Governance/governance_firearms_and_ammunition_recovered_or_surrendered', 'Endpoints\Governance@get_governance_firearms_and_ammunition_recovered_or_surrendered')->name('governance_firearms_and_ammunition_recovered_or_surrendered'); 


// @George Muchiri
// @governance_firearms_and_ammunition_recovered_or_surrendered

Route::get('Governance/governance_identity_cards_made_processed_and_collected', 'Endpoints\Governance@get_governance_identity_cards_made_processed_and_collected')->name('governance_identity_cards_made_processed_and_collected');


// @George Muchiri
// @governance_knowledge_and_prevalence_of_female_circumcision 

Route::get('Governance/governance_knowledge_and_prevalence_of_female_circumcision', 'Endpoints\Governance@get_governance_knowledge_and_prevalence_of_female_circumcision')->name('governance_knowledge_and_prevalence_of_female_circumcision');

// @George Muchiri
// @governance_magistrates_judges_and_practicing_lawyers

Route::get('Governance/governance_magistrates_judges_and_practicing_lawyers', 'Endpoints\Governance@get_governance_magistrates_judges_and_practicing_lawyers')->name('governance_magistrates_judges_and_practicing_lawyers');

// @George Muchiri
// @governance_members_of_nationalassembly_and_senators

Route::get('Governance/governance_members_of_nationalassembly_and_senators', 'Endpoints\Governance@get_governance_members_of_nationalassembly_and_senators')->name('governance_members_of_nationalassembly_and_senators');

// @George Muchiri
// @governance_murder_cases_and_convictions_obtained_by_high_court

Route::get('Governance/governance_murder_cases_and_convictions_obtained_by_high_court', 'Endpoints\Governance@get_governance_murder_cases_and_convictions_obtained_by_high_court')->name('governance_murder_cases_and_convictions_obtained_by_high_court');

// @George Muchiri
// @governance_number_of_police_prisons_and_probation_officers

Route::get('Governance/governance_number_of_police_prisons_and_probation_officers', 'Endpoints\Governance@get_governance_number_of_police_prisons_and_probation_officers')->name('governance_number_of_police_prisons_and_probation_officers');

// @George Muchiri
// @governance_number_of_refugees_by_age_and_sex

Route::get('Governance/governance_number_of_refugees_by_age_and_sex', 'Endpoints\Governance@get_governance_number_of_refugees_by_age_and_sex')->name('governance_number_of_refugees_by_age_and_sex');


// @George Muchiri
// @governance_offences_committed_against_morality
Route::get('Governance/governance_offences_committed_against_morality', 
'Endpoints\Governance@get_governance_offences_committed_against_morality')->name('governance_offences_committed_against_morality');



// @George Muchiri
// @governance_offence_by_sex_and_command_stations
Route::get('Governance/governance_offence_by_sex_and_command_stations', 
'Endpoints\Governance@get_governance_offence_by_sex_and_command_stations')->name('governance_offence_by_sex_and_command_stations');


// @George Muchiri
// @get_governance_offenders_serving
Route::get('Governance/governance_offenders_serving', 
'Endpoints\Governance@get_governance_offenders_serving')->name('governance_offenders_serving');


// @George Muchiri
// @get_governance_participation_in_key_decision_making_positions_by_sex
Route::get('Governance/governance_participation_in_key_decision_making_positions_by_sex', 
'Endpoints\Governance@get_governance_participation_in_key_decision_making_positions_by_sex')->name('governance_participation_in_key_decision_making_positions_by_sex');


// @George Muchiri
// @get_governance_passports_work_permits_and_foreigners_registered
Route::get('Governance/governance_passports_work_permits_and_foreigners_registered', 
'Endpoints\Governance@get_governance_passports_work_permits_and_foreigners_registered')->name('
governance_passports_work_permits_and_foreigners_registered');


// @George Muchiri
// @get_governance_persons_reported_committed_offences_related_to_drugs
Route::get('Governance/governance_persons_reported_committed_offences_related_to_drugs', 
'Endpoints\Governance@get_governance_persons_reported_committed_offences_related_to_drugs')->name('governance_persons_reported_committed_offences_related_to_drugs');

// @George Muchiri
// @get_governance_persons_reported_tohave_committed_defilement
Route::get('Governance/governance_persons_reported_tohave_committed_defilement', 
'Endpoints\Governance@get_governance_persons_reported_tohave_committed_defilement')->name('
governance_persons_reported_tohave_committed_defilement');


// @George Muchiri
// @get_governance_persons_reported_tohave_committed_defilement
Route::get('Governance/governance_persons_reported_tohave_committed_defilement', 
'Endpoints\Governance@get_governance_persons_reported_tohave_committed_defilement')->name('
governance_persons_reported_tohave_committed_defilement');


// @George Muchiri
// @get_governance_persons_reported_tohave_committed_rape
Route::get('Governance/governance_persons_reported_tohave_committed_rape', 
'Endpoints\Governance@get_governance_persons_reported_tohave_committed_rape')->name('
governance_persons_reported_tohave_committed_rape');


// @George Muchiri
// @get_governance_persons_reported_to_have_committed_homicide_by_sex
Route::get('Governance/governance_persons_reported_to_have_committed_homicide_by_sex', 
'Endpoints\Governance@get_governance_persons_reported_to_have_committed_homicide_by_sex')->name('governance_persons_reported_to_have_committed_homicide_by_sex');

// @George Muchiri
// @get_governance_persons_reported_to_have_committed_robbery_and_theft
Route::get('Governance/governance_persons_reported_to_have_committed_robbery_and_theft', 
'Endpoints\Governance@get_governance_persons_reported_to_have_committed_robbery_and_theft')->name('governance_persons_reported_to_have_committed_robbery_and_theft');



// @George Muchiri
// @get_governance_prevalence_female_circumcision_and_type
Route::get('Governance/governance_prevalence_female_circumcision_and_type', 
'Endpoints\Governance@get_governance_prevalence_female_circumcision_and_type')->name('
governance_prevalence_female_circumcision_and_type');



// @George Muchiri
// @get_governance_prison_population_by_sentence_duration_and_sex
Route::get('Governance/governance_prison_population_by_sentence_duration_and_sex', 
'Endpoints\Governance@get_governance_prison_population_by_sentence_duration_and_sex')->name('
governance_prison_population_by_sentence_duration_and_sex');

// @George Muchiri
// @get_governance_prison_population_by_sentence_duration_and_sex
Route::get('Governance/governance_prison_population_by_sentence_duration_and_sex', 
'Endpoints\Governance@get_governance_prison_population_by_sentence_duration_and_sex')->name('
governance_prison_population_by_sentence_duration_and_sex');



// @George Muchiri
// @get_governance_public_assets_traced_recovered_and_loss_averted
Route::get('Governance/governance_public_assets_traced_recovered_and_loss_averted', 
'Endpoints\Governance@get_governance_public_assets_traced_recovered_and_loss_averted')->name('governance_public_assets_traced_recovered_and_loss_averted');


// @George Muchiri
// @get_governance_registered_voters_by_county_and_by_sex
Route::get('Governance/governance_registered_voters_by_county_and_by_sex', 
'Endpoints\Governance@get_governance_registered_voters_by_county_and_by_sex')->name('
governance_registered_voters_by_county_and_by_sex');



// @George Muchiri
// @get_governance_total_prisoners_committed_for_debt_bysex
Route::get('Governance/governance_total_prisoners_committed_for_debt_bysex', 
'Endpoints\Governance@get_governance_total_prisoners_committed_for_debt_bysex')->name('
governance_total_prisoners_committed_for_debt_bysex');



// @George Muchiri
// @get_governance_women_groups_registration_contributions_uwezo_funds
Route::get('Governance/governance_women_groups_registration_contributions_uwezo_funds', 
'Endpoints\Governance@get_governance_women_groups_registration_contributions_uwezo_funds')->name('governance_women_groups_registration_contributions_uwezo_funds');


// @George Muchiri
// @get_governance_women_groups_registration_contributions_women_groups
Route::get('Governance/governance_women_groups_registration_contributions_women_groups', 
'Endpoints\Governance@get_governance_women_groups_registration_contributions_women_groups')->name('governance_women_groups_registration_contributions_women_groups');

// @George Muchiri
// @get_governance_women_groups_registration_cont_women_enterprise_fund
Route::get('Governance/governance_women_groups_registration_cont_women_enterprise_fund', 
'Endpoints\Governance@get_governance_women_groups_registration_cont_women_enterprise_fund')->name('governance_women_groups_registration_cont_women_enterprise_fund');

// @George Muchiri
// @get_population_by_sex_and_age_groups
Route::get('Population/population_by_sex_and_age_groups', 
'Endpoints\Population@get_population_by_sex_and_age_groups')->name('
population_by_sex_and_age_groups');

// @George Muchiri
// @get_population_by_sex_and_school_attendance

Route::get('Population/population_by_sex_and_school_attendance', 
'Endpoints\Population@get_population_by_sex_and_school_attendance')->name('population_by_sex_and_school_attendance');

// @George Muchiri
// @get_population_by_type_of_disability

Route::get('Population/population_by_type_of_disability', 
'Endpoints\Population@get_population_by_type_of_disability')->name('population_by_type_of_disability');


// @George Muchiri
// @get_population_distribution_sex_number_households_area_density

Route::get('Population/population_distribution_sex_number_households_area_density', 
'Endpoints\Population@get_population_distribution_sex_number_households_area_density')->name('population_distribution_sex_number_households_area_density');

// @George Muchiri
// @get_population_households_by_main_source_of_water

Route::get('Population/population_households_by_main_source_of_water', 
'Endpoints\Population@get_population_households_by_main_source_of_water')->name('population_households_by_main_source_of_water');

// @George Muchiri
// @get_population_households_type_floor_material_main_dwelling_unit

Route::get('Population/population_households_type_floor_material_main_dwelling_unit', 
'Endpoints\Population@get_population_households_type_floor_material_main_dwelling_unit')->name('population_households_type_floor_material_main_dwelling_unit');


// @George Muchiri
// @get_population_percentage_households_ownership_household_assets

Route::get('Population/population_percentage_households_ownership_household_assets', 
'Endpoints\Population@get_population_percentage_households_ownership_household_assets')->name('population_percentage_households_ownership_household_assets');


// @George Muchiri
// @get_population_populationbysexhouseholdsdensityandcensusyears

Route::get('Population/population_populationbysexhouseholdsdensityandcensusyears', 
'Endpoints\Population@get_population_populationbysexhouseholdsdensityandcensusyears')->name('population_populationbysexhouseholdsdensityandcensusyears');


// @George Muchiri
// @get_population_populationprojectionsbyselectedagegroup

Route::get('Population/population_populationprojectionsbyselectedagegroup', 
'Endpoints\Population@get_population_populationprojectionsbyselectedagegroup')->name('population_populationprojectionsbyselectedagegroup');


// @George Muchiri
// @get_population_populationprojectionsbyspecialagegroups

Route::get('Population/population_populationprojectionsbyspecialagegroups', 
'Endpoints\Population@get_population_populationprojectionsbyspecialagegroups')->name('population_populationprojectionsbyspecialagegroups');


// @George Muchiri
// @get_finance_cdf_allocation_by_constituency

Route::get('Finance/finance_cdf_allocation_by_constituency', 
'Endpoints\Finance@get_finance_cdf_allocation_by_constituency')->name('finance_cdf_allocation_by_constituency');

// @George Muchiri
// @get_finance_classification_national_government_expenditure_function

Route::get('Finance/finance_classification_national_government_expenditure_function', 
'Endpoints\Finance@get_finance_classification_national_government_expenditure_function')->name('finance_classification_national_government_expenditure_function');

// @George Muchiri
// @get_finance_county_budget_allocation

Route::get('Finance/finance_county_budget_allocation', 
'Endpoints\Finance@get_finance_county_budget_allocation')->name('finance_county_budget_allocation');

// @George Muchiri
// @get_finance_county_expenditure

Route::get('Finance/finance_county_expenditure', 
'Endpoints\Finance@get_finance_county_expenditure')->name('finance_county_expenditure');


// @George Muchiri
// @get_finance_county_revenue

Route::get('Finance/finance_county_revenue', 
'Endpoints\Finance@get_finance_county_revenue')->name('finance_county_revenue');


// @George Muchiri
// @get_finance_economic_analysis_of_national_government_expenditure

Route::get('Finance/finance_economic_analysis_of_national_government_expenditure', 
'Endpoints\Finance@get_finance_economic_analysis_of_national_government_expenditure')->name('finance_economic_analysis_of_national_government_expenditure');


// @George Muchiri
// @get_finance_economic_classification_of_county_government_expenditure

Route::get('Finance/finance_economic_classification_of_county_government_expenditure', 
'Endpoints\Finance@get_finance_economic_classification_of_county_government_expenditure')->name('finance_economic_classification_of_county_government_expenditure');

// @George Muchiri
// @get_finance_economic_classification_revenue

Route::get('Finance/finance_economic_classification_revenue', 
'Endpoints\Finance@get_finance_economic_classification_revenue')->name('finance_economic_classification_revenue');

// @George Muchiri
// @get_finance_excise_revenue_commodity

Route::get('Finance/finance_excise_revenue_commodity', 
'Endpoints\Finance@get_finance_excise_revenue_commodity')->name(
	'finance_excise_revenue_commodity');


// @George Muchiri
// @get_finance_expenditure_functions_county_governments

Route::get('Finance/finance_expenditure_functions_county_governments', 
'Endpoints\Finance@get_finance_expenditure_functions_county_governments')->name(
	'finance_expenditure_functions_county_governments');

// @George Muchiri
// @get_finance_expenditure_functions_county_governments

Route::get('Finance/finance_expenditure_functions_county_governments', 
'Endpoints\Finance@get_finance_expenditure_functions_county_governments')->name(
	'finance_expenditure_functions_county_governments');

// @George Muchiri
// @get_finance_money_banking_index

Route::get('Finance/finance_money_banking_index', 
'Endpoints\Finance@get_finance_money_banking_index')->name(
	'finance_money_banking_index');

// @George Muchiri
// @get_finance_money_banking_institutions

Route::get('Finance/finance_money_banking_institutions', 
'Endpoints\Finance@get_finance_money_banking_institutions')->name(
	'finance_money_banking_institutions');


// @George Muchiri
// @get_finance_national_government_expenditure

Route::get('Finance/finance_national_government_expenditure', 
'Endpoints\Finance@get_finance_national_government_expenditure')->name(
	'finance_national_government_expenditure');

// @George Muchiri
// @get_finance_national_government_expenditure_purpose

Route::get('Finance/finance_national_government_expenditure_purpose', 
'Endpoints\Finance@get_finance_national_government_expenditure_purpose')->name(
	'finance_national_government_expenditure_purpose');

// @George Muchiri
// @get_ finance_outstanding_debt_international_organization

Route::get('Finance/finance_outstanding_debt_international_organization', 
'Endpoints\Finance@get_finance_outstanding_debt_international_organization')->name(
	'finance_outstanding_debt_international_organization');


// @George Muchiri
// @get_finance_outstanding_debt_lending_country

Route::get('Finance/finance_outstanding_debt_lending_country', 
'Endpoints\Finance@get_finance_outstanding_debt_lending_country')->name(
	'finance_outstanding_debt_lending_country');

// @George Muchiri
// @get_finance_statement_of_national_government_operations

Route::get('Finance/finance_statement_of_national_government_operations', 
'Endpoints\Finance@get_finance_statement_of_national_government_operations')->name(
	'finance_statement_of_national_government_operations');


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

//Health
//health_kihibs_received_free_medical_services @fredrick muiruri
Route::get('Health/health_kihibs_received_free_medical_services', 'Endpoints\Health@health_kihibs_received_free_medical_services')->name('health_kihibs_received_free_medical_services');

//Health
//health_kihibs_reported_being_sick_injured_by_cause @fredrick muiruri
Route::get('Health/health_kihibs_reported_being_sick_injured_by_cause', 'Endpoints\Health@health_kihibs_reported_being_sick_injured_by_cause')->name('health_kihibs_reported_being_sick_injured_by_cause');
//Health
//health_kihibs_reported_being_sick_injured_by_type_of_sickness @fredrick muiruri
Route::get('Health/health_kihibs_reported_being_sick_injured_by_type_of_sickness', 'Endpoints\Health@health_kihibs_reported_being_sick_injured_by_type_of_sickness')->name('health_kihibs_reported_being_sick_injured_by_type_of_sickness');
//Health
//health_kihibs_reported_sickness_by_age_group @fredrick muiruri
Route::get('Health/health_kihibs_reported_sickness_by_age_group', 'Endpoints\Health@health_kihibs_reported_sickness_by_age_group')->name('health_kihibs_reported_sickness_by_age_group');
//Health
//health_kihibs_reported_sickness_by_health_provider @fredrick muiruri
Route::get('Health/health_kihibs_reported_sickness_by_health_provider', 'Endpoints\Health@health_kihibs_reported_sickness_by_health_provider')->name('health_kihibs_reported_sickness_by_health_provider');
//Health
//health_kihibs_reported_sickness_by_no_of_days_missed @fredrick muiruri
Route::get('Health/health_kihibs_reported_sickness_by_no_of_days_missed', 'Endpoints\Health@health_kihibs_reported_sickness_by_no_of_days_missed')->name('health_kihibs_reported_sickness_by_no_of_days_missed');
//Health
//health_kihibs_type_of_fluid_of_food_given_during_diarrhoea @fredrick muiruri
Route::get('Health/health_kihibs_type_of_fluid_of_food_given_during_diarrhoea', 'Endpoints\Health@health_kihibs_type_of_fluid_of_food_given_during_diarrhoea')->name('health_kihibs_type_of_fluid_of_food_given_during_diarrhoea');
//Health
//health_kihibs_type_of_health_care_sought @fredrick muiruri
Route::get('Health/health_kihibs_type_of_health_care_sought', 'Endpoints\Health@health_kihibs_type_of_health_care_sought')->name('health_kihibs_type_of_health_care_sought');
//Health
//health_kihibs_who_diagnosed_illness_injury @fredrick muiruri
Route::get('Health/health_kihibs_who_diagnosed_illness_injury', 'Endpoints\Health@health_kihibs_who_diagnosed_illness_injury')->name('health_kihibs_who_diagnosed_illness_injury');
//Health
//health_kihibs_who_diagnosed_illness_injury @fredrick muiruri
Route::get('Health/health_kihibs_who_diagnosed_illness_injury', 'Endpoints\Health@health_kihibs_who_diagnosed_illness_injury')->name('health_kihibs_who_diagnosed_illness_injury');
//Health
//health_maternal_care @fredrick muiruri
Route::get('Health/health_maternal_care', 'Endpoints\Health@health_maternal_care')->name('health_maternal_care');
//Health
//health_months @fredrick muiruri
Route::get('Health/health_months', 'Endpoints\Health@health_months')->name('health_months');
//Health
//health_nhif_members @fredrick muiruri
Route::get('Health/health_nhif_members', 'Endpoints\Health@health_nhif_members')->name('health_nhif_members');
//Health
//health_nhif_resources @fredrick muiruri
Route::get('Health/health_nhif_resources', 'Endpoints\Health@health_nhif_resources')->name('health_nhif_resources');
//Health
//health_nutritional_status_of_children @fredrick muiruri
Route::get('Health/health_nutritional_status_of_children', 'Endpoints\Health@health_nutritional_status_of_children')->name('health_nutritional_status_of_children');
//Health
//health_nutritional_status_of_women @fredrick muiruri
Route::get('Health/health_nutritional_status_of_women', 'Endpoints\Health@health_nutritional_status_of_women')->name('health_nutritional_status_of_women');
//Health
//health_percentage_adults_who_are_current_users @fredrick muiruri
Route::get('Health/health_percentage_adults_who_are_current_users', 'Endpoints\Health@health_percentage_adults_who_are_current_users')->name('health_percentage_adults_who_are_current_users');
//Health
//health_percentage_incidence_of_diseases_in_kenya @fredrick muiruri
Route::get('Health/health_percentage_incidence_of_diseases_in_kenya', 'Endpoints\Health@health_percentage_incidence_of_diseases_in_kenya')->name('health_percentage_incidence_of_diseases_in_kenya');
//Health
//health_percentage_who_drink_alcohol_by_age @fredrick muiruri
Route::get('Health/health_percentage_who_drink_alcohol_by_age', 'Endpoints\Health@health_percentage_who_drink_alcohol_by_age')->name('health_percentage_who_drink_alcohol_by_age');
//Health
//health_place_of_delivery @fredrick muiruri
Route::get('Health/health_place_of_delivery', 'Endpoints\Health@health_place_of_delivery')->name('health_place_of_delivery');
//Health
//health_prevalence_of_overweight_and_obesity @fredrick muiruri
Route::get('Health/health_prevalence_of_overweight_and_obesity', 'Endpoints\Health@health_prevalence_of_overweight_and_obesity')->name('health_prevalence_of_overweight_and_obesity');
//Health
//health_registeredmedicalpersonnel @fredrick muiruri
Route::get('Health/health_registeredmedicalpersonnel', 'Endpoints\Health@health_registeredmedicalpersonnel')->name('health_registeredmedicalpersonnel');
//Health
//health_registeredmedicalpersonnel_ids @fredrick muiruri
Route::get('Health/health_registeredmedicalpersonnel_ids', 'Endpoints\Health@health_registeredmedicalpersonnel_ids')->name('health_registeredmedicalpersonnel_ids');
//Health
//health_registered_active_nhif_members_by_county @fredrick muiruri
Route::get('Health/health_registered_active_nhif_members_by_county', 'Endpoints\Health@health_registered_active_nhif_members_by_county')->name('health_registered_active_nhif_members_by_county');
//Health
//health_registered_active_nhif_members_nationally @fredrick muiruri
Route::get('Health/health_registered_active_nhif_members_nationally', 'Endpoints\Health@health_registered_active_nhif_members_nationally')->name('health_registered_active_nhif_members_nationally');
//Health
//health_registered_medical_laboratories_by_counties @fredrick muiruri
Route::get('Health/health_registered_medical_laboratories_by_counties', 'Endpoints\Health@health_registered_medical_laboratories_by_counties')->name('health_registered_medical_laboratories_by_counties');
//Health
//health_sectors @fredrick muiruri
Route::get('Health/health_sectors', 'Endpoints\Health@health_sectors')->name('health_sectors');
//Health
//health_subcounty @fredrick muiruri
Route::get('Health/health_subcounty', 'Endpoints\Health@health_subcounty')->name('health_subcounty');
//Health
//health_use_of_mosquito_nets_by_children @fredrick muiruri
Route::get('Health/health_use_of_mosquito_nets_by_children', 'Endpoints\Health@health_use_of_mosquito_nets_by_children')->name('health_use_of_mosquito_nets_by_children');



//Ict  ict_kihibs_households_owned_ict_equipment_services @david
Route::get('Ict/ict_kihibs_households_owned_ict_equipment_services', 
  'Endpoints\Ict@get_ict_kihibs_households_owned_ict_equipment_services')->
    name('ict_kihibs_households_owned_ict_equipment_services');


//Ict   ict_kihibs_households_without_internet_by_reason @david
Route::get('Ict/ict_kihibs_households_without_internet_by_reason', 
  'Endpoints\Ict@get_ict_kihibs_households_without_internet_by_reason')->
    name('ict_kihibs_households_without_internet_by_reason');


//Ict   ict_kihibs_households_with_internet_by_type @david
Route::get('Ict/ict_kihibs_households_with_internet_by_type', 
  'Endpoints\Ict@get_ict_kihibs_households_with_internet_by_type')->
    name('ict_kihibs_households_with_internet_by_type');


//Ict   ict_kihibs_households_with_tv @david
Route::get('Ict/ict_kihibs_households_with_tv', 
  'Endpoints\Ict@get_ict_kihibs_households_with_tv')->
    name('ict_kihibs_households_with_tv');


    //Ict  ict_kihibs_population_above18by_reasonnothaving_phone @david
Route::get('Ict/ict_kihibs_population_above18by_reasonnothaving_phone', 
  'Endpoints\Ict@get_ict_kihibs_population_above18by_reasonnothaving_phone')->
    name('ict_kihibs_population_above18by_reasonnothaving_phone');


   //Ict  ict_kihibs_population_above18subscribed_mobilemoney @david
Route::get('Ict/ict_kihibs_population_above18subscribed_mobilemoney', 
  'Endpoints\Ict@get_ict_kihibs_population_above18subscribed_mobilemoney')->
    name('ict_kihibs_population_above18subscribed_mobilemoney');




   //Ict   ict_kihibs_population_by_ictequipment_and_servicesused @david
Route::get('Ict/ict_kihibs_population_by_ictequipment_and_servicesused', 
  'Endpoints\Ict@get_ict_kihibs_population_by_ictequipment_and_servicesused')->
    name('ict_kihibs_population_by_ictequipment_and_servicesusedey');


   //Ict    ict_kihibs_population_that_didntuseinternet_by_reason @david
Route::get('Ict/ict_kihibs_population_that_didntuseinternet_by_reason', 
  'Endpoints\Ict@get_ict_kihibs_population_that_didntuseinternet_by_reason')->
    name('ict_kihibs_population_that_didntuseinternet_by_reason');



   //Ict     ict_kihibs_population_that_used_internet_by_purpose @david
Route::get('Ict/ict_kihibs_population_that_used_internet_by_purpose', 
  'Endpoints\Ict@get_ict_kihibs_population_that_used_internet_by_purpose')->
    name('ict_kihibs_population_that_used_internet_by_purpose');



     //Ict      ict_kihibs_population_who_used_internet_by_place @david
Route::get('Ict/ict_kihibs_population_who_used_internet_by_place', 
  'Endpoints\Ict@get_ict_kihibs_population_who_used_internet_by_place')->
    name('ict_kihibs_population_who_used_internet_by_place');
    



     //Ict     ict_kihibs_population_withmobilephone_andaveragesims @david
Route::get('Ict/ict_kihibs_population_withmobilephone_andaveragesims', 
  'Endpoints\Ict@get_ict_kihibs_population_withmobilephone_andaveragesims')->
    name(' ict_kihibs_population_withmobilephone_andaveragesims');
