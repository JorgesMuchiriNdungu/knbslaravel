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
