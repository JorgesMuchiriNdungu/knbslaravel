<?php

namespace App\Http\Controllers\Endpoints;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Nutrition extends Controller
{
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
			$series3['name'] = 'under weight';

			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->stunted;
			$series2['data'][] = $row->wasted;
			$series3['data'][] = $row->under_weight;						}
			 
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
			$series4['data'][] = $row->obese;						}
			 
			$result = array();
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
    
}
