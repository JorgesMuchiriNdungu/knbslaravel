<?php

namespace App\Http\Controllers\Endpoints;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Ict extends Controller
{
    



   
 // get ict_kihibs_households_owned_ict_equipment_services

      public function get_ict_kihibs_households_owned_ict_equipment_services(){
    

    	$data = DB::table('ict_kihibs_households_owned_ict_equipment_services')
                    ->join('health_counties', 'ict_kihibs_households_owned_ict_equipment_services.county_id', '=', 'health_counties.county_id')->get();
                  

    	    $county= array();
			$county['name'] = 'county name';
		
	     	$series1 = array();
			$series1['name'] = 'computer';
			
			$series2 = array();
			$series2['name'] = 'television';

			$series3 = array();
			$series3['name'] = 'households';

			

		
			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->computer;
			$series2['data'][] = $row->television;
			$series3['data'][] = $row->households;
	
								
			}
			 
			$result = array();
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
		
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }







 
 // get ict_kihibs_households_without_internet_by_reason

      public function get_ict_kihibs_households_without_internet_by_reason(){
    

    	$data = DB::table('ict_kihibs_households_without_internet_by_reason')
                    ->join('health_counties', 'ict_kihibs_households_without_internet_by_reason.county_id', '=', 'health_counties.county_id')->get();
                  

    	    $county= array();
			$county['name'] = 'county name';
		
	     	$series1 = array();
			$series1['name'] = 'dont need';
			
			$series2 = array();
			$series2['name'] = 'lack skills';

			$series3 = array();
			$series3['name'] = 'no network';

			$series4 = array();
			$series4['name'] = 'access else where';

			$series5= array();
			$series5['name'] = 'doesnt meet needs';

			$series6= array();
			$series6['name'] = 'service cost high';

			$series7 = array();
			$series7['name'] = 'equipment cost high';

			$series8 = array();
			$series8['name'] = 'cultural reasons';

			$series9= array();
			$series9['name'] = 'other reasons';

			$series10 = array();
			$series10['name'] = 'households';

			
			

		
			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->dont_need;
			$series2['data'][] = $row->lack_skills;	
			$series3['data'][] = $row->no_network;
			$series4['data'][] = $row->access_elsewhere;
			$series5['data'][] = $row->doesnt_meet_needs;
			$series6['data'][] = $row->service_cost_high;
			$series7['data'][] = $row->equipment_cost_high;
	        $series8['data'][] = $row->cultural_reasons;
			$series9['data'][] = $row->other_reasons;
			$series10['data'][] = $row->households;
	
	
								
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
			
			
		
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }





 // get ict_kihibs_households_with_internet_by_type

      public function get_ict_kihibs_households_with_internet_by_type(){
    

    	$data = DB::table('ict_kihibs_households_with_internet_by_type')
                    ->join('health_counties', 'ict_kihibs_households_with_internet_by_type.county_id', '=', 'health_counties.county_id')->get();
                  

    	    $county= array();
			$county['name'] = 'county name';
		
	     	$series1 = array();
			$series1['name'] = 'fixed wired';
			
			$series2 = array();
			$series2['name'] = 'fixed wireless';

			$series3 = array();
			$series3['name'] = 'mobile broadband';

			$series4 = array();
			$series4['name'] = 'mobile';

			$series5= array();
			$series5['name'] = 'other';

			$series6= array();
			$series6['name'] = 'households';
		

		
			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->fixed_wired;
			$series2['data'][] = $row->fixed_wireless;	
			$series3['data'][] = $row->mobile_broadband;
			$series4['data'][] = $row->mobile;
			$series5['data'][] = $row->other;
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





// get  ict_kihibs_households_with_tv

      public function get_ict_kihibs_households_with_tv(){
    

    	$data = DB::table('ict_kihibs_households_with_tv')
                    ->join('health_counties', 'ict_kihibs_households_with_tv.county_id', '=', 'health_counties.county_id')->get();
                  

    	    $county= array();
			$county['name'] = 'county name';

			$series1 = array();
			$series1['name'] = 'digital tv';
		
	     	$series2 = array();
			$series2['name'] = 'pay tv';
			
			$series3 = array();
			$series3['name'] = 'free to air';

			$series4 = array();
			$series4['name'] = 'ip tv';

			$series5= array();
			$series5['name'] = 'none';

			$series6= array();
			$series6['name'] = 'households';

		
		

		
			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->digital_tv;
			$series2['data'][] = $row->pay_tv;
			$series3['data'][] = $row->free_to_air;	
			$series4['data'][] = $row->ip_tv;
			$series5['data'][] = $row->none;
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





// get ict_kihibs_population_above18by_reasonnothaving_phone

      public function get_ict_kihibs_population_above18by_reasonnothaving_phone(){
    

    	$data = DB::table('ict_kihibs_population_above18by_reasonnothaving_phone')
                    ->join('health_counties', 'ict_kihibs_population_above18by_reasonnothaving_phone.county_id', '=', 'health_counties.county_id')->get();
                  

    	    $county= array();
			$county['name'] = 'county name';

			$series1 = array();
			$series1['name'] = 'population';
		
	     	$series2 = array();
			$series2['name'] = 'too young';
		
			$series3 = array();
			$series3['name'] = 'dont need';

			$series4 = array();
			$series4['name'] = 'restricted';

			$series5= array();
			$series5['name'] = 'no network';

			$series6= array();
			$series6['name'] = 'gender bias';
			$series7= array();
			$series7['name'] = 'no electricity';
			$series8= array();
			$series8['name'] = 'phone expe';
			$series9= array();
			$series9['name'] = 'maintain expe';
			$series10= array();
			$series10['name'] = 'other';

		
		

		
			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->population;
			$series2['data'][] = $row->too_young;
			$series3['data'][] = $row->dont_need;	
			$series4['data'][] = $row->restricted;
			$series5['data'][] = $row->no_network;
			$series6['data'][] = $row->gender_bias;
			$series7['data'][] = $row->no_electricity;
			$series8['data'][] = $row->phone_expe;	
			$series9['data'][] = $row->maintain_expe;
			$series10['data'][] = $row->other;
		
			
			
	
	
								
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
			array_push($result,$series8);
			array_push($result,$series10);
			
			
		
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }






// get ict_kihibs_population_above18subscribed_mobilemoney

      public function get_ict_kihibs_population_above18subscribed_mobilemoney(){
    

    	$data = DB::table('ict_kihibs_population_above18subscribed_mobilemoney')
                    ->join('health_counties', 'ict_kihibs_population_above18subscribed_mobilemoney.county_id', '=', 'health_counties.county_id')->get();
                  

    	    $county= array();
			$county['name'] = 'county name';

			$series1 = array();
			$series1['name'] = 'mobile money';
		
	     	$series2 = array();
			$series2['name'] = 'mobile banking';

				$series3 = array();
			$series3['name'] = 'population';
		
			
		

		
			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->mobile_money;
			$series2['data'][] = $row->mobile_banking;
			$series3['data'][] = $row->population;	
			
			
			
	
	
								
			}
			 
			$result = array();
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
			
			
		
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }








// get ict_kihibs_population_by_ictequipment_and_servicesused

      public function get_ict_kihibs_population_by_ictequipment_and_servicesused(){
    

    	$data = DB::table('ict_kihibs_population_by_ictequipment_and_servicesused')
                    ->join('health_counties', 'ict_kihibs_population_by_ictequipment_and_servicesused.county_id', '=', 'health_counties.county_id')->get();
                  

    	    $county= array();
			$county['name'] = 'county name';

			$series1 = array();
			$series1['name'] = 'television';

			$series2 = array();
			$series2['name'] = 'radio';
		
	     	$series3 = array();
			$series3['name'] = 'mobile';

			$series4= array();
			$series4['name'] = 'computer';
		
	     	$series5 = array();
			$series5['name'] = 'internet';

			 $series6 = array();
			$series6['name'] = 'population';
		
			
		

		
			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->television;
			$series2['data'][] = $row->radio;
			$series3['data'][] = $row->mobile;	
			$series4['data'][] = $row->computer;
			$series5['data'][] = $row->internet;
			$series6['data'][] = $row->population;	
			
			
			
			
	
	
								
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





 // get ict_kihibs_population_that_didntuseinternet_by_reason

      public function get_ict_kihibs_population_that_didntuseinternet_by_reason(){
    

    	$data = DB::table('ict_kihibs_population_that_didntuseinternet_by_reason')
                    ->join('health_counties', 'ict_kihibs_population_that_didntuseinternet_by_reason.county_id', '=', 'health_counties.county_id')->get();
                  

    	    $county= array();
			$county['name'] = 'county name';
		
	     	$series1 = array();
			$series1['name'] = 'too young';
			
			$series2 = array();
			$series2['name'] = 'dont need';

			$series3 = array();
			$series3['name'] = 'lack skill';

			$series4 = array();
			$series4['name'] = 'expensive';

			$series5= array();
			$series5['name'] = 'no internet';

			$series6= array();
			$series6['name'] = 'culture';

			$series7 = array();
			$series7['name'] = 'control';

			$series8 = array();
			$series8['name'] = 'security';

			$series9= array();
			$series9['name'] = 'others';

			$series10 = array();
			$series10['name'] = 'not stated';

			$series11 = array();
			$series11['name'] = 'population';

			
			

		
			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->too_young;
			$series2['data'][] = $row->dont_need;	
			$series3['data'][] = $row->lack_skill;
			$series4['data'][] = $row->expensive;
			$series5['data'][] = $row->no_internet;
			$series6['data'][] = $row->culture;
			$series7['data'][] = $row->control;
	        $series8['data'][] = $row->security;
			$series9['data'][] = $row->others;
			$series10['data'][] = $row->not_stated;
			$series11['data'][] = $row->population;
	
	
								
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









 // get ict_kihibs_population_that_used_internet_by_purpose

      public function get_ict_kihibs_population_that_used_internet_by_purpose(){
    

    	$data = DB::table('ict_kihibs_population_that_used_internet_by_purpose')
                    ->join('health_counties', 'ict_kihibs_population_that_used_internet_by_purpose.county_id', '=', 'health_counties.county_id')->get();
                  

    	    $county= array();
			$county['name'] = 'county name';
		
	     	$series1 = array();
			$series1['name'] = 'seek info';
			
			$series2 = array();
			$series2['name'] = 'make app';

			$series3 = array();
			$series3['name'] = 'get info';

			$series4 = array();
			$series4['name'] = 'newspaper';

			$series5= array();
			$series5['name'] = 'banking';

			$series6= array();
			$series6['name'] = 'voip';

			$series7 = array();
			$series7['name'] = 'selling';

			$series8 = array();
			$series8['name'] = 'ordering';

			$series9= array();
			$series9['name'] = 'course';

			$series10 = array();
			$series10['name'] = 'research';

			$series11 = array();
			$series11['name'] = 'informative';

			$series12 = array();
			$series12['name'] = 'write article';

			$series13 = array();
			$series13['name'] = 'social nets';


			$series14 = array();
			$series14['name'] = 'movie';

			$series15 = array();
			$series15['name'] = 'search work';

			$series16 = array();
			$series16['name'] = 'other';

			$series17 = array();
			$series17['name'] = 'population';

			
			

		
			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->seek_info;
			$series2['data'][] = $row->make_app;	
			$series3['data'][] = $row->get_info;
			$series4['data'][] = $row->newspaper;
			$series5['data'][] = $row->banking;
			$series6['data'][] = $row->voip;
			$series7['data'][] = $row->selling;
	        $series8['data'][] = $row->ordering;
			$series9['data'][] = $row->course;
			$series10['data'][] = $row->research;
			$series11['data'][] = $row->informative;
			$series12['data'][] = $row->write_article;
			$series13['data'][] = $row->social_nets;
	        $series14['data'][] = $row->movie;
			$series15['data'][] = $row->search_work;
			$series16['data'][] = $row->other;
			$series17['data'][] = $row->population;
	
	
								
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
			array_push($result,$series12);
			array_push($result,$series13);
			array_push($result,$series14);
			array_push($result,$series15);
			array_push($result,$series16);
			array_push($result,$series17);
			
			
		
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }









 // get  ict_kihibs_population_who_used_internet_by_place

      public function get_ict_kihibs_population_who_used_internet_by_place(){
    

    	$data = DB::table('ict_kihibs_population_who_used_internet_by_place')
                    ->join('health_counties', 'ict_kihibs_population_who_used_internet_by_place.county_id', '=', 'health_counties.county_id')->get();
                  

    	    $county= array();
			$county['name'] = 'county name';
		
             $series1 = array();
			$series1['name'] = 'mobility';

	     	$series2 = array();
			$series2['name'] = 'work';
			
			$series3 = array();
			$series3['name'] = 'cyber';

			$series4 = array();
			$series4['name'] = 'ed centre';

			$series5 = array();
			$series5['name'] = 'comm centre';

			$series6= array();
			$series6['name'] = 'another home';

			$series7= array();
			$series7['name'] = 'at home';

			$series8 = array();
			$series8['name'] = 'other';

			$series9 = array();
			$series9['name'] = 'population';

			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->mobility;
			$series2['data'][] = $row->work;	
			$series3['data'][] = $row->cyber;
			$series4['data'][] = $row->ed_centre;
			
			$series5['data'][] = $row->comm_centre;
	        $series6['data'][] = $row->another_home;
			$series7['data'][] = $row->at_home;
			$series8['data'][] = $row->other;
			$series9['data'][] = $row->population;
	
	
								
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
	
			
			
		
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }






   
 // get ict_kihibs_population_withmobilephone_andaveragesims
      public function get_ict_kihibs_population_withmobilephone_andaveragesims(){
    

    	$data = DB::table('ict_kihibs_population_withmobilephone_andaveragesims')
                    ->join('health_counties', 'ict_kihibs_population_withmobilephone_andaveragesims.county_id', '=', 'health_counties.county_id')->get();
                  

    	    $county= array();
			$county['name'] = 'county name';
		
	     	$series1 = array();
			$series1['name'] = 'phone';
			
			$series2 = array();
			$series2['name'] = 'population';

			$series3 = array();
			$series3['name'] = 'avg sims';

			$series3 = array();
			$series3['name'] = 'population sims	';


			

		
			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->phone;
			$series2['data'][] = $row->population;
			$series3['data'][] = $row->avg_sims;
				$series4['data'][] = $row->population_sims;
	
								
			}
			 
			$result = array();
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
		
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }








}
