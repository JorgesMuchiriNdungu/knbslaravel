<?php

namespace App\Http\Controllers\Endpoints;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Housing extends Controller
{
     //function to get data from housing_conditions_kihibs_waste_disposal_method

    public function housing_conditions_kihibs_waste_disposal_method(){
    	$data = DB::table('housing_conditions_kihibs_waste_disposal_method')->join('health_counties', 'housing_conditions_kihibs_waste_disposal_method.county_id', '=', 'housing_conditions_kihibs_waste_disposal_method.county_id')->get();

			$county = array();
			$county['name'] = 'county name';
			
			$series1 = array();
			$series1['name'] = 'county government';

			$series2 = array();
			$series2['name'] = 'community';

			$series3 = array();
			$series3['name'] = 'private co';

			$series4 = array();
			$series4['name'] = 'dumped compound';

			$series5 = array();
			$series5['name'] = 'dumped street';

			$series6 = array();
			$series6['name'] = 'dumped latrine';

			$series7 = array();
			$series7['name'] = 'burnt';

			$series8 = array();
			$series8['name'] = 'buried';

			$series9 = array();
			$series9['name'] = 'other';

			$series10 = array();
			$series10['name'] = 'not stated';

			$series11 = array();
			$series11['name'] = 'households';

			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->county_gov;
			$series2['data'][] = $row->community;
			$series3['data'][] = $row->private_co;
			$series4['data'][] = $row->dumped_compound;	
			$series5['data'][] = $row->dumped_street;	
			$series6['data'][] = $row->dumped_latrine;	
			$series7['data'][] = $row->burnt;	
			$series8['data'][] = $row->buried;	
			$series9['data'][] = $row->other;
			$series10['data'][] = $row->not_stated;
			$series11['data'][] = $row->households;								
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
			array_push($result,$series8);
			array_push($result,$series9);
			array_push($result,$series10);
			array_push($result,$series11);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
    
     //function to get data from housing_conditions_kihibs_volume_of_water_used

    public function housing_conditions_kihibs_volume_of_water_used(){
    	$data = DB::table('housing_conditions_kihibs_volume_of_water_used')->join('health_counties', 'housing_conditions_kihibs_volume_of_water_used.county_id', '=', 'housing_conditions_kihibs_volume_of_water_used.county_id')->get();

			$county = array();
			$county['name'] = 'county name';

			$series1 = array();
			$series1['name'] = 'lit 0 1000';

			$series2 = array();
			$series2['name'] = 'lit 1001 2000';

			$series3 = array();
			$series3['name'] = 'lit 2001 3000';

			$series4 = array();
			$series4['name'] = 'over 3000 lit';

			$series5 = array();
			$series5['name'] = 'not stated';

			$series6 = array();
			$series6['name'] = 'households';

			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->lit_0_1000;
			$series2['data'][] = $row->lit_1001_2000;
			$series3['data'][] = $row->lit_2001_3000;
			$series4['data'][] = $row->over_3000_lit;	
			$series5['data'][] = $row->not_stated;	
			$series6['data'][] = $row->households;							
		}
			 
			$result = array();
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
    
      //function to get data from housing_conditions_kihibs_time_taken_to_fetch_drinking_water

    public function housing_conditions_kihibs_time_taken_to_fetch_drinking_water(){
    	$data = DB::table('housing_conditions_kihibs_time_taken_to_fetch_drinking_water')->join('health_counties', 'housing_conditions_kihibs_time_taken_to_fetch_drinking_water.county_id', '=', 'housing_conditions_kihibs_time_taken_to_fetch_drinking_water.county_id')->get();

			$county = array();
			$county['name'] = 'county name';

			$series1 = array();
			$series1['name'] = 'zero';

			$series2 = array();
			$series2['name'] = 'less thirty min';

			$series3 = array();
			$series3['name'] = 'over thirty min';

			$series4 = array();
			$series4['name'] = 'not stated';

			$series5 = array();
			$series5['name'] = 'households';

			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->zero;
			$series2['data'][] = $row->less_thirty_min;
			$series3['data'][] = $row->over_thirty_min;
			$series4['data'][] = $row->not_stated;	
			$series5['data'][] = $row->households;								
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

     //function to get data from housing_conditions_kihibs_sharing_of_toilet_facility

    public function housing_conditions_kihibs_sharing_of_toilet_facility(){
    	$data = DB::table('housing_conditions_kihibs_sharing_of_toilet_facility')->join('health_counties', 'housing_conditions_kihibs_sharing_of_toilet_facility.county_id', '=', 'housing_conditions_kihibs_sharing_of_toilet_facility.county_id')->get();

			$county = array();
			$county['name'] = 'county name';

			$series1 = array();
			$series1['name'] = 'shared toilet';

			$series2 = array();
			$series2['name'] = 'not shared';

			$series3 = array();
			$series3['name'] = 'not stated';

			$series4 = array();
			$series4['name'] = 'households';

			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->shared_toilet;
			$series2['data'][] = $row->not_shared;
			$series3['data'][] = $row->not_stated;
			$series4['data'][] = $row->households;								
		}
			 
			$result = array();
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
 //function to get data from housing_conditions_kihibs_primary_type_of_cooking_appliance

    public function housing_conditions_kihibs_primary_type_of_cooking_appliance(){
    	$data = DB::table('housing_conditions_kihibs_primary_type_of_cooking_appliance')->join('health_counties', 'housing_conditions_kihibs_primary_type_of_cooking_appliance.county_id', '=', 'housing_conditions_kihibs_primary_type_of_cooking_appliance.county_id')->get();

			$county = array();
			$county['name'] = 'county name';

			$series1 = array();
			$series1['name'] = 'stone fire';

			$series2 = array();
			$series2['name'] = 'imp stone fire';

			$series3 = array();
			$series3['name'] = 'ordinary jiko';

			$series4 = array();
			$series4['name'] = 'improved jiko';

			$series5 = array();
			$series5['name'] = 'stove';

			$series6 = array();
			$series6['name'] = 'gas cooker';

			$series7 = array();
			$series7['name'] = 'electric cooker';

			$series8 = array();
			$series8['name'] = 'elec gas cooker';

			$series9 = array();
			$series9['name'] = 'other';

			$series10 = array();
			$series10['name'] = 'not stated';

			$series11 = array();
			$series11['name'] = 'households';

			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->stone_fire;
			$series2['data'][] = $row->imp_stone_fire;
			$series3['data'][] = $row->ordinary_jiko;
			$series4['data'][] = $row->improved_jiko;	
			$series5['data'][] = $row->stove;	
			$series6['data'][] = $row->gas_cooker;	
			$series7['data'][] = $row->electric_cooker;	
			$series8['data'][] = $row->elec_gas_cooker;	
			$series9['data'][] = $row->other;	
			$series10['data'][] = $row->not_stated;	
			$series11['data'][] = $row->households;								
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
            array_push($result,$series8);
   			array_push($result,$series9);
			array_push($result,$series10);
	    	array_push($result,$series11);


					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }

    //function to get data from housing_conditions_kihibs_place_for_washing_hands_near_toilet

    public function housing_conditions_kihibs_place_for_washing_hands_near_toilet(){
    	$data = DB::table('housing_conditions_kihibs_place_for_washing_hands_near_toilet')->join('health_counties', 'housing_conditions_kihibs_place_for_washing_hands_near_toilet.county_id', '=', 'housing_conditions_kihibs_place_for_washing_hands_near_toilet.county_id')->get();

			$county = array();
			$county['name'] = 'county name';

			$series1 = array();
			$series1['name'] = 'place';

			$series2 = array();
			$series2['name'] = 'no place';

			$series3 = array();
			$series3['name'] = 'not stated';

			$series4 = array();
			$series4['name'] = 'households';

			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->place;
			$series2['data'][] = $row->no_place;
			$series3['data'][] = $row->not_stated;
			$series4['data'][] = $row->households;								
		}
			$result = array();
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);

			print json_encode($result, JSON_NUMERIC_CHECK);
    }

 //function to get data from housing_conditions_kihibs_owner_occupier_dwellings

    public function housing_conditions_kihibs_owner_occupier_dwellings(){
    	$data = DB::table('housing_conditions_kihibs_owner_occupier_dwellings')->join('health_counties', 'housing_conditions_kihibs_owner_occupier_dwellings.county_id', '=', 'housing_conditions_kihibs_owner_occupier_dwellings.county_id')->get();

			$county = array();
			$county['name'] = 'county name';

			$series1 = array();
			$series1['name'] = 'purchased cash';

			$series2 = array();
			$series2['name'] = 'purchased loan';

			$series3 = array();
			$series3['name'] = 'purchased cash loan';

			$series4 = array();
			$series4['name'] = 'constructed cash';

			$series5 = array();
			$series5['name'] = 'constructed loan';

			$series6 = array();
			$series6['name'] = 'constructed cash loan';

			$series7 = array();
			$series7['name'] = 'inherited';

			$series8 = array();
			$series8['name'] = 'gift';

			$series9 = array();
			$series9['name'] = 'bartered';

			$series10 = array();
			$series10['name'] = 'other';

			$series11 = array();
			$series11['name'] = 'households';

			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->purchased_cash;
			$series2['data'][] = $row->purchased_loan;
			$series3['data'][] = $row->purchased_cash_loan;
			$series4['data'][] = $row->constructed_cash;	
			$series5['data'][] = $row->constructed_loan;	
			$series6['data'][] = $row->constructed_cash_loan;	
			$series7['data'][] = $row->inherited;	
			$series8['data'][] = $row->gift;	
			$series9['data'][] = $row->bartered;	
			$series10['data'][] = $row->other;	
			$series11['data'][] = $row->households;								
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
            array_push($result,$series8);
   			array_push($result,$series9);
			array_push($result,$series10);
	    	array_push($result,$series11);


					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
//function to get data from housing_conditions_kihibs_methods_used_to_make_water_safer

    public function housing_conditions_kihibs_methods_used_to_make_water_safer(){
    	$data = DB::table('housing_conditions_kihibs_methods_used_to_make_water_safer')->join('health_counties', 'housing_conditions_kihibs_methods_used_to_make_water_safer.county_id', '=', 'housing_conditions_kihibs_methods_used_to_make_water_safer.county_id')->get();

			$county = array();
			$county['name'] = 'county name';

			$series1 = array();
			$series1['name'] = 'boil';

			$series2 = array();
			$series2['name'] = 'add bleach';

			$series3 = array();
			$series3['name'] = 'water filter';

			$series4 = array();
			$series4['name'] = 'solar';

			$series5 = array();
			$series5['name'] = 'sieve cloth';

			$series6 = array();
			$series6['name'] = 'stand settle';

			$series7 = array();
			$series7['name'] = 'other';

			$series8 = array();
			$series8['name'] = 'households';

			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->boil;
			$series2['data'][] = $row->add_bleach;
			$series3['data'][] = $row->water_filter;
			$series4['data'][] = $row->solar;
			$series5['data'][] = $row->sieve_cloth;	
			$series6['data'][] = $row->stand_settle;	
			$series7['data'][] = $row->other;		
			$series8['data'][] = $row->households;								
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
            array_push($result,$series8);

			print json_encode($result, JSON_NUMERIC_CHECK);
    }

}
