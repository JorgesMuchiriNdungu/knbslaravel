<?php

namespace App\Http\Controllers\Endpoints;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Trade extends Controller
{
    //@Charles Ndirangu
    // gets trade_and_commerce_balance_of_trade
    public function get_trade_and_commerce_balance_of_trade(){
    	
    	$data = DB::table('trade_and_commerce_balance_of_trade')->get();
    	
    		$year = array();
			$year['name'] = 'Year';
				 
			$series3 = array();
			$series3['name'] = 'Description';

			$series4 = array();
			$series4['name'] = 'Amount in milllions';
			
			
			foreach ($data as $row)
			{
				$year['data'][] = $row->year;
				$series3['data'][] = $row->description;
				$series4['data'][] = $row->amount_in_millions;
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series3);
			array_push($result,$series4);
						
			print json_encode($result, JSON_NUMERIC_CHECK);
	}
	//@Charles Ndirangu
    // gets trade_and_commerce_import_trade_africa_countries
    public function get_trade_and_commerce_import_trade_africa_countries(){
    	
    	$data = DB::table('trade_and_commerce_import_trade_africa_countries')->get();
    	
    		$year = array();
			$year['name'] = 'Year';
				 
			$series3 = array();
			$series3['name'] = 'Zones';

			$series4 = array();
			$series4['name'] = 'Country';
			
			$series5 = array();
			$series5['name'] = 'Values';			
			
			foreach ($data as $row)
			{
				$year['data'][] = $row->year;
				$series3['data'][] = $row->zones;
				$series4['data'][] = $row->country;
				$series5['data'][] = $row->values;
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
						
			print json_encode($result, JSON_NUMERIC_CHECK);
	}
	//@Charles Ndirangu
    // gets trade_and_commerce_quantities_principal_domestic_exports
    public function get_trade_and_commerce_quantities_principal_domestic_exports(){
    	
    	$data = DB::table('trade_and_commerce_quantities_principal_domestic_exports')->get();
    	
    		$year = array();
			$year['name'] = 'Year';
				 
			$series3 = array();
			$series3['name'] = 'Description';

			$series4 = array();
			$series4['name'] = 'Quantity';
			
					
			
			foreach ($data as $row)
			{
				$year['data'][] = $row->year;
				$series3['data'][] = $row->description;
				$series4['data'][] = $row->quantity;
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series3);
			array_push($result,$series4);
									
			print json_encode($result, JSON_NUMERIC_CHECK);
	}

	//@Charles Ndirangu
    // gets trade_and_commerce_quantities_principal_imports
    public function get_trade_and_commerce_quantities_principal_imports(){
    	
    	$data = DB::table('trade_and_commerce_quantities_principal_imports')->get();
    	
    		$year = array();
			$year['name'] = 'Year';
				 
			$series3 = array();
			$series3['name'] = 'Commodity';

			$series4 = array();
			$series4['name'] = 'Unit of Quantity';
			
			$series5 = array();
			$series5['name'] = 'Quantity';
					
			
			foreach ($data as $row)
			{
				$year['data'][] = $row->year;
				$series3['data'][] = $row->commodity;
				$series4['data'][] = $row->unit_of_quantity;
				$series5['data'][] = $row->quantity;
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
									
			print json_encode($result, JSON_NUMERIC_CHECK);
	}
	//@Charles Ndirangu
    // gets trade_and_commerce_revenue_collection_by_amount
    public function get_trade_and_commerce_revenue_collection_by_amount(){
    	
    	$data = DB::table('trade_and_commerce_revenue_collection_by_amount')
    	->join('trade_and_commerce_revenue_collection_by_id', 'trade_and_commerce_revenue_collection_by_amount.revenuecollection_id', '=', 'trade_and_commerce_revenue_collection_by_id.revenuecollection_id')
    	->join('health_counties', 'trade_and_commerce_revenue_collection_by_amount.county_id', '=', 'health_counties.county_id')
    	->get();
    	
    		$year = array();
			$year['name'] = 'Year';
				 
			$series3 = array();
			$series3['name'] = 'County';

			$series4 = array();
			$series4['name'] = 'Revenue Collection Title';
			
			$series5 = array();
			$series5['name'] = 'Amount';
					
			
			foreach ($data as $row)
			{
				$year['data'][] = $row->year;
				$series3['data'][] = $row->county_name;
				$series4['data'][] = $row->revenuecollection_title;
				$series5['data'][] = $row->amount;
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
									
			print json_encode($result, JSON_NUMERIC_CHECK);
	}

	//@Charles Ndirangu
    // gets trade_and_commerce_trading_centres
    public function get_trade_and_commerce_trading_centres(){
    	
    	$data = DB::table('trade_and_commerce_trading_centres')
    	->join('trade_and_commerce_trading_centres_ids', 'trade_and_commerce_trading_centres.trading_centre_id', '=', 'trade_and_commerce_trading_centres_ids.trading_centre_id')
    	->join('health_counties', 'trade_and_commerce_trading_centres.county_id', '=', 'health_counties.county_id')
    	->get();
    	
    		$year = array();
			$year['name'] = 'Year';
				 
			$series3 = array();
			$series3['name'] = 'County';

			$series4 = array();
			$series4['name'] = 'Trading Center';
			
			$series5 = array();
			$series5['name'] = 'Number';
					
			
			foreach ($data as $row)
			{
				$year['data'][] = $row->year;
				$series3['data'][] = $row->county_name;
				$series4['data'][] = $row->trading_centre;
				$series5['data'][] = $row->number;
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
									
			print json_encode($result, JSON_NUMERIC_CHECK);
	}

	//@Charles Ndirangu
    // gets trade_and_commerce_value_of_total_exports_all_destinations
    public function get_trade_and_commerce_value_of_total_exports_all_destinations(){
    	
    	$data = DB::table('trade_and_commerce_value_of_total_exports_all_destinations')->get();
    	
    		$year = array();
			$year['name'] = 'Year';
				 
			$series3 = array();
			$series3['name'] = 'Region';

			$series4 = array();
			$series4['name'] = 'Country';
			
			$series5 = array();
			$series5['name'] = 'Value in Millions';
					
			
			foreach ($data as $row)
			{
				$year['data'][] = $row->year;
				$series3['data'][] = $row->region;
				$series4['data'][] = $row->country;
				$series5['data'][] = $row->value_in_millions;
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
									
			print json_encode($result, JSON_NUMERIC_CHECK);
	}
	//@Charles Ndirangu
    // gets trade_and_commerce_value_of_total_exports_european_union
    public function get_trade_and_commerce_value_of_total_exports_european_union(){
    	
    	$data = DB::table('trade_and_commerce_value_of_total_exports_european_union')->get();
    	
    		$year = array();
			$year['name'] = 'Year';
			
			$series4 = array();
			$series4['name'] = 'Country';
			
			$series5 = array();
			$series5['name'] = 'Value in Millions';
					
			
			foreach ($data as $row)
			{
				$year['data'][] = $row->year;
				$series4['data'][] = $row->country;
				$series5['data'][] = $row->value_in_millions;
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series4);
			array_push($result,$series5);
									
			print json_encode($result, JSON_NUMERIC_CHECK);
	}
	//@Charles Ndirangu
    // gets trade_and_commerce_value_total_exports_east_africa_communities
    public function get_trade_and_commerce_value_total_exports_east_africa_communities(){
    	
    	$data = DB::table('trade_and_commerce_value_total_exports_east_africa_communities')->get();
    	
    		$year = array();
			$year['name'] = 'Year';
			
			$series4 = array();
			$series4['name'] = 'Country';
			
			$series5 = array();
			$series5['name'] = 'Value in Millions';
					
			
			foreach ($data as $row)
			{
				$year['data'][] = $row->year;
				$series4['data'][] = $row->country;
				$series5['data'][] = $row->value_in_millions;
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series4);
			array_push($result,$series5);
									
			print json_encode($result, JSON_NUMERIC_CHECK);
	}

	//@Charles Ndirangu
    // gets trade_and_commerce_values_of_principal_domestic_exports
    public function get_trade_and_commerce_values_of_principal_domestic_exports(){
    	
    	$data = DB::table('trade_and_commerce_values_of_principal_domestic_exports')->get();
    	
    		$year = array();
			$year['name'] = 'Year';
			
			$series4 = array();
			$series4['name'] = 'Description';
			
			$series5 = array();
			$series5['name'] = 'Value';
					
			
			foreach ($data as $row)
			{
				$year['data'][] = $row->year;
				$series4['data'][] = $row->description;
				$series5['data'][] = $row->values;
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series4);
			array_push($result,$series5);
									
			print json_encode($result, JSON_NUMERIC_CHECK);
	}

	//@Charles Ndirangu
    // gets trade_and_commerce_values_of_principal_imports
    public function get_trade_and_commerce_values_of_principal_imports(){
    	
    	$data = DB::table('trade_and_commerce_values_of_principal_imports')->get();
    	
    		$year = array();
			$year['name'] = 'Year';
			
			$series4 = array();
			$series4['name'] = 'Description';
			
			$series5 = array();
			$series5['name'] = 'Quantity';
					
			
			foreach ($data as $row)
			{
				$year['data'][] = $row->year;
				$series4['data'][] = $row->description;
				$series5['data'][] = $row->quantity;
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series4);
			array_push($result,$series5);
									
			print json_encode($result, JSON_NUMERIC_CHECK);
	}
}





