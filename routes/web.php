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

