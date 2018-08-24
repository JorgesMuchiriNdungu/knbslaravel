<?php

namespace App\Http\Controllers\Endpoints;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Manufacturing extends Controller

{


    // get manufacturing_per_change_in_quantum_indices_of_man_production

      public function get_manufacturing_per_change_in_quantum_indices_of_man_production(){
    	$data = DB::table('manufacturing_per_change_in_quantum_indices_of_man_production')->get();

    	    $year = array();
			$year['name'] = 'year';
				 
		
	 
			$series1 = array();
			$series1['name'] = 'commodity';
			
			$series2 = array();
			$series2['name'] = 'percentage_change';

		

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->commodity;
			$series2['data'][] = $row->percentage_change;
								
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }




    // get manufacturing_quantum_indices_of_manufacturing_production

      public function get_manufacturing_quantum_indices_of_manufacturing_production(){
    	$data = DB::table('manufacturing_quantum_indices_of_manufacturing_production')->get();

    	    $year = array();
			$year['name'] = 'year';
				 
		
	 
			$series1 = array();
			$series1['name'] = 'commodity';
			
			$series2 = array();
			$series2['name'] = 'quantum indice';

		

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->commodity;
			$series2['data'][] = $row->quantum_indice;
								
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }





}
