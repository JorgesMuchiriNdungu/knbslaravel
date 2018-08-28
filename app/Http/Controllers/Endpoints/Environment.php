<?php

namespace App\Http\Controllers\Endpoints;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Environment extends Controller
{
    


 public function get_environment_and_natural_resources_average_export_prices_ash(){
    
           $data= DB::table('environment_and_natural_resources_average_export_prices_ash')->get();

           $year = array();
			$year['name'] = 'year';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Soda Ash ';
			
			$series2 = array();
			$series2['name'] = 'fluorspar';

		

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->soda_ash;
			$series2['data'][] = $row->fluorspar;
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }


}
