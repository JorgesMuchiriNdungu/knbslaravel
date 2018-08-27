<?php

namespace App\Http\Controllers\Endpoints;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Health_Sectors extends Controller
{


	public function index(){
		 $data= DB::table('health_sectors')->get();

		    $sector_name = array();
			$sector_name['name'] = 'Sector Name';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Report';
			
			$series2 = array();
			$series2['name'] = 'Source';

			$series3 = array();
			$series3['name'] = 'Table Name';

			$series4 = array();
			$series4['name'] = 'Coverage';

			$series5 = array();
			$series5['name'] = 'API URL';

		

			 
			foreach ($data as $row)
			{
			$sector_name['data'][] = $row->sector_name;
			$series1['data'][] = $row->report;
			$series2['data'][] = $row->source;
				$series3['data'][] = $row->table_name;
					$series4['data'][] = $row->coverage;
						$series5['data'][] = $row->api_url;
						
			}
			 
			$result = array();
			array_push($result,$sector_name);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
	}
   
}
