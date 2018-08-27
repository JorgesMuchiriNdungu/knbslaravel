<?php

namespace App\Http\Controllers\Endpoints;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Labour extends Controller
{
    //
    



    //function to get labour_average_wage_earnings_per_employee_private_sector

      public function get_labour_average_wage_earnings_per_employee_private_sector(){
    	$data = DB::table('labour_average_wage_earnings_per_employee_private_sector')->get();

    	    $year = array();
			$year['name'] = 'year';
	 
			$series1 = array();
			$series1['name'] = 'private sector';
			
			$series2 = array();
			$series2['name'] = 'wage earnings';

		 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->private_sector;
			$series2['data'][] = $row->wage_earnings;
								
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }








//et_labour_average_wage_earnings_per_employee_public_sector
 
public function get_labour_average_wage_earnings_per_employee_public_sector(){
    	$data = DB::table('labour_average_wage_earnings_per_employee_public_sector')->get();

    	    $year = array();
			$year['name'] = 'year';
		
	 
			$series1 = array();
			$series1['name'] = 'public sector';
			
			$series2 = array();
			$series2['name'] = 'wage earnings';

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->public_sector;
			$series2['data'][] = $row->wage_earnings;
								
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }








 // get_labour_employment_public_sector

public function get_labour_employment_public_sector(){
    	$data = DB::table('labour_employment_public_sector')->get();

    	$data = DB::table('labour_employment_public_sector')
			    	->join('labour_sectors', 'labour_employment_public_sector.sector_id', '=', 'labour_sectors.sector_id')
                    ->join('health_counties', 'labour_employment_public_sector.county_id', '=', 'health_counties.county_id')->get();
                
            
    	    $year = array();
			$year['name'] = 'year';
				 
		
	 
			$series1 = array();
			$series1['name'] = 'Sector';
			
			$series2 = array();
			$series2['name'] = 'Wage Employment';
			$series3 = array();
			$series3['name'] = 'County Name';

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->sector_name;
			$series2['data'][] = $row->wage_employment;
			$series3['data'][] = $row->county_name;
								
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }










//get  labour_memorandum_items_in_public_sector

      public function get_labour_memorandum_items_in_public_sector(){
    	$data = DB::table('labour_memorandum_items_in_public_sector')->get();

    	    $year = array();
			$year['name'] = 'year';
		
			$series1 = array();
			$series1['name'] = 'memorandum item';
			
			$series2 = array();
			$series2['name'] = 'wage earnings';

		
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->memorandum_item;
			$series2['data'][] = $row->wage_earnings;
			
								
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			
			
			print json_encode($result, JSON_NUMERIC_CHECK);
    }









//get labour_sectors

      public function get_labour_sectors(){
    	$data = DB::table('labour_sectors')->get();

    	    $sector = array();
			$sector['name'] = 'sector name';
				
			foreach ($data as $row)
			{
			$sector['data'][] = $row->sector_name;
			
			
								
			}
			 
			$result = array();
			array_push($result,$sector);
			
			
			
			print json_encode($result, JSON_NUMERIC_CHECK);
    }








//get labour_total_recorded_employment

      public function get_labour_total_recorded_employment(){

    	$data = DB::table('labour_total_recorded_employment')->get();

    	    $year = array();
			$year['name'] = 'year';
				 
		
	 
			$series1 = array();
			$series1['name'] = 'sectorc ategory';
			
			$series2 = array();
			$series2['name'] = 'total employment';

	
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->sector_category;
			$series2['data'][] = $row->total_employment;
			
	
							
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			
			
			print json_encode($result, JSON_NUMERIC_CHECK);
    }








//get labour_total_recorded_employment

      public function get_labour_wage_employment_by_industry_and_sex(){

    	$data = DB::table('labour_wage_employment_by_industry_and_sex')->get();

    	    $year = array();
			$year['name'] = 'year';
				 
		
	 
			$series1 = array();
			$series1['name'] = 'industry';
			
			$series2 = array();
			$series2['name'] = 'wage_employment';
			$series3 = array();
			$series3['name'] = 'gender';

		

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->industry;
			$series2['data'][] = $row->wage_employment;
			$series3['data'][] = $row->gender;
			
	
							
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
			
			print json_encode($result, JSON_NUMERIC_CHECK);
    }







//get labour_wage_employment_by_industry_in_private_sector

      public function get_labour_wage_employment_by_industry_in_private_sector(){

    	$data = DB::table('labour_wage_employment_by_industry_in_private_sector')->get();

    	    $year = array();
			$year['name'] = 'year';
				 
		
	 
			$series1 = array();
			$series1['name'] = 'private sector';
			
			$series2 = array();
			$series2['name'] = 'wage employment';
			
			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->private_sector;
			$series2['data'][] = $row->wage_employment;
		
			
	
							
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			
			
			
			print json_encode($result, JSON_NUMERIC_CHECK);
    }







    // get labour_wage_employment_by_industry_in_public_sector

      public function get_labour_wage_employment_by_industry_in_public_sector(){

    	$data = DB::table('labour_wage_employment_by_industry_in_public_sector')->get();

    	    $year = array();
			$year['name'] = 'year';
				 
		
	 
			$series1 = array();
			$series1['name'] = 'public sector';
			
			$series2 = array();
			$series2['name'] = 'wage employment';
			
			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->public_sector;
			$series2['data'][] = $row->wage_employment;
		
			
	
							
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			
			
			
			print json_encode($result, JSON_NUMERIC_CHECK);
    }






}
