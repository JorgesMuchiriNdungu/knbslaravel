<?php

namespace App\Http\Controllers\Endpoints;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Building extends Controller
{
     //@Charles Ndirangu
    // gets building_and_construction_quarterly_civil_engineering_cost_index
    public function get_building_and_construction_quarterly_civil_engineering_cost_index(){
    	
    	$data = DB::table('building_and_construction_quarterly_civil_engineering_cost_index')->get();
    	
    		$year = array();
			$year['name'] = 'Year';
				 
			$series3 = array();
			$series3['name'] = 'Category';

			$series4 = array();
			$series4['name'] = 'March';
			
			$series5 = array();
			$series5['name'] = 'June';

			$series6 = array();
			$series6['name'] = 'September';
			
			$series7 = array();
			$series7['name'] = 'December';
					
			
			foreach ($data as $row)
			{
				$year['data'][] = $row->year;
				$series3['data'][] = $row->category;
				$series4['data'][] = $row->march;
				$series5['data'][] = $row->june;
				$series6['data'][] = $row->sept;
				$series7['data'][] = $row->december;
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
									
			print json_encode($result, JSON_NUMERIC_CHECK);
	}

	//@Charles Ndirangu
    // gets building_and_construction_quarterly_non_residential_build_cost
    public function get_building_and_construction_quarterly_non_residential_build_cost(){
    	
    	$data = DB::table('building_and_construction_quarterly_non_residential_build_cost')->get();
    	
    		$year = array();
			$year['name'] = 'Year';
				 
			$series3 = array();
			$series3['name'] = 'Category';

			$series4 = array();
			$series4['name'] = 'March';
			
			$series5 = array();
			$series5['name'] = 'June';

			$series6 = array();
			$series6['name'] = 'September';
			
			$series7 = array();
			$series7['name'] = 'December';
					
			
			foreach ($data as $row)
			{
				$year['data'][] = $row->year;
				$series3['data'][] = $row->category;
				$series4['data'][] = $row->march;
				$series5['data'][] = $row->june;
				$series6['data'][] = $row->sept;
				$series7['data'][] = $row->december;
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
									
			print json_encode($result, JSON_NUMERIC_CHECK);
	}

	//@Charles Ndirangu
    // gets building_and_construction_quarterly_overal_construction_cost
    public function get_building_and_construction_quarterly_overal_construction_cost(){
    	
    	$data = DB::table('building_and_construction_quarterly_overal_construction_cost')->get();
    	
    		$year = array();
			$year['name'] = 'Year';
				 
			$series3 = array();
			$series3['name'] = 'Category';

			$series4 = array();
			$series4['name'] = 'March';
			
			$series5 = array();
			$series5['name'] = 'June';

			$series6 = array();
			$series6['name'] = 'September';
			
			$series7 = array();
			$series7['name'] = 'December';
					
			
			foreach ($data as $row)
			{
				$year['data'][] = $row->year;
				$series3['data'][] = $row->category;
				$series4['data'][] = $row->march;
				$series5['data'][] = $row->june;
				$series6['data'][] = $row->sept;
				$series7['data'][] = $row->december;
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
									
			print json_encode($result, JSON_NUMERIC_CHECK);
	}

	//@Charles Ndirangu
    // gets building_and_construction_quarterly_residential_bulding_cost
    public function get_building_and_construction_quarterly_residential_bulding_cost(){
    	
    	$data = DB::table('building_and_construction_quarterly_residential_bulding_cost')->get();
    	
    		$year = array();
			$year['name'] = 'Year';
				 
			$series3 = array();
			$series3['name'] = 'Category';

			$series4 = array();
			$series4['name'] = 'March';
			
			$series5 = array();
			$series5['name'] = 'June';

			$series6 = array();
			$series6['name'] = 'September';
			
			$series7 = array();
			$series7['name'] = 'December';
					
			
			foreach ($data as $row)
			{
				$year['data'][] = $row->year;
				$series3['data'][] = $row->category;
				$series4['data'][] = $row->march;
				$series5['data'][] = $row->june;
				$series6['data'][] = $row->september;
				$series7['data'][] = $row->december;
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
									
			print json_encode($result, JSON_NUMERIC_CHECK);
	}
}
