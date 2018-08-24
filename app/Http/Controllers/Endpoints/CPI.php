<?php

namespace App\Http\Controllers\Endpoints;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CPI extends Controller
{
    //@Charles Ndirangu
    // gets cpi_annual_avg_retail_prices_of_certain_consumer_goods_in_kenya
    
    public function get_cpi_annual_avg_retail_prices_of_certain_consumer_goods_in_kenya(){
    	$data = DB::table('cpi_annual_avg_retail_prices_of_certain_consumer_goods_in_kenya')->get();
    		 $year = array();
			$year['name'] = 'Year';	 
		
			 
			$series1 = array();
			$series1['name'] = 'Item';
			
			$series2 = array();
			$series2['name'] = 'Unit';

			$series3 = array();
			$series3['name'] = 'Kes per unit';

			
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->item;
			$series2['data'][] = $row->unit;
			$series3['data'][] = $row->ksh_per_unit;
			

			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


		    
    }


}
