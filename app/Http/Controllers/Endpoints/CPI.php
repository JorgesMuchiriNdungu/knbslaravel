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
	//@Charles Ndirangu
    // gets cpi_consumer_price_index
    
    public function get_cpi_consumer_price_index(){
    	$data = DB::table('cpi_consumer_price_index')->get();
			
			$year = array();
			$year['name'] = 'Year';	 
		
			 
			$series1 = array();
			$series1['name'] = 'Month';
			
			$series2 = array();
			$series2['name'] = 'Group';

			$series3 = array();
			$series3['name'] = 'Food and Non Alcoholic beverages';

			$series4 = array();
			$series4['name'] = 'Alcoholic Beverages Tobacco and Narcotics';
			
			$series5 = array();
			$series5['name'] = 'Clothing and FootWare';

			$series6 = array();
			$series6['name'] = 'Housing, Water, Electricity and other gas fuels';

			$series7 = array();
			$series7['name'] = 'Furnishings, household equipment and routine household maintenance';
			
			$series8 = array();
			$series8['name'] = 'Health';

			$series9 = array();
			$series9['name'] = 'Transport';

			$series10 = array();
			$series10['name'] = 'Communication';

			$series11 = array();
			$series11['name'] = 'Recreation and Culture';

			$series12 = array();
			$series12['name'] = 'Restuarant and Hotels';

			$series13 = array();
			$series13['name'] = 'Miscellaneous Goods and Services';

			$series14 = array();
			$series14['name'] = 'Education';

			$series15 = array();
			$series15['name'] = 'Total';

			
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->month;
			$series2['data'][] = $row->group;
			$series3['data'][] = $row->food_and_non_alcoholic_beverages;
			$series4['data'][] = $row->alcoholic_beverages_tobacco_narcotics;
			$series5['data'][] = $row->clothing_and_footwear;
			$series6['data'][] = $row->housing_water_electricity_gas_and_other_fuels;
			$series7['data'][] = $row->furnishings_household_equipment_routine_household_maintenance;
			$series8['data'][] = $row->health;
			$series9['data'][] = $row->transport;
			$series10['data'][] = $row->communication;
			$series11['data'][] = $row->recreation_and_culture;
			$series12['data'][] = $row->restaurant_and_hotels;
			$series13['data'][] = $row->miscellaneous_goods_and_services;
			$series14['data'][] = $row->education;
			$series15['data'][] = $row->total;
			

			}
			 
			$result = array();
			array_push($result,$year);
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
			
			
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


		    
	}
	// gets cpi_elementary_aggregates_weights_in_the_cpi_baskets
    
    public function get_cpi_elementary_aggregates_weights_in_the_cpi_baskets(){
    	$data = DB::table('cpi_elementary_aggregates_weights_in_the_cpi_baskets')->get();
    		 $series0 = array();
			$series0['name'] = 'Coicop code';	 
		
			 
			$series1 = array();
			$series1['name'] = 'Description';
			
			$series2 = array();
			$series2['name'] = 'Nairobi Lower';

			$series3 = array();
			$series3['name'] = 'Nairobi Middle';

			$series4 = array();
			$series4['name'] = 'Nairobi Upper';
			
			$series5 = array();
			$series5['name'] = 'The rest of urban areas';

			$series6 = array();
			$series6['name'] = 'Kenya';

			
			foreach ($data as $row)
			{
			$series0['data'][] = $row->coicop_code;
			$series1['data'][] = $row->description;
			$series2['data'][] = $row->nairobi_lower;
			$series3['data'][] = $row->nairobi_middle;
			$series4['data'][] = $row->nairobi_upper;
			$series5['data'][] = $row->rest_of_urban_areas;
			$series6['data'][] = $row->kenya;
			

			}
			 
			$result = array();
			array_push($result,$series0);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);

	}
	 //@Charles Ndirangu
    // gets cpi_group_weights_for_kenya_cpi_febuary_base_2009
    
    public function get_cpi_group_weights_for_kenya_cpi_febuary_base_2009(){
    	$data = DB::table('cpi_group_weights_for_kenya_cpi_febuary_base_2009')->get();
    		$series0 = array();
			$series0['name'] = 'Description';	 
		
			 
			$series1 = array();
			$series1['name'] = 'Household';
			
			$series2 = array();
			$series2['name'] = 'Group Weight';

			

			
			foreach ($data as $row)
			{
			$series0['data'][] = $row->description;
			$series1['data'][] = $row->household;
			$series2['data'][] = $row->group_weights;
			
			

			}
			 
			$result = array();
			array_push($result,$series0);
			array_push($result,$series1);
			array_push($result,$series2);
			
			
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
	    
	}

		 //@Charles Ndirangu
    // gets cpi_group_weights_for_kenya_cpi_october_base_1997
    
    public function get_cpi_group_weights_for_kenya_cpi_october_base_1997(){
    	$data = DB::table('cpi_group_weights_for_kenya_cpi_october_base_1997')->get();
    		$series0 = array();
			$series0['name'] = 'Item Group';	 
		
			 
			$series1 = array();
			$series1['name'] = 'Household';
			
			$series2 = array();
			$series2['name'] = 'Group Weight';

			

			
			foreach ($data as $row)
			{
			$series0['data'][] = $row->item_group;
			$series1['data'][] = $row->household;
			$series2['data'][] = $row->group_weights;
			
			

			}
			 
			$result = array();
			array_push($result,$series0);
			array_push($result,$series1);
			array_push($result,$series2);
			
			
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
	    
	}


}
