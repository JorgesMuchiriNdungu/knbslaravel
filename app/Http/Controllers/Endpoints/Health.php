<?php

namespace App\Http\Controllers\Endpoints;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Health extends Controller
{
    //function to get data from health_counties

    public function health_counties(){
    	$data = DB::table('health_counties')->get();
				 
			$county = array();
			$county['name'] = 'county name';
			 
			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			}
			 
			$result = array();
			array_push($result,$county);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
    //function to get data from health_current_use_of_contraception_by_county

    public function health_current_use_of_contraception_by_county(){
    	$data = DB::table('health_current_use_of_contraception_by_county')->join('health_counties', 'health_current_use_of_contraception_by_county.county_id', '=', 'health_current_use_of_contraception_by_county.county_id')->get();
				  
			$county = array();
			$county['name'] = 'county name';
			
			$series1 = array();
			$series1['name'] = 'any modem method';
		
			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->any_modem_method;
			}
			 
			$result = array();
			array_push($result,$county);
			array_push($result,$series1);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }

        //function to get data from health_distributionofoutpatientvisitsbytypeofhealthcareprovider

    public function health_distributionofoutpatientvisitsbytypeofhealthcareprovider(){
    	$data = DB::table('health_distributionofoutpatientvisitsbytypeofhealthcareprovider')->join('health_counties', 'health_distributionofoutpatientvisitsbytypeofhealthcareprovider.county_id', '=', 'health_distributionofoutpatientvisitsbytypeofhealthcareprovider.county_id')->get();
				  
			$county = array();
			$county['name'] = 'county name';
			
			$series1 = array();
			$series1['name'] = 'public';

			$series2 = array();
			$series2['name'] = 'private';

			$series3 = array();
			$series3['name'] = 'faith based';

			$series4 = array();
			$series4['name'] = 'others';
		
			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->public;
			$series2['data'][] = $row->private;
			$series3['data'][] = $row->faith_based;
			$series4['data'][] = $row->others;
			}
			 
			$result = array();
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }

        //function to get data from health_early_childhood_mortality_rates_by_sex

    public function health_early_childhood_mortality_rates_by_sex(){
    	$data = DB::table('health_early_childhood_mortality_rates_by_sex')->get();
				 
            $year = array();
			$year['name'] = 'year';
            $series1 = array();
			$series1['name'] = 'mortality rate';
			$series2 = array();
			$series2['name'] = 'status';
			$series3 = array();
			$series3['name'] = 'gender';
			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->mortality_rate;
			$series2['data'][] = $row->status;
			$series3['data'][] = $row->gender;
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }

     //function to get data from health_fertility_by_education_status

    public function health_fertility_by_education_status(){
    	$data = DB::table('health_fertility_by_education_status')->get();
				 
            $year = array();
			$year['name'] = 'year';
            $series1 = array();
			$series1['name'] = 'fertility';
			$series2 = array();
			$series2['name'] = 'education status';
			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->fertility;
			$series2['data'][] = $row->education_status;
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }


     //function to get data from health_fertility_rate_by_age_and_residence

    public function health_fertility_rate_by_age_and_residence(){
    	$data = DB::table('health_fertility_rate_by_age_and_residence')->get();
				 
            $year = array();
			$year['name'] = 'year';
            $series1 = array();
			$series1['name'] = 'fertility rate';
			$series2 = array();
			$series2['name'] = 'age group';
			$series3 = array();
			$series3['name'] = 'residence';
			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->fertility_rate;
			$series2['data'][] = $row->age_group;
			$series3['data'][] = $row->residence;
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }


    //function to get data from health_hiv_aids_awareness_and_testing

    public function health_hiv_aids_awareness_and_testing(){
    	$data = DB::table('health_hiv_aids_awareness_and_testing')->join('health_counties', 'health_hiv_aids_awareness_and_testing.county_id', '=', 'health_hiv_aids_awareness_and_testing.county_id')->get();
				  
			$county = array();
			$county['name'] = 'county name';
			
			$series1 = array();
			$series1['name'] = 'male';

			$series2 = array();
			$series2['name'] = 'female';

			$series3 = array();
			$series3['name'] = 'hiv awareness';

			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->male;
			$series2['data'][] = $row->female;
			$series3['data'][] = $row->hiv_awareness;
			}
			 
			$result = array();
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }

     //function to get data from health_immunization_rate

    public function health_immunization_rate(){
    	$data = DB::table('health_immunization_rate')->join('health_counties', 'health_immunization_rate.county_id', '=', 'health_immunization_rate.county_id')->get();

    	    $year = array();
			$year['name'] = 'year';
				  
			$series1 = array();
			$series1['name'] = 'county name';
			
			$series2 = array();
			$series2['name'] = 'rate';

			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
            $series1['data'][] = $row->county_name;
			$series2['data'][] = $row->rate;
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }

    //function to get data from health_insurance_coverage_by_counties_and_types

    public function health_insurance_coverage_by_counties_and_types(){
    	$data = DB::table('health_insurance_coverage_by_counties_and_types')->join('health_counties', 'health_insurance_coverage_by_counties_and_types.county_id', '=', 'health_insurance_coverage_by_counties_and_types.county_id')->get();

			$county = array();
			$county['name'] = 'county name';
			
			$series1 = array();
			$series1['name'] = 'insured';

			$series2 = array();
			$series2['name'] = 'nhif';

			$series3 = array();
			$series3['name'] = 'cbhi';

			$series4 = array();
			$series4['name'] = 'private';

			$series5 = array();
			$series5['name'] = 'others';

			foreach ($data as $row)
			{
            $county['data'][] = $row->county_name;
			$series1['data'][] = $row->insured;
			$series2['data'][] = $row->nhif;
			$series3['data'][] = $row->cbhi;
			$series4['data'][] = $row->private;
			$series5['data'][] = $row->others;
			}
			 
			$result = array();
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }

    //function to get data from health_kihibs_children_by_additional_supplement

    public function health_kihibs_children_by_additional_supplement(){
    	$data = DB::table('health_kihibs_children_by_additional_supplement')->join('health_counties', 'health_kihibs_children_by_additional_supplement.county_id', '=', 'health_kihibs_children_by_additional_supplement.county_id')->get();

			$series1 = array();
			$series1['name'] = 'zinc solution';
			
			$series2 = array();
			$series2['name'] = 'sugar salt solution';

			$series3 = array();
			$series3['name'] = 'other solutions';

			$series4 = array();
			$series4['name'] = 'none';

			$series5 = array();
			$series5['name'] = 'not stated';

			$series6 = array();
			$series6['name'] = 'no of individuals';

			$county = array();
			$county['name'] = 'county name';

			foreach ($data as $row)
			{
            $series1['data'][] = $row->zinc_solution;
			$series2['data'][] = $row->sugar_salt_solution;
			$series3['data'][] = $row->other_solutions;
			$series4['data'][] = $row->none;
			$series5['data'][] = $row->not_stated;
			$series6['data'][] = $row->no_of_individuals;
			$county['data'][] = $row->county_name;
			}
			 
			$result = array();
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$county);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }

        //function to get data from health_kihibs_children_by_place_of_delivery

    public function health_kihibs_children_by_place_of_delivery(){
    	$data = DB::table('health_kihibs_children_by_place_of_delivery')->join('health_counties', 'health_kihibs_children_by_place_of_delivery.county_id', '=', 'health_kihibs_children_by_place_of_delivery.county_id')->get();

			$series1 = array();
			$series1['name'] = 'hospital';
			
			$series2 = array();
			$series2['name'] = 'health centre';

			$series3 = array();
			$series3['name'] = 'clinic dispensary';

			$series4 = array();
			$series4['name'] = 'maternity home';

			$series5 = array();
			$series5['name'] = 'at home';

			$series6 = array();
			$series6['name'] = 'not stated';

			$series7 = array();
			$series7['name'] = 'no of individuals';

			$county = array();
			$county['name'] = 'county name';

			foreach ($data as $row)
			{
            $series1['data'][] = $row->hospital;
			$series2['data'][] = $row->health_centre;
			$series3['data'][] = $row->clininc_dispensary;
			$series4['data'][] = $row->maternity_home;
			$series5['data'][] = $row->at_home;
			$series6['data'][] = $row->not_stated;
			$series7['data'][] = $row->no_of_individuals;
			$county['data'][] = $row->county_name;
			}
			 
			$result = array();
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$county);
					
			print json_encode($result, JSON_NUMERIC_CHECK);

		}

     //function to get data from health_kihibs_children_by_who_assisted_at_birth

    public function health_kihibs_children_by_who_assisted_at_birth(){
    	$data = DB::table('health_kihibs_children_by_who_assisted_at_birth')->join('health_counties', 'health_kihibs_children_by_who_assisted_at_birth.county_id', '=', 'health_kihibs_children_by_who_assisted_at_birth.county_id')->get();

			$series1 = array();
			$series1['name'] = 'doctor';
			
			$series2 = array();
			$series2['name'] = 'midwife nurse';

			$series3 = array();
			$series3['name'] = 'tba';

			$series4 = array();
			$series4['name'] = 'ttba';

			$series5 = array();
			$series5['name'] = 'self';

			$series6 = array();
			$series6['name'] = 'other';

			$series7 = array();
			$series7['name'] = 'not stated';

			$series8 = array();
			$series8['name'] = 'no of individuals';

			$county = array();
			$county['name'] = 'county name';

			foreach ($data as $row)
			{
            $series1['data'][] = $row->doctor;
			$series2['data'][] = $row->midwife_nurse;
			$series3['data'][] = $row->tba;
			$series4['data'][] = $row->ttba;
			$series5['data'][] = $row->self;
			$series6['data'][] = $row->other;
			$series7['data'][] = $row->not_stated;
			$series8['data'][] = $row->no_of_individuals;
			$county['data'][] = $row->county_name;
			}
			 
			$result = array();
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$series8);
			array_push($result,$county);
					
			print json_encode($result, JSON_NUMERIC_CHECK);

		}

		//function to get data from health_kihibs_children_immmunized_against_measles

    public function health_kihibs_children_immmunized_against_measles(){
    	$data = DB::table('health_kihibs_children_immmunized_against_measles')->join('health_counties', 'health_kihibs_children_immmunized_against_measles.county_id', '=', 'health_kihibs_children_immmunized_against_measles.county_id')->get();

			$series1 = array();
			$series1['name'] = 'measles vaccination';
			
			$series2 = array();
			$series2['name'] = 'proportion';

			$county = array();
			$county['name'] = 'county name';

			foreach ($data as $row)
			{
            $series1['data'][] = $row->measles_vaccination;
			$series2['data'][] = $row->proportion;
			$county['data'][] = $row->county_name;
			}
			 
			$result = array();
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$county);
					
			print json_encode($result, JSON_NUMERIC_CHECK);

		}
        
        	//function to get data from health_kihibs_children_that_had_diarrhoea

    public function health_kihibs_children_that_had_diarrhoea(){
    	$data = DB::table('health_kihibs_children_that_had_diarrhoea')->join('health_counties', 'health_kihibs_children_that_had_diarrhoea.county_id', '=', 'health_kihibs_children_that_had_diarrhoea.county_id')->get();

			$series1 = array();
			$series1['name'] = 'yes';
			
			$series2 = array();
			$series2['name'] = 'not stated';

			$series3 = array();
			$series3['name'] = 'no of individuals';

			$county = array();
			$county['name'] = 'county name';

			foreach ($data as $row)
			{
            $series1['data'][] = $row->yes;
			$series2['data'][] = $row->not_stated;
			$series3['data'][] = $row->no_of_individuals;
			$county['data'][] = $row->county_name;
			}
			 
			$result = array();
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$county);
					
			print json_encode($result, JSON_NUMERIC_CHECK);

		}
        //function to get data from health_kihibs_disability_by_type

    public function health_kihibs_disability_by_type(){
    	$data = DB::table('health_kihibs_disability_by_type')->join('health_counties', 'health_kihibs_disability_by_type.county_id', '=', 'health_kihibs_disability_by_type.county_id')->get();

			$series1 = array();
			$series1['name'] = 'visual';
			
			$series2 = array();
			$series2['name'] = 'hearing';

			$series3 = array();
			$series3['name'] = 'physical';

			$series4 = array();
			$series4['name'] = 'mental';

			$series5 = array();
			$series5['name'] = 'self care';

			$series6 = array();
			$series6['name'] = 'others';

			$series7 = array();
			$series7['name'] = 'any disability';

			$series8 = array();
			$series8['name'] = 'no disability';

			$series9 = array();
			$series9['name'] = 'no of individuals';

			$county = array();
			$county['name'] = 'county name';

			foreach ($data as $row)
			{
            $series1['data'][] = $row->visual;
			$series2['data'][] = $row->hearing;
			$series3['data'][] = $row->physical;
			$series4['data'][] = $row->mental;
			$series5['data'][] = $row->self_care;
			$series6['data'][] = $row->others;
			$series7['data'][] = $row->any_disability;
			$series8['data'][] = $row->no_disability;
			$series9['data'][] = $row->no_of_individuals;
			$county['data'][] = $row->county_name;
			}
			 
			$result = array();
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$series8);
			array_push($result,$series9);
			array_push($result,$county);
					
			print json_encode($result, JSON_NUMERIC_CHECK);

		}
 //function to get data from health_kihibs_disability_that_had_difficulty

    public function health_kihibs_disability_that_had_difficulty(){
    	$data = DB::table('health_kihibs_disability_that_had_difficulty')->join('health_counties', 'health_kihibs_disability_that_had_difficulty.county_id', '=', 'health_kihibs_disability_that_had_difficulty.county_id')->get();

			$series1 = array();
			$series1['name'] = 'yes';
			
			$series2 = array();
			$series2['name'] = 'no';

			$series3 = array();
			$series3['name'] = 'dont know';

			$series4 = array();
			$series4['name'] = 'not stated';

			$series5 = array();
			$series5['name'] = 'no of individuals';

			$county = array();
			$county['name'] = 'county name';

			foreach ($data as $row)
			{
            $series1['data'][] = $row->yes;
			$series2['data'][] = $row->no;
			$series3['data'][] = $row->dont_know;
			$series4['data'][] = $row->not_stated;
			$series5['data'][] = $row->no_of_individuals;
			$county['data'][] = $row->county_name;
			}
			 
			$result = array();
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$county);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
        
}

//function to get data from health_kihibs_health_insurance_cover_by_type

    public function health_kihibs_health_insurance_cover_by_type(){
    	$data = DB::table('health_kihibs_health_insurance_cover_by_type')->join('health_counties', 'health_kihibs_health_insurance_cover_by_type.county_id', '=', 'health_kihibs_health_insurance_cover_by_type.county_id')->get();

			$series1 = array();
			$series1['name'] = 'nhif';
			
			$series2 = array();
			$series2['name'] = 'private contributory';

			$series3 = array();
			$series3['name'] = 'private non contributory';

			$series4 = array();
			$series4['name'] = 'employee contributory';

			$series5 = array();
			$series5['name'] = 'employee non contributory';

			$series6 = array();
			$series6['name'] = 'other';

			$series7 = array();
			$series7['name'] = 'no of individuals';

			$county = array();
			$county['name'] = 'county_name';

			foreach ($data as $row)
			{
            $series1['data'][] = $row->nhif;
			$series2['data'][] = $row->private_contributory;
			$series3['data'][] = $row->private_non_contributory;
			$series4['data'][] = $row->employee_contributory;
			$series5['data'][] = $row->employee_non_contributory;
			$series6['data'][] = $row->other;
			$series7['data'][] = $row->no_of_individuals;
			$county['data'][] = $row->county_name;
			}
			 
			$result = array();
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$county);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
        
}

//function to get data from health_kihibs_incidence_of_sickness_injury

    public function health_kihibs_incidence_of_sickness_injury(){
    	$data = DB::table('health_kihibs_incidence_of_sickness_injury')->join('health_counties', 'health_kihibs_incidence_of_sickness_injury.county_id', '=', 'health_kihibs_incidence_of_sickness_injury.county_id')->get();

			$series1 = array();
			$series1['name'] = 'sick injured';
			
			$series2 = array();
			$series2['name'] = 'no of individuals';

			$series3 = array();
			$series3['name'] = 'gender';

			$county = array();
			$county['name'] = 'county name';

			foreach ($data as $row)
			{
            $series1['data'][] = $row->sick_injured;
			$series2['data'][] = $row->no_of_individuals;
			$series3['data'][] = $row->gender;
			$county['data'][] = $row->county_name;
			}
			 
			$result = array();
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$county);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
        


}

//function to get data from health_kihibs_received_free_medical_services

    public function health_kihibs_received_free_medical_services(){
    	$data = DB::table('health_kihibs_received_free_medical_services')->join('health_counties', 'health_kihibs_received_free_medical_services.county_id', '=', 'health_kihibs_received_free_medical_services.county_id')->get();

			$series1 = array();
			$series1['name'] = 'percentage distribution';
			
			$series2 = array();
			$series2['name'] = 'service type';

			$county = array();
			$county['name'] = 'county name';

			foreach ($data as $row)
			{
            $series1['data'][] = $row->percentage_distribution;
			$series2['data'][] = $row->service_type;
			$county['data'][] = $row->county_name;
			}
			 
			$result = array();
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$county);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
        
}

//function to get data from health_kihibs_reported_being_sick_injured_by_cause

    public function health_kihibs_reported_being_sick_injured_by_cause(){
    	$data = DB::table('health_kihibs_reported_being_sick_injured_by_cause')->join('health_counties', 'health_kihibs_reported_being_sick_injured_by_cause.county_id', '=', 'health_kihibs_reported_being_sick_injured_by_cause.county_id')->get();

			$series1 = array();
			$series1['name'] = 'percentage distribution';
			
			$series2 = array();
			$series2['name'] = 'cause';

			$county = array();
			$county['name'] = 'county name';

			foreach ($data as $row)
			{
            $series1['data'][] = $row->percentage_distribution;
			$series2['data'][] = $row->cause;
			$county['data'][] = $row->county_name;
			}
			 
			$result = array();
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$county);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
        
}

//function to get data from health_kihibs_reported_being_sick_injured_by_type_of_sickness

    public function health_kihibs_reported_being_sick_injured_by_type_of_sickness(){
    	$data = DB::table('health_kihibs_reported_being_sick_injured_by_type_of_sickness')->join('health_counties', 'health_kihibs_reported_being_sick_injured_by_type_of_sickness.county_id', '=', 'health_kihibs_reported_being_sick_injured_by_type_of_sickness.county_id')->get();

			$series1 = array();
			$series1['name'] = 'fever malaria';
			
			$series2 = array();
			$series2['name'] = 'stomach problems';

			$series3 = array();
			$series3['name'] = 'diarrhoea';

			$series4 = array();
			$series4['name'] = 'vomiting';

			$series5 = array();
			$series5['name'] = 'upper respiratory infection';

			$series6 = array();
			$series6['name'] = 'lower respiratory infection';

			$series7 = array();
			$series7['name'] = 'flu';

			$series8 = array();
			$series8['name'] = 'asthma';

			$series9 = array();
			$series9['name'] = 'headache';

			$series10 = array();
			$series10['name'] = 'skin problem';

			$series11 = array();
			$series11['name'] = 'dental problem';

			$series12 = array();
			$series12['name'] = 'eye problem';

			$series13 = array();
			$series13['name'] = 'ear nose throat';

			$series14 = array();
			$series14['name'] = 'backache';

            $series15 = array();
			$series15['name'] = 'tb';

			$series16 = array();
			$series16['name'] = 'heart problem';

			$series17 = array();
			$series17['name'] = 'blood pressure';

			$series18 = array();
			$series18['name'] = 'pain while passing urine';

			$series19 = array();
			$series19['name'] = 'diabetes';

			$series20 = array();
			$series20['name'] = 'mental disorder';

			$series21 = array();
			$series21['name'] = 'stis';

			$series22 = array();
			$series22['name'] = 'burn';

			$series23 = array();
			$series23['name'] = 'fracture';

			$series24 = array();
			$series24['name'] = 'wound cut';

			$series25 = array();
			$series25['name'] = 'poisoning';

			$series26 = array();
			$series26['name'] = 'pregnancy related';

			$series27 = array();
			$series27['name'] = 'cancer';

			$series28 = array();
			$series28['name'] = 'other long term illness';

			$series29 = array();
			$series29['name'] = 'hiv aids';

			$series30 = array();
			$series30['name'] = 'typhoid';

			$series31 = array();
			$series31['name'] = 'other';

			$series32 = array();
			$series32['name'] = 'no of individuals';

			$county = array();
			$county['name'] = 'county name';

			foreach ($data as $row)
			{
            $series1['data'][] = $row->fever_malaria;
			$series2['data'][] = $row->stomach_problems;
			$series3['data'][] = $row->diarrhoea;
			$series4['data'][] = $row->vomiting;
			$series5['data'][] = $row->upper_respiratory_infection;
			$series6['data'][] = $row->lower_respiratory_infection;
			$series7['data'][] = $row->flu;
			$series8['data'][] = $row->asthma;
			$series9['data'][] = $row->headache;
			$series10['data'][] = $row->skin_problem;
			$series11['data'][] = $row->dental_problem;
			$series12['data'][] = $row->eye_problem;
			$series13['data'][] = $row->ear_nose_throat;
			$series14['data'][] = $row->backache;
			$series15['data'][] = $row->tb;
			$series16['data'][] = $row->heart_problem;
			$series17['data'][] = $row->blood_pressure;
			$series18['data'][] = $row->pain_while_passing_urine;
			$series19['data'][] = $row->diabetes;
			$series20['data'][] = $row->mental_disorder;
			$series21['data'][] = $row->stis;
			$series22['data'][] = $row->burn;
			$series23['data'][] = $row->fracture;
			$series24['data'][] = $row->wound_cut;
			$series25['data'][] = $row->poisoning;
			$series26['data'][] = $row->pregnancy_related;
			$series27['data'][] = $row->cancer;
			$series28['data'][] = $row->other_long_term_illness;
			$series29['data'][] = $row->hiv_aids;
			$series30['data'][] = $row->typhoid;
			$series31['data'][] = $row->other;
			$series32['data'][] = $row->no_of_individuals;
			$county['data'][] = $row->county_name;
			}
			 
			$result = array();
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$series8);
			array_push($result,$series9);
			array_push($result,$series10);
			array_push($result,$series11);
			array_push($result,$series12);
			array_push($result,$series13);		
			array_push($result,$series14);
			array_push($result,$series15);
			array_push($result,$series16);
			array_push($result,$series17);
			array_push($result,$series18);
			array_push($result,$series19);
			array_push($result,$series20);
			array_push($result,$series21);
			array_push($result,$series22);
			array_push($result,$series23);
			array_push($result,$series24);
			array_push($result,$series25);
			array_push($result,$series26);
			array_push($result,$series27);
			array_push($result,$series28);
			array_push($result,$series29);
			array_push($result,$series30);
			array_push($result,$series31);
			array_push($result,$series32);
			array_push($result,$county);

			print json_encode($result, JSON_NUMERIC_CHECK);
        
}


//function to get data from health_kihibs_reported_sickness_by_age_group

    public function health_kihibs_reported_sickness_by_age_group(){
    	$data = DB::table('health_kihibs_reported_sickness_by_age_group')->join('health_counties', 'health_kihibs_reported_sickness_by_age_group.county_id', '=', 'health_kihibs_reported_sickness_by_age_group.county_id')->get();

			$series1 = array();
			$series1['name'] = 'percentage distribution';
			
			$series2 = array();
			$series2['name'] = 'age group';

			$county = array();
			$county['name'] = 'county name';

			foreach ($data as $row)
			{
            $series1['data'][] = $row->percentage_distribution;
			$series2['data'][] = $row->age_group;
			$county['data'][] = $row->county_name;
			}
			 
			$result = array();
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$county);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
        
}

//function to get data from health_kihibs_reported_sickness_by_health_provider

    public function health_kihibs_reported_sickness_by_health_provider(){
    	$data = DB::table('health_kihibs_reported_sickness_by_health_provider')->join('health_counties', 'health_kihibs_reported_sickness_by_health_provider.county_id', '=', 'health_kihibs_reported_sickness_by_health_provider.county_id')->get();

			$series1 = array();
			$series1['name'] = 'percentage distribution';
			
			$series2 = array();
			$series2['name'] = 'health provider';

			$county = array();
			$county['name'] = 'county name';

			foreach ($data as $row)
			{
            $series1['data'][] = $row->percentage_distribution;
			$series2['data'][] = $row->health_provider;
			$county['data'][] = $row->county_name;
			}
			 
			$result = array();
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$county);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
        
}


//function to get data from health_kihibs_reported_sickness_by_no_of_days_missed

    public function health_kihibs_reported_sickness_by_no_of_days_missed(){
    	$data = DB::table('health_kihibs_reported_sickness_by_no_of_days_missed')->join('health_counties', 'health_kihibs_reported_sickness_by_no_of_days_missed.county_id', '=', 'health_kihibs_reported_sickness_by_no_of_days_missed.county_id')->get();

			$series1 = array();
			$series1['name'] = 'percentage';
			
			$series2 = array();
			$series2['name'] = 'no of days';

			$county = array();
			$county['name'] = 'county name';

			foreach ($data as $row)
			{
            $series1['data'][] = $row->percentage;
			$series2['data'][] = $row->no_of_days;
			$county['data'][] = $row->county_name;
			}
			 
			$result = array();
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$county);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
        
}

//function to get data from health_kihibs_type_of_fluid_of_food_given_during_diarrhoea

    public function health_kihibs_type_of_fluid_of_food_given_during_diarrhoea(){
    	$data = DB::table('health_kihibs_type_of_fluid_of_food_given_during_diarrhoea')->join('health_counties', 'health_kihibs_type_of_fluid_of_food_given_during_diarrhoea.county_id', '=', 'health_kihibs_type_of_fluid_of_food_given_during_diarrhoea.county_id')->get();

			$series1 = array();
			$series1['name'] = 'nothing';
			
			$series2 = array();
			$series2['name'] = 'breastmilk';

			$series3 = array();
			$series3['name'] = 'porridge';

			$series4 = array();
			$series4['name'] = 'water alone';

			$series5 = array();
			$series5['name'] = 'other milk';

			$series6 = array();
			$series6['name'] = 'other';

			$series7 = array();
			$series7['name'] = 'not stated';

			$series8 = array();
			$series8['name'] = 'no of individuals';

			$county = array();
			$county['name'] = 'county name';

			foreach ($data as $row)
			{
            $series1['data'][] = $row->nothing;
			$series2['data'][] = $row->breastmilk;
			$series3['data'][] = $row->porridge;
			$series4['data'][] = $row->water_alone;
			$series5['data'][] = $row->other_milk;
			$series6['data'][] = $row->other;
			$series7['data'][] = $row->not_stated;
			$series8['data'][] = $row->no_of_individuals;
			$county['data'][] = $row->county_name;
			}
			 
			$result = array();
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$series8);
			array_push($result,$county);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
        
}

//function to get data from health_kihibs_type_of_health_care_sought

    public function health_kihibs_type_of_health_care_sought(){
    	$data = DB::table('health_kihibs_type_of_health_care_sought')->join('health_counties', 'health_kihibs_type_of_health_care_sought.county_id', '=', 'health_kihibs_type_of_health_care_sought.county_id')->get();

			$series1 = array();
			$series1['name'] = 'curative';
			
			$series2 = array();
			$series2['name'] = 'promotive preventive';

			$series3 = array();
			$series3['name'] = 'no of individuals';

			$county = array();
			$county['name'] = 'county name';

		
			foreach ($data as $row)
			{
            $series1['data'][] = $row->curative;
			$series2['data'][] = $row->promotive_preventive;
			$series3['data'][] = $row->no_of_individuals;
			$county['data'][] = $row->county_name;
			}
			 
			$result = array();
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$county);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
        
}

//function to get data from health_kihibs_who_diagnosed_illness_injury

    public function health_kihibs_who_diagnosed_illness_injury(){
    	$data = DB::table('health_kihibs_who_diagnosed_illness_injury')->join('health_counties', 'health_kihibs_who_diagnosed_illness_injury.county_id', '=', 'health_kihibs_who_diagnosed_illness_injury.county_id')->get();

			$series1 = array();
			$series1['name'] = 'health worker';
			
			$series2 = array();
			$series2['name'] = 'traditional healer';

			$series3 = array();
			$series3['name'] = 'non household member';

			$series4 = array();
			$series4['name'] = 'self';

			$series5 = array();
			$series5['name'] = 'herbalist';

			$series6 = array();
			$series6['name'] = 'faith healer';

			$series7 = array();
			$series7['name'] = 'household member';

			$series8 = array();
			$series8['name'] = 'other';

			$series9 = array();
			$series9['name'] = 'not stated';

			$series10 = array();
			$series10['name'] = 'no of individuals';

			$county = array();
			$county['name'] = 'county name';

			foreach ($data as $row)
			{
            $series1['data'][] = $row->health_worker;
			$series2['data'][] = $row->traditional_healer;
			$series3['data'][] = $row->non_household_member;
			$series4['data'][] = $row->self;
			$series5['data'][] = $row->herbalist;
			$series6['data'][] = $row->faith_healer;
			$series7['data'][] = $row->household_member;
			$series8['data'][] = $row->other;
			$series9['data'][] = $row->not_stated;
			$series10['data'][] = $row->no_of_individuals;
			$county['data'][] = $row->county_name;
			}
			 
			$result = array();
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$series8);
			array_push($result,$series9);
			array_push($result,$series10);
			array_push($result,$county);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
        
}

//function to get data from health_maternal_care

    public function health_maternal_care(){
    	$data = DB::table('health_maternal_care')->join('health_counties', 'health_maternal_care.county_id', '=', 'health_maternal_care.county_id')->get();

			$county = array();
			$county['name'] = 'county name';
			
			$series1 = array();
			$series1['name'] = 'percent receiving antenatal care from a skilled provider';

			$series2 = array();
			$series2['name'] = 'percent delivered in a health facility';

			$series3 = array();
			$series3['name'] = 'percent delivered by a skilled provider';

		
			foreach ($data as $row)
			{
            $county['data'][] = $row->county_name;
			$series1['data'][] = $row->percent_receiving_antenatal_care_from_a_skilled_provider;
			$series2['data'][] = $row->percent_delivered_in_a_health_facility;
			$series3['data'][] = $row->percent_delivered_by_a_skilled_provider;
			}
			 
			$result = array();
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
        
}

 //function to get data from health_months

    public function health_months(){
    	$data = DB::table('health_months')->get();
				
            $series1 = array();
			$series1['name'] = 'month';
			
			foreach ($data as $row)
			{
			$series1['data'][] = $row->month;
			}
			 
			$result = array();
			array_push($result,$series1);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }

  //function to get data from health_nhif_members

    public function health_nhif_members(){
    	$data = DB::table('health_nhif_members')->get();
				 
            $year = array();
			$year['name'] = 'year';
            $series1 = array();
			$series1['name'] = 'formal sector';
			$series2 = array();
			$series2['name'] = 'informal sector';
			$series3 = array();
			$series3['name'] = 'total';
			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->formal_sector;
			$series2['data'][] = $row->informal_sector;
			$series3['data'][] = $row->total;
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }

  //function to get data from health_nhif_resources

    public function health_nhif_resources(){
    	$data = DB::table('health_nhif_resources')->get();
				 
            $year = array();
			$year['name'] = 'year';
            $series1 = array();
			$series1['name'] = 'benefits';
			$series2 = array();
			$series2['name'] = 'contributions net benefits';
			$series3 = array();
			$series3['name'] = 'receipts';
			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->benefits;
			$series2['data'][] = $row->contributions_net_benefits;
			$series3['data'][] = $row->receipts;
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }

    //function to get data from health_nutritional_status_of_children

    public function health_nutritional_status_of_children(){
    	$data = DB::table('health_nutritional_status_of_children')->join('health_counties', 'health_nutritional_status_of_children.county_id', '=', 'health_nutritional_status_of_children.county_id')->get();

			$county = array();
			$county['name'] = 'county name';
			
			$series1 = array();
			$series1['name'] = 'stunted';

			$series2 = array();
			$series2['name'] = 'wasted';

			$series3 = array();
			$series3['name'] = 'under_weight';

		
			foreach ($data as $row)
			{
            $county['data'][] = $row->county_name;
			$series1['data'][] = $row->stunted;
			$series2['data'][] = $row->wasted;
			$series3['data'][] = $row->under_weight;
			}
			 
			$result = array();
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
        
}

    //function to get data from health_nutritional_status_of_women

    public function health_nutritional_status_of_women(){
    	$data = DB::table('health_nutritional_status_of_women')->join('health_counties', 'health_nutritional_status_of_women.county_id', '=', 'health_nutritional_status_of_women.county_id')->get();

			$county = array();
			$county['name'] = 'county name';
			
			$series1 = array();
			$series1['name'] = 'undernutrition';

			$series2 = array();
			$series2['name'] = 'normal';

			$series3 = array();
			$series3['name'] = 'overweight';

			$series4 = array();
			$series4['name'] = 'obese';

		
			foreach ($data as $row)
			{
            $county['data'][] = $row->county_name;
			$series1['data'][] = $row->undernutrition;
			$series2['data'][] = $row->normal;
			$series3['data'][] = $row->overweight;
			$series4['data'][] = $row->obese;
			}
			 
			$result = array();
			array_push($result,$county);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
        
}

  //function to get data from health_percentage_adults_who_are_current_users

    public function health_percentage_adults_who_are_current_users(){
    	$data = DB::table('health_percentage_adults_who_are_current_users')->get();
				 
            $series1 = array();
			$series1['name'] = 'age group';
			$series2 = array();
			$series2['name'] = 'women';
			$series3 = array();
			$series3['name'] = 'men';
			$series4 = array();
			$series4['name'] = 'category';
			 
			foreach ($data as $row)
			{
			$series1['data'][] = $row->age_group;
			$series2['data'][] = $row->women;
			$series3['data'][] = $row->men;
			$series4['data'][] = $row->category;
			}
			 
			$result = array();
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }


  //function to get data from health_percentage_incidence_of_diseases_in_kenya

    public function health_percentage_incidence_of_diseases_in_kenya(){
    	$data = DB::table('health_percentage_incidence_of_diseases_in_kenya')->get();
				 

            $year = array();
			$year['name'] = 'year';
            $series1 = array();
			$series1['name'] = 'percentage incidence';
			$series2 = array();
			$series2['name'] = 'disease';
			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->percentage_incidence;
			$series2['data'][] = $row->disease;
			}				 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }

  //function to get data from health_percentage_who_drink_alcohol_by_age

    public function health_percentage_who_drink_alcohol_by_age(){
    	$data = DB::table('health_percentage_who_drink_alcohol_by_age')->get();
				 
            $series1 = array();
			$series1['name'] = 'age';
			$series2 = array();
			$series2['name'] = 'women';
			$series3 = array();
			$series3['name'] = 'men';
			 
			foreach ($data as $row)
			{
			$series1['data'][] = $row->age;
			$series2['data'][] = $row->women;
			$series3['data'][] = $row->men;
			}				 
			$result = array();
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }

//function to get data from health_place_of_delivery

    public function health_place_of_delivery(){
    	$data = DB::table('health_place_of_delivery')->get();
				 
            $year = array();
			$year['name'] = 'year';
            $series1 = array();
			$series1['name'] = 'number';
			$series2 = array();
			$series2['name'] = 'place';
			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->number;
			$series2['data'][] = $row->place;
			}				 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }

//function to get data from health_prevalence_of_overweight_and_obesity

    public function health_prevalence_of_overweight_and_obesity(){
    	$data = DB::table('health_prevalence_of_overweight_and_obesity')->get();
				 
            $series1 = array();
			$series1['name'] = 'age group';
			$series2 = array();
			$series2['name'] = 'women';
			$series3 = array();
			$series3['name'] = 'men';
			$series4 = array();
			$series4['name'] = 'total';
			$series5 = array();
			$series5['name'] = 'category';
			 
			foreach ($data as $row)
			{
			$series1['data'][] = $row->age_group;
			$series2['data'][] = $row->women;
			$series3['data'][] = $row->men;
			$series4['data'][] = $row->total;
			$series5['data'][] = $row->category;
			}				 
			$result = array();
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
 //function to get data from health_registeredmedicalpersonnel

    public function health_registeredmedicalpersonnel(){
    	$data = DB::table('health_registeredmedicalpersonnel')
    	            ->join('health_counties', 'health_registeredmedicalpersonnel.county_id', '=', 'health_counties.county_id')
    	            ->join('health_registeredmedicalpersonnel_ids', 'health_registeredmedicalpersonnel.medical_personnel_id', '=', 'health_registeredmedicalpersonnel_ids.medical_personnel_id')->get();
            
            $year = array();
			$year['name'] = 'Year';

			 
            $series1 = array();
			$series1['name'] = 'County name';


			$series2 = array();
			$series2['name'] = 'Medical personnel';
			
			$series3 = array();
			$series3['name'] = 'Number of  personnel';

			$series4 = array();
			$series4['name'] = 'gender';

		
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
            $series1['data'][] = $row->county_name;
			$series2['data'][] = $row->medical_personnel;
			$series3['data'][] = $row->no_of_personnel;
			$series4['data'][] = $row->gender;
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
        
}

//function to get data from health_registeredmedicalpersonnel_ids

    public function health_registeredmedicalpersonnel_ids(){
    	$data = DB::table('health_registeredmedicalpersonnel_ids')->get();
				 
            $series1 = array();
			$series1['name'] = 'medical personnel';
			 
			foreach ($data as $row)
			{
			$series1['data'][] = $row->medical_personnel;
			}				 
			$result = array();
			array_push($result,$series1);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }

     //function to get data from health_registered_active_nhif_members_by_county

    public function health_registered_active_nhif_members_by_county(){
    	$data = DB::table('health_registered_active_nhif_members_by_county')->join('health_counties', 'health_registered_active_nhif_members_by_county.county_id', '=', 'health_registered_active_nhif_members_by_county.county_id')->get();

            $year = array();
			$year['name'] = 'Year';

			$series1 = array();
			$series1['name'] = 'county name';
			
			$series2 = array();
			$series2['name'] = 'formal';

			$series3 = array();
			$series3['name'] = 'informal';

		
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
            $series1['data'][] = $row->county_name;
			$series2['data'][] = $row->formal;
			$series3['data'][] = $row->informal;
	     	}
			 
			$result = array();
			array_push($result,$year);
            array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
        
}


     //function to get data from health_registered_active_nhif_members_nationally

    public function health_registered_active_nhif_members_nationally(){
    	$data = DB::table('health_registered_active_nhif_members_nationally')->get();
           
            $year = array();
			$year['name'] = 'Year';

			$series1 = array();
			$series1['name'] = 'informal';
			
			$series2 = array();
			$series2['name'] = 'formal';

		
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
            $series1['data'][] = $row->informal;
			$series2['data'][] = $row->formal;
	     	}
			 
			$result = array();
			array_push($result,$year);
            array_push($result,$series1);
			array_push($result,$series2);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
        
}

 //function to get data from health_registered_medical_laboratories_by_counties

    public function health_registered_medical_laboratories_by_counties(){
    	$data = DB::table('health_registered_medical_laboratories_by_counties')->join('health_counties', 'health_registered_medical_laboratories_by_counties.county_id', '=', 'health_registered_medical_laboratories_by_counties.county_id')->get();

      
			$county = array();
			$county['name'] = 'county name';
			
			$series1 = array();
			$series1['name'] = 'class a';

			$series2 = array();
			$series2['name'] = 'class b';

			$series3 = array();
			$series3['name'] = 'class c';

			$series4 = array();
			$series4['name'] = 'class d';

			$series5 = array();
			$series5['name'] = 'class e';

			$series6 = array();
			$series6['name'] = 'class f';

			$series7 = array();
			$series7['name'] = 'unknown';

		
			foreach ($data as $row)
			{
            $county['data'][] = $row->county_name;
			$series1['data'][] = $row->class_a;
			$series2['data'][] = $row->class_b;
			$series3['data'][] = $row->class_c;
			$series4['data'][] = $row->class_d;
			$series5['data'][] = $row->class_e;
			$series6['data'][] = $row->class_f;
			$series7['data'][] = $row->unknown;
	     	}
			 
			$result = array();
            array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
        
}
 //function to get data from health_sectors

    public function health_sectors(){
    	$data = DB::table('health_sectors')->get();
           
          
			$series1 = array();
			$series1['name'] = 'sector name';
			
			$series2 = array();
			$series2['name'] = 'report';

			$series3 = array();
			$series3['name'] = 'coverage';

			$series4 = array();
			$series4['name'] = 'source';

			$series5 = array();
			$series5['name'] = 'table name';

			$series6 = array();
			$series6['name'] = 'api url';

			$series7 = array();
			$series7['name'] = 'embed script';

		
			foreach ($data as $row)
			{
            $series1['data'][] = $row->sector_name;
			$series2['data'][] = $row->report;
			$series3['data'][] = $row->coverage;
			$series4['data'][] = $row->source;
			$series5['data'][] = $row->table_name;
			$series6['data'][] = $row->api_url;
			$series7['data'][] = $row->embed_script;
	     	}
			 
			$result = array();
            array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
        
}

//function to get data from health_subcounty

    public function health_subcounty(){
	$data = DB::table('health_subcounty')->join('health_counties', 'health_subcounty.county_id', '=', 'health_subcounty.county_id')->get();

			$county = array();
			$county['name'] = 'county name';
			
			$series1 = array();
			$series1['name'] = 'subcounty name';
		
			foreach ($data as $row)
			{
            $county['data'][] = $row->county_name;
			$series1['data'][] = $row->subcounty_name;
			}
			 
			$result = array();
			array_push($result,$county);
			array_push($result,$series1);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
        
}

//function to get data from health_use_of_mosquito_nets_by_children

    public function health_use_of_mosquito_nets_by_children(){
$data = DB::table('health_use_of_mosquito_nets_by_children')->join('health_counties', 'health_use_of_mosquito_nets_by_children.county_id', '=', 'health_use_of_mosquito_nets_by_children.county_id')->get();

           
          
			$county = array();
			$county['name'] = 'county name';
			
			$series1 = array();
			$series1['name'] = 'children under five years who slept under nets last night';
		
			foreach ($data as $row)
			{
            $county['data'][] = $row->county_name;
			$series1['data'][] = $row->children_under_five_years_who_slept_under_nets_last_night;
	     	}
			 
			$result = array();
            array_push($result,$county);
			array_push($result,$series1);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
        
}
}