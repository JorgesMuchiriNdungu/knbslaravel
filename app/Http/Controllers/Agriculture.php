<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Agriculture extends Controller
{
    

    //function to get data

    public function get_sugar(){
    	$data = DB::table('agriculture_area_under_sugarcane_harvested_production_avg_yield')->get();

    	    $year = array();
			$year['name'] = 'year';
				 
		
	 
			$series1 = array();
			$series1['name'] = 'Area under cane ha';
			
			$series2 = array();
			$series2['name'] = 'Area harvested ha';

			$series3 = array();
			$series3['name'] = 'Production tonnes';

			$series4 = array();
			$series4['name'] = 'Average yield tonnes per ha';

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->area_under_cane_ha;
			$series2['data'][] = $row->area_harvested_ha;
			$series3['data'][] = $row->production_tonnes;
			$series4['data'][] = $row->average_yield_tonnes_per_ha;					
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }

    public function get_categories_of_land(){
    	// $data = DB::table('agriculture_categories_of_agricultural_land')->get();

    	$data = DB::table('agriculture_categories_of_agricultural_land')
               ->join('health_counties', 'agriculture_categories_of_agricultural_land.county_id', '=', 'health_counties.county_id')
            
                ->get();

    	

            $county = array();
			$county['name'] = 'County';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'High Potential';
			
			$series2 = array();
			$series2['name'] = 'Medium Potential';

			$series3 = array();
			$series3['name'] = 'Low Potential';

			$series4 = array();
			$series4['name'] = 'Total Land';
			$series5 = array();
			$series5['name'] = 'All Other Land';
			$series6 = array();
			$series6['name'] = 'Total Land Area';


			 
			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->high_potential;
			$series2['data'][] = $row->medium_potential;
			$series3['data'][] = $row->low_potential;
			$series4['data'][] = $row->total_land;
		    $series5['data'][] = $row->all_other_land;		
		    $series6['data'][] = $row->total_land_area;		
			}
			 
			$result = array();
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
		    array_push($result,$series5);
		    array_push($result,$series6);

					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
     
     //fetches agriculture_chemical_med_feed_input
    public function get_agriculture_chemical_med_feed_input(){
    		$data = DB::table('agriculture_chemical_med_feed_input')->get();



    		 $year = array();
			$year['name'] = 'year';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'cattle feed';
			
			$series2 = array();
			$series2['name'] = 'dips spray fluids';

			$series3 = array();
			$series3['name'] = 'fungicides';

			$series4 = array();
			$series4['name'] = 'herbicides';
			$series5 = array();
			$series5['name'] = 'insecticides';
			$series6 = array();
			$series6['name'] = 'other feeds';
			$series7 = array();
			$series7['name'] = 'other livestock drugs';
			$series8 = array();
			$series8['name'] = 'pig feed';
			$series9 = array();
			$series9['name'] = 'plant hormones';
			$series10 = array();
			$series10['name'] = 'poultryfeed';
			$series11 = array();
			$series11['name'] = 'vaccines';

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->cattle_feed;
			$series2['data'][] = $row->dips_spray_fluids;
			$series3['data'][] = $row->fungicides;
			$series4['data'][] = $row->herbicides;	
			$series5['data'][] = $row->insecticides;
			$series6['data'][] = $row->other_feeds;
			$series7['data'][] = $row->other_livestock_drugs;				
			$series8['data'][] = $row->pig_feed;
			$series9['data'][] = $row->plant_hormones;
		    $series10['data'][] = $row->poultry_feed;
		    $series11['data'][] = $row->vaccines;
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
					
			print json_encode($result, JSON_NUMERIC_CHECK);

    }

    public function get_cooperatives(){
    		$data = DB::table('agriculture_cooperatives')->get();



    		 $year = array();
			$year['name'] = 'year';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Coffee';
			
			$series2 = array();
			$series2['name'] = 'Cotton';

			$series3 = array();
			$series3['name'] = 'Pyrethrum';

			$series4 = array();
			$series4['name'] = 'Sugar';
			$series5 = array();
			$series5['name'] = 'Dairy';
			$series6 = array();
			$series6['name'] = 'Multipurpose';
			$series7 = array();
			$series7['name'] = 'Farm Purchase';
			$series8 = array();
			$series8['name'] = 'Fisheries';
			$series9 = array();
			$series9['name'] = 'Other Agricultural';
			$series10 = array();
			$series10['name'] = 'Saccos';
			$series11 = array();
			$series11['name'] = 'Consumer';
			$series12 = array();
			$series12['name'] = 'Housing';
			$series13 = array();
			$series13['name'] = 'Transport';
			$series14 = array();
			$series14['name'] = 'Other non agriculture';
			$series15 = array();
			$series15['name'] = 'Unions';

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->coffee;
			$series2['data'][] = $row->cotton;
			$series3['data'][] = $row->pyrethrum;
			$series4['data'][] = $row->sugar;	
			$series5['data'][] = $row->dairy;
			$series6['data'][] = $row->multi_purpose;
			$series7['data'][] = $row->farm_purchase;				
			$series8['data'][] = $row->fisheries;
			$series9['data'][] = $row->other_agricultural;
		    $series11['data'][] = $row->consumer;
		    $series12['data'][] = $row->housing;
		    $series13['data'][] = $row->transport;
		    $series14['data'][] = $row->other_non_agricultur;
		    $series15['data'][] = $row->unions;
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

     public function agriculture_gross_market_production(){
    		$data = DB::table('agriculture_gross_market_production')->get();
    		 $year = array();
			$year['name'] = 'year';	 
		
			 
			$series1 = array();
			$series1['name'] = 'Cattle and calves for slaughter';
			
			$series2 = array();
			$series2['name'] = 'sugarcane';

			$series3 = array();
			$series3['name'] = 'vegetables';

			$series4 = array();
			$series4['name'] = 'cutflowers';
			$series5 = array();
			$series5['name'] = 'tea';
			$series6 = array();
			$series6['name'] = 'fruits';
			$series7 = array();
			$series7['name'] = 'Poutry and eggs';
			$series8 = array();
			$series8['name'] = 'wheat';
			$series9 = array();
			$series9['name'] = 'sheep goats and lambs for slaughter';
			$series10 = array();
			$series10['name'] = 'maize';
			$series11 = array();
			$series11['name'] = 'coffee';
			$series12 = array();
			$series12['name'] = 'barley';
			$series13 = array();
			$series13['name'] = 'dairy products';
			$series14 = array();
			$series14['name'] = 'cotton';
			$series15 = array();
			$series15['name'] = 'hides and skins';
			$series16 = array();
			$series16['name'] = 'other cereals';
			$series17 = array();
			$series17['name'] = 'other temporary crops';
			$series18 = array();
			$series18['name'] = 'pigs for slaughter';
			$series19 = array();
			$series19['name'] = 'wool';
			$series20 = array();
			$series20['name'] = 'potatoes';

		    $series21 = array();
			$series21['name'] = 'pulses';

			$series22 = array();
			$series22['name'] = 'pyrethrum';

			$series23 = array();
			$series23['name'] = 'rice paddy';

			$series24= array();
			$series24['name'] = 'tobacco';


			$series25 = array();
			$series25['name'] = 'total crops';

			$series26 = array();
			$series26['name'] = 'grand total';
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->cattle_and_calves_for_slaughter;
			$series2['data'][] = $row->sugarcane;
			$series3['data'][] = $row->vegetables;
			$series4['data'][] = $row->cutflowers;	
			$series5['data'][] = $row->tea;
			$series6['data'][] = $row->fruits;
			$series7['data'][] = $row->poultry_and_eggs;				
			$series8['data'][] = $row->wheat;
			$series9['data'][] = $row->sheep_goats_and_lambs_for_slaughter;
		    $series11['data'][] = $row->maize;
		    $series12['data'][] = $row->coffee;
		    $series13['data'][] = $row->barley;
		    $series14['data'][] = $row->dairy_products;
		    $series15['data'][] = $row->cotton;
		    $series16['data'][] = $row->hides_and_skins;
		    $series17['data'][] = $row->other_cereals;
		    $series18['data'][] = $row->other_temporary_crops;
		    $series19['data'][] = $row->pigs_for_slaughter;
		    $series20['data'][] = $row->wool;
		    $series21['data'][] = $row->potatoes;
		    $series22['data'][] = $row->pulses;
		    $series23['data'][] = $row->pyrethrum;
		    $series24['data'][] = $row->rice_paddy;
		    $series25['data'][] = $row->tobacco;
		    $series26['data'][] = $row->total_crops;
		    $series27['data'][] = $row->grand_total;

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
		    array_push($result,$series16);
		    array_push($result,$series17);
		    array_push($result,$series18);
		    array_push($result,$series19);
		    array_push($result,$series20);
		    array_push($result,$series21);
		    array_push($result,$series22);
		    array_push($result,$series23);
		    array_push($result,$series24);
		    array_push($result,$series25);
		    array_push($result,$series26);
		    array_push($result,$series27);
					
			print json_encode($result, JSON_NUMERIC_CHECK);

    }

     public function get_irrigation_schemes(){
    		$data = DB::table('agriculture_irrigation_schemes')->get();



    		 $year = array();
			$year['name'] = 'year';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Ahero gross value of crop millions';
			
			$series2 = array();
			$series2['name'] = 'ahero crop';

			$series3 = array();
			$series3['name'] = 'Pyrethrum';

			$series4 = array();
			$series4['name'] = 'Sugar';
			$series5 = array();
			$series5['name'] = 'Dairy';
			$series6 = array();
			$series6['name'] = 'Multipurpose';
			$series7 = array();
			$series7['name'] = 'Farm Purchase';
			$series8 = array();
			$series8['name'] = 'Fisheries';
			$series9 = array();
			$series9['name'] = 'Other Agricultural';
			$series10 = array();
			$series10['name'] = 'Saccos';
			$series11 = array();
			$series11['name'] = 'Consumer';
			$series12 = array();
			$series12['name'] = 'Housing';
			$series13 = array();
			$series13['name'] = 'Transport';
			$series14 = array();
			$series14['name'] = 'Other non agriculture';
			$series15 = array();
			$series15['name'] = 'Unions';

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->coffee;
			$series2['data'][] = $row->cotton;
			$series3['data'][] = $row->pyrethrum;
			$series4['data'][] = $row->sugar;	
			$series5['data'][] = $row->dairy;
			$series6['data'][] = $row->multi_purpose;
			$series7['data'][] = $row->farm_purchase;				
			$series8['data'][] = $row->fisheries;
			$series9['data'][] = $row->other_agricultural;
		    $series11['data'][] = $row->consumer;
		    $series12['data'][] = $row->housing;
		    $series13['data'][] = $row->transport;
		    $series14['data'][] = $row->other_non_agricultur;
		    $series15['data'][] = $row->unions;
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

}
