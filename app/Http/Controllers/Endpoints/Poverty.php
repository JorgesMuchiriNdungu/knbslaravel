<?php

namespace App\Http\Controllers\Endpoints;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Poverty extends Controller
{
    //


   
 // get poverty_consumption_expenditure_and_quintile_distribution

      public function get_poverty_consumption_expenditure_and_quintile_distribution(){
   
    	$data = DB::table('poverty_consumption_expenditure_and_quintile_distribution')
                    ->join('health_counties', 'poverty_consumption_expenditure_and_quintile_distribution.county_id', '=', 'health_counties.county_id')->get();
                  

    	    $county= array();
			$county['name'] = 'county name';
		
	     	$series1 = array();
			$series1['name'] = 'mean';
			
			$series2 = array();
			$series2['name'] = 'median';

			$series3 = array();
			$series3['name'] = 'quarter 1';

			$series4 = array();
			$series4['name'] = 'quarter 2';
			
			$series5 = array();
			$series5['name'] = 'quarter 3';

			$series6 = array();
			$series6['name'] = 'quarter 4';

			$series7= array();
			$series7['name'] = 'quarter 5';

			

		
			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->mean;
			$series2['data'][] = $row->median;
			$series3['data'][] = $row->quarter1;
			$series4['data'][] = $row->quarter2;
			$series5['data'][] = $row->quarter3;
			$series6['data'][] = $row->quarter4;
			$series7['data'][] = $row->quarter5;
	
	
								
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






   
 // get  poverty_distribution_of_households_by_pointofpurchasedfooditems

      public function get_poverty_distribution_of_households_by_pointofpurchasedfooditems(){
   
    	$data = DB::table('poverty_distribution_of_households_by_pointofpurchasedfooditems')
                    ->join('health_counties', 'poverty_distribution_of_households_by_pointofpurchasedfooditems.county_id', '=', 'health_counties.county_id')->get();
                  

    	    $county= array();
			$county['name'] = 'county name';
		
	     	$series1 = array();
			$series1['name'] = 'supermarket';
			
			$series2 = array();
			$series2['name'] = 'open market';

			$series3 = array();
			$series3['name'] = 'kiosk';

			$series4 = array();
			$series4['name'] = 'general shop';
			
			$series5 = array();
			$series5['name'] = 'specialised shop';

			$series6 = array();
			$series6['name'] = 'informal sources';

			$series7= array();
			$series7['name'] = 'other formal points';

			$series8= array();
			$series8['name'] = 'number of observations';

			

		
			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->supermarket;
			$series2['data'][] = $row->open_market;
			$series3['data'][] = $row->kiosk;
			$series4['data'][] = $row->general_shop;
			$series5['data'][] = $row->specialised_shop;
			$series6['data'][] = $row->informal_sources;
			$series7['data'][] = $row->other_formal_points;
			$series8['data'][] = $row->number_of_observations;
	
	
								
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






   
 // get poverty_distribution_of_household_food_consumption

      public function get_poverty_distribution_of_household_food_consumption(){
   
    	$data = DB::table('poverty_distribution_of_household_food_consumption')
                    ->join('health_counties', 'poverty_distribution_of_household_food_consumption.county_id', '=', 'health_counties.county_id')->get();
                  

    	    $county= array();
			$county['name'] = 'county name';
		
	     	$series1 = array();
			$series1['name'] = 'purchases';
			
			$series2 = array();
			$series2['name'] = 'stock';

			$series3 = array();
			$series3['name'] = 'own production';

			$series4 = array();
			$series4['name'] = 'gifts';
			
		
			

		
			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->purchases;
			$series2['data'][] = $row->stock;
			$series3['data'][] = $row->own_production;
			$series4['data'][] = $row->gifts;
			
	
	
								
			}
			 
			$result = array();
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			
		
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }




 
 // get poverty_food_and_non_food_expenditure_per_adult_equivalent

      public function get_poverty_food_and_non_food_expenditure_per_adult_equivalent(){
   
    	$data = DB::table('poverty_food_and_non_food_expenditure_per_adult_equivalent')
                    ->join('health_counties', 'poverty_food_and_non_food_expenditure_per_adult_equivalent.county_id', '=', 'health_counties.county_id')->get();
                  

    	    $county= array();
			$county['name'] = 'county name';
		
	     	$series1 = array();
			$series1['name'] = 'food';
			
			$series2 = array();
			$series2['name'] = 'non  food';

			$series3 = array();
			$series3['name'] = 'category';

			
			
		
			

		
			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->food;
			$series2['data'][] = $row->non_food;
			$series3['data'][] = $row->category;
		
			
	
	
								
			}
			 
			$result = array();
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
	
			
		
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }




 
 // get poverty_food_estimates_by_residence_and_county

      public function get_poverty_food_estimates_by_residence_and_county(){
   
    	$data = DB::table('poverty_food_estimates_by_residence_and_county')
                    ->join('health_counties', 'poverty_food_estimates_by_residence_and_county.county_id', '=', 'health_counties.county_id')->get();
                  

    	    $county= array();
			$county['name'] = 'county name';
		
	     	$series1 = array();
			$series1['name'] = 'headcount rate';
			
			$series2 = array();
			$series2['name'] = 'distribution of the poor';

			$series3 = array();
			$series3['name'] = 'poverty gap';

				$series4 = array();
			$series4['name'] = 'severit of poverty';
			
			$series5 = array();
			$series5['name'] = 'population';

			$series6 = array();
			$series6['name'] = 'number of poor';

			
			
		
			

		
			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->headcount_rate;
			$series2['data'][] = $row->distribution_of_the_poor;
			$series3['data'][] = $row->poverty_gap;
			$series4['data'][] = $row->severity_of_poverty;
			$series5['data'][] = $row->population;
			$series6['data'][] = $row->number_of_poor;
		
		
			
	
	
								
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





 
 // get poverty_hardcore_estimates_by_residence_and_county

      public function get_poverty_hardcore_estimates_by_residence_and_county(){
   
    	$data = DB::table('poverty_hardcore_estimates_by_residence_and_county')
                    ->join('health_counties', 'poverty_hardcore_estimates_by_residence_and_county.county_id', '=', 'health_counties.county_id')->get();
                  

    	    $county= array();
			$county['name'] = 'county name';
		
	     	$series1 = array();
			$series1['name'] = 'headcount rate';
			
			$series2 = array();
			$series2['name'] = 'distribution of the poor';

			$series3 = array();
			$series3['name'] = 'poverty gap';

				$series4 = array();
			$series4['name'] = 'severit of poverty';
			
			$series5 = array();
			$series5['name'] = 'population';

			$series6 = array();
			$series6['name'] = 'number of poor';

			
			
		
			

		
			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->headcount_rate;
			$series2['data'][] = $row->distribution_of_the_poor;
			$series3['data'][] = $row->poverty_gap;
			$series4['data'][] = $row->severity_of_poverty;
			$series5['data'][] = $row->population;
			$series6['data'][] = $row->number_of_poor;
		
		
			
	
	
								
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






 // get poverty_overall_estimates_by_residence_and_county

      public function get_poverty_overall_estimates_by_residence_and_county(){
      	
   $data = DB::table('poverty_overall_estimates_by_residence_and_county')
                    ->join('health_counties', 'poverty_overall_estimates_by_residence_and_county.county_id', '=', 'health_counties.county_id')->get();
                  

    	    $county= array();
			$county['name'] = 'county name';
		
	     	$series1 = array();
			$series1['name'] = 'headcount rate';
			
			$series2 = array();
			$series2['name'] = 'distribution of the poor';

			$series3 = array();
			$series3['name'] = 'poverty gap';

				$series4 = array();
			$series4['name'] = 'severit of poverty';
			
			$series5 = array();
			$series5['name'] = 'population';

			$series6 = array();
			$series6['name'] = 'number of poor';

			
			
		
			

		
			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->headcount_rate;
			$series2['data'][] = $row->distribution_of_the_poor;
			$series3['data'][] = $row->poverty_gap;
			$series4['data'][] = $row->severity_of_poverty;
			$series5['data'][] = $row->population;
			$series6['data'][] = $row->number_of_poor;
		
		
			
	
	
								
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




}


