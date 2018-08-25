<?php

namespace App\Http\Controllers\Endpoints;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Administration extends Controller
{ 
	//@Charles Ndirangu
    // gets administrative_unit
    public function get_administrative_unit(){
    	
    	$data = DB::table('administrative_unit')
               ->join('health_counties', 'administrative_unit.county_id', '=', 'health_counties.county_id')
            	->join('health_subcounty', 'administrative_unit.county_id', '=', 'health_subcounty.county_id')
                ->get();
    	
    		$county = array();
			$county['name'] = 'County';
				 
			$sub_county = array();
			$sub_county['name'] = 'Sub County';
			 
			$series3 = array();
			$series3['name'] = 'Number of Divisions';

			$series4 = array();
			$series4['name'] = 'Number of Locations';
			$series5 = array();
			$series5['name'] = 'Number of Sub Locations';
			
			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$sub_county['data'][] = $row->subcounty_name;
			$series3['data'][] = $row->divisions;
			$series4['data'][] = $row->locations;
			$series5['data'][] = $row->sub_locations;
			}
			 
			$result = array();
			array_push($result,$county);
			array_push($result,$sub_county);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			
			print json_encode($result, JSON_NUMERIC_CHECK);
	    
	}
}
