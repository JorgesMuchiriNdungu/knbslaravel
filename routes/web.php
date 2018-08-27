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


// @George 
// @get_governance_registered_voters_by_county_and_by_sex
Route::get('Governance/governance_registered_voters_by_county_and_by_sex', 
'Endpoints\Governance@get_governance_registered_voters_by_county_and_by_sex')->name('
governance_registered_voters_by_county_and_by_sex');



// @George 
// @get_governance_total_prisoners_committed_for_debt_bysex
Route::get('Governance/governance_total_prisoners_committed_for_debt_bysex', 
'Endpoints\Governance@get_governance_total_prisoners_committed_for_debt_bysex')->name('
governance_total_prisoners_committed_for_debt_bysex');



// @George 
// @get_governance_women_groups_registration_contributions_uwezo_funds
Route::get('Governance/governance_women_groups_registration_contributions_uwezo_funds', 
'Endpoints\Governance@get_governance_women_groups_registration_contributions_uwezo_funds')->name('governance_women_groups_registration_contributions_uwezo_funds');


// @George 
// @get_governance_women_groups_registration_contributions_women_groups
Route::get('Governance/governance_women_groups_registration_contributions_women_groups', 
'Endpoints\Governance@get_governance_women_groups_registration_contributions_women_groups')->name('governance_women_groups_registration_contributions_women_groups');

// @George 
// @get_governance_women_groups_registration_cont_women_enterprise_fund
Route::get('Governance/governance_women_groups_registration_cont_women_enterprise_fund', 
'Endpoints\Governance@get_governance_women_groups_registration_cont_women_enterprise_fund')->name('governance_women_groups_registration_cont_women_enterprise_fund');

// @George 
// @get_population_by_sex_and_age_groups
Route::get('Population/population_by_sex_and_age_groups', 
'Endpoints\Population@get_population_by_sex_and_age_groups')->name('
population_by_sex_and_age_groups');

// @George 
// @get_population_by_sex_and_school_attendance

Route::get('Population/population_by_sex_and_school_attendance', 
'Endpoints\Population@get_population_by_sex_and_school_attendance')->name('population_by_sex_and_school_attendance');

// @George 
// @get_population_by_type_of_disability

Route::get('Population/population_by_type_of_disability', 
'Endpoints\Population@get_population_by_type_of_disability')->name('population_by_type_of_disability');


// @George 
// @get_population_distribution_sex_number_households_area_density

Route::get('Population/population_distribution_sex_number_households_area_density', 
'Endpoints\Population@get_population_distribution_sex_number_households_area_density')->name('population_distribution_sex_number_households_area_density');

// @George 
// @get_population_households_by_main_source_of_water

Route::get('Population/population_households_by_main_source_of_water', 
'Endpoints\Population@get_population_households_by_main_source_of_water')->name('population_households_by_main_source_of_water');

// @George 
// @get_population_households_type_floor_material_main_dwelling_unit

Route::get('Population/population_households_type_floor_material_main_dwelling_unit', 
'Endpoints\Population@get_population_households_type_floor_material_main_dwelling_unit')->name('population_households_type_floor_material_main_dwelling_unit');


// @George 
// @get_population_percentage_households_ownership_household_assets

Route::get('Population/population_percentage_households_ownership_household_assets', 
'Endpoints\Population@get_population_percentage_households_ownership_household_assets')->name('population_percentage_households_ownership_household_assets');
