<?php

namespace App\Http\Controllers\Endpoints;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Energy extends Controller
{
    //


 // get energy_averagemonthlypumppricesforfuelbycategory

      public function get_energy_averagemonthlypumppricesforfuelbycategory(){
    

    	$data = DB::table('energy_averagemonthlypumppricesforfuelbycategory')
                    ->join('health_counties', 'energy_averagemonthlypumppricesforfuelbycategory.county_id', '=', 'health_counties.county_id')
                    ->join('health_months', 'energy_averagemonthlypumppricesforfuelbycategory.month_id', '=', 'health_months.month_id')->get();

    	    $year = array();
			$year['name'] = 'year';
		
	     	$series1 = array();
			$series1['name'] = 'super petrol';
			
			$series2 = array();
			$series2['name'] = 'diesel';

			$series3 = array();
			$series3['name'] = 'kerosene';

			$series4 = array();
			$series4['name'] = 'county name';

			$series5 = array();
			$series5['name'] = 'month';

		
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->super_petrol;
			$series2['data'][] = $row->diesel;
			$series3['data'][] = $row->kerosene;
			$series4['data'][] = $row->county_name;
			$series5['data'][] = $row->month;
								
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
		
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }









 //get energy_average_retail_prices_of_selected_petroleum_products

      public function get_energy_average_retail_prices_of_selected_petroleum_products(){
    	$data = DB::table('energy_average_retail_prices_of_selected_petroleum_products')->get();

    	    $year = array();
			$year['name'] = 'year';
	 
			$series1 = array();
			$series1['name'] = 'petroleum product';
			
			$series2 = array();
			$series2['name'] = 'retail price ksh';

			$series3 = array();
			$series3['name'] = 'month'; 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->petroleum_product;
			$series2['data'][] = $row->retail_price_ksh;
			$series3['data'][] = $row->month;
								
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			
			array_push($result,$series3);		
			print json_encode($result, JSON_NUMERIC_CHECK);
    }









 // get_energy_electricity_demand_and_supply

      public function get_energy_electricity_demand_and_supply(){
    	$data = DB::table('energy_electricity_demand_and_supply')->get();

    	    $year = array();
			$year['name'] = 'year';
				 
		
	 
			$series1 = array();
			$series1['name'] = 'demand supply';
			
			$series2 = array();
			$series2['name'] = 'capacity megawatts';

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->demand_supply;
			$series2['data'][] = $row->capacity_megawatts;
			
								
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }









//get_energy_generation_and_imports_of_electricity

      public function get_energy_generation_and_imports_of_electricity(){
    	$data = DB::table('energy_generation_and_imports_of_electricity')->get();

    	    $year = array();
			$year['name'] = 'year';
				 
		
	 
			$series1 = array();
			$series1['name'] = 'type';
			
			$series2 = array();
			$series2['name'] = 'electricity source';

			$series3 = array();
			$series3['name'] ='capacity megawatts';

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->electricity_source;
			$series2['data'][] = $row->capacity_megawatts;
			
								
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }








//get_energy_installed_and_effective_capacity_of_electricity

  public function get_energy_installed_and_effective_capacity_of_electricity(){
    	$data = DB::table('energy_installed_and_effective_capacity_of_electricity')->get();

    	    $year = array();
			$year['name'] = 'year';
				 
		
	 
			$series1 = array();
			$series1['name'] = 'type';
			
			$series2 = array();
			$series2['name'] = 'electricity source';

			$series3 = array();
			$series3['name'] ='capacity megawatts';

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->electricity_source;
			$series2['data'][] = $row->capacity_megawatts;
			
								
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }








//gget_energy_net_domestic_sale_of_petroleum_fuels_by_consumer_category

 public function get_energy_net_domestic_sale_of_petroleum_fuels_by_consumer_category(){
    	$data = DB::table('energy_net_domestic_sale_of_petroleum_fuels_by_consumer_category')->get();

    	    $year = array();
			$year['name'] = 'year';
		
	 
			$series1 = array();
			$series1['name'] = 'user';
			
			$series2 = array();
			$series2['name'] = 'quantity tonnes';

	 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->user;
			$series2['data'][] = $row->quantity_tonnes;
			
								
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }








// get_energy_petroleum_supply_and_demand

 public function get_energy_petroleum_supply_and_demand(){
    	$data = DB::table('energy_petroleum_supply_and_demand')->get();

    	    $year = array();
			$year['name'] = 'year';
				 

			$series1 = array();
			$series1['name'] = 'type';
			
			$series2 = array();
			$series2['name'] = 'petroleum product';

			$series3 = array();
			$series3['name'] = 'quantity tonnes';
			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->type;
			$series2['data'][] = $row->petroleum_product;
			$series3['data'][] = $row->quantity_tonnes;
			
								
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }








// get_energy_value_and_quantity_of_imports_exports

 public function get_energy_value_and_quantity_of_imports_exports(){
    	$data = DB::table('energy_value_and_quantity_of_imports_exports')->get();

    	    $year = array();
			$year['name'] = 'year';
				 
		
	 
			$series1 = array();
			$series1['name'] = 'type';
			
			$series2 = array();
			$series2['name'] = 'petroleum product';

			$series3 = array();
			$series3['name'] = 'quantity tonnes';

			$series4 = array();
			$series4['name'] = 'value millions';
 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->type;
			$series2['data'][] = $row->petroleum_product;
			$series3['data'][] = $row->quantity_tonnes;
			$series4['data'][] = $row->value_millions;
		;
			
								
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }

}
