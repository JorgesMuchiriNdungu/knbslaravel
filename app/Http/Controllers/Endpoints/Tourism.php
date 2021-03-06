<?php

namespace App\Http\Controllers\Endpoints;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Tourism extends Controller
{
    //@Charles Ndirangu
    // gets tourism_arrivals
    public function get_tourism_arrivals(){
    	
    	$data = DB::table('tourism_arrivals')->get();
    	
    		$year = array();
			$year['name'] = 'Year';
		 		 
			$series3 = array();
			$series3['name'] = 'Quarter';

			$series4 = array();
			$series4['name'] = 'Holiday';
			
			$series5 = array();
			$series5['name'] = 'Business';

			$series6 = array();
			$series6['name'] = 'Transit';
			
			$series7 = array();
			$series7['name'] = 'Other';
					
			
			foreach ($data as $row)
			{
				$year['data'][] = $row->year;
				$series3['data'][] = $row->quarter;
				$series4['data'][] = $row->holiday;
				$series5['data'][] = $row->business;
				$series6['data'][] = $row->transit;
				$series7['data'][] = $row->other;
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
									
			print json_encode($result, JSON_NUMERIC_CHECK);
	}

	//@Charles Ndirangu
    // gets tourism_conferences
    public function get_tourism_conferences(){
    	
    	$data = DB::table('tourism_conferences')->get();
    	
    		$year = array();
			$year['name'] = 'Year';
		 		 
			$series3 = array();
			$series3['name'] = 'Category';

			$series4 = array();
			$series4['name'] = 'Number of Conferences';
			
			$series5 = array();
			$series5['name'] = 'Number of Delegates';

			foreach ($data as $row)
			{
				$year['data'][] = $row->year;
				$series3['data'][] = $row->category;
				$series4['data'][] = $row->number_of_conferences;
				$series5['data'][] = $row->number_of_delegates;
				
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
									
			print json_encode($result, JSON_NUMERIC_CHECK);
	}

	//@Charles Ndirangu
	// gets tourism_departures
    public function get_tourism_departures(){
    	
    	$data = DB::table('tourism_departures')->get();
    	
    		$year = array();
			$year['name'] = 'Year';
		 		 
			$series3 = array();
			$series3['name'] = 'Quarter';

			$series4 = array();
			$series4['name'] = 'Holiday';
			
			$series5 = array();
			$series5['name'] = 'Business';

			$series6 = array();
			$series6['name'] = 'Transit';
			
			$series7 = array();
			$series7['name'] = 'Other';
					
			
			foreach ($data as $row)
			{
				$year['data'][] = $row->year;
				$series3['data'][] = $row->quarter;
				$series4['data'][] = $row->holiday;
				$series5['data'][] = $row->business;
				$series6['data'][] = $row->transit;
				$series7['data'][] = $row->other;
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
									
			print json_encode($result, JSON_NUMERIC_CHECK);
	}

	//@Charles Ndirangu
	// gets tourism_earnings
    public function get_tourism_earnings(){
    	
    	$data = DB::table('tourism_earnings')->get();
    	
    		$year = array();
			$year['name'] = 'Year';
		 		 
			$series3 = array();
			$series3['name'] = 'Tourism Earnings in Billions';


			foreach ($data as $row)
			{
				$year['data'][] = $row->year;
				$series3['data'][] = $row->tourism_earnings_billions;
				
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series3);
									
			print json_encode($result, JSON_NUMERIC_CHECK);
	}

	//@Charles Ndirangu
	// gets tourism_hotel_occupancy_by_residence
    public function get_tourism_hotel_occupancy_by_residence(){
    		$data = DB::table('tourism_hotel_occupancy_by_residence')->get();
    		 $year = array();
			$year['name'] = 'year';	 
		
			 
			$series1 = array();
			$series1['name'] = 'Permanent occupants';
			
			$series2 = array();
			$series2['name'] = 'From Germany';

			$series3 = array();
			$series3['name'] = 'From Switzerland';

			$series4 = array();
			$series4['name'] = 'From United Kingndom';

			$series5 = array();
			$series5['name'] = 'From Italy';
			

			$series6 = array();
			$series6['name'] = 'From France';
			
			$series7 = array();
			$series7['name'] = 'From Scandinavia';
			
			$series8 = array();
			$series8['name'] = 'From Other Parts of Europe';
			
			$series9 = array();
			$series9['name'] = 'From Europe';
			
			$series11 = array();
			$series11['name'] = 'Kenyan Residents';
			
			$series12 = array();
			$series12['name'] = 'From Uganda';
			
			$series13 = array();
			$series13['name'] = 'From Tanzania';
			
			$series14 = array();
			$series14['name'] = 'From East and Central Africa';
			
			$series15 = array();
			$series15['name'] = 'From West Africa';
			
			$series16 = array();
			$series16['name'] = 'From North Africa';
			
			$series17 = array();
			$series17['name'] = 'From South Africa';
			
			$series18 = array();
			$series18['name'] = 'From other Parts of Africa';
			
			$series19 = array();
			$series19['name'] = 'From Africa';
			
			$series20 = array();
			$series20['name'] = 'From USA';
			
			$series21 = array();
			$series21['name'] = 'From Canada';

		    $series22 = array();
			$series22['name'] = 'From Other Parts of USA';

			$series23 = array();
			$series23['name'] = 'From America';

			$series24 = array();
			$series24['name'] = 'From Japan';

			$series25= array();
			$series25['name'] = 'From India';


			$series26 = array();
			$series26['name'] = 'From Middle East';

			$series27 = array();
			$series27['name'] = 'From Other Parts Of Asia';

			$series28 = array();
			$series28['name'] = 'From Asia';

			$series29 = array();
			$series29['name'] = 'From Australia and New Zealand';

			$series30 = array();
			$series30['name'] = 'From All Other countries';

			$series31 = array();
			$series31['name'] = 'Total Occupied';

			$series32 = array();
			$series32['name'] = 'Total Available';

			$series33 = array();
			$series33['name'] = 'Occupancy Percentage Rate';

			
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->permanent_occupants;
			$series2['data'][] = $row->germany;
			$series3['data'][] = $row->switzerland;
			$series4['data'][] = $row->united_kingdom;	
			$series5['data'][] = $row->italy;
			$series6['data'][] = $row->france;
			$series7['data'][] = $row->scandinavia;				
			$series8['data'][] = $row->other_europe;
			$series9['data'][] = $row->europe;
		    $series11['data'][] = $row->kenya_residents;
		    $series12['data'][] = $row->uganda;
		    $series13['data'][] = $row->tanzania;
		    $series14['data'][] = $row->east_and_central_africa;
		    $series15['data'][] = $row->west_africa;
		    $series16['data'][] = $row->north_africa;
		    $series17['data'][] = $row->south_africa;
		    $series18['data'][] = $row->other_africa;
		    $series19['data'][] = $row->africa;
		    $series20['data'][] = $row->usa;
		    $series21['data'][] = $row->canada;
		    $series22['data'][] = $row->other_america;
		    $series23['data'][] = $row->america;
		    $series24['data'][] = $row->japan;
		    $series25['data'][] = $row->india;
		    $series26['data'][] = $row->middle_east;
		    $series27['data'][] = $row->other_asia;
		    $series28['data'][] = $row->asia;
		    $series29['data'][] = $row->australia_and_new_zealand;
		    $series30['data'][] = $row->all_other_countries;
		    $series31['data'][] = $row->total_occupied;
		    $series32['data'][] = $row->total_available;
		    $series33['data'][] = $row->occupancy_percentage_rate;

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
		    array_push($result,$series28);
		    array_push($result,$series29);
		    array_push($result,$series30);
		    array_push($result,$series31);
		    array_push($result,$series32);
		    array_push($result,$series33);
		    
					
			print json_encode($result, JSON_NUMERIC_CHECK);

    }

    //@Charles Ndirangu
	// gets tourism_hotel_occupancy_by_zone
    public function get_tourism_hotel_occupancy_by_zone(){
    	
    	$data = DB::table('tourism_hotel_occupancy_by_zone')->get();
    	
    		$year = array();
			$year['name'] = 'Year';
		 		 
			$series3 = array();
			$series3['name'] = 'Coastal Beach';

			$series4 = array();
			$series4['name'] = 'Other Coastal Areas';
			
			$series5 = array();
			$series5['name'] = 'Coastal Hinterland';

			$series6 = array();
			$series6['name'] = 'Nairobi High Class';

			$series7 = array();
			$series7['name'] = 'Nairobi Other Areas';
			
			$series8 = array();
			$series8['name'] = 'Central';

			$series9 = array();
			$series9['name'] = 'MaasaiLand';
			
			$series11 = array();
			$series11['name'] = 'Nyanza Basin';
			
			$series12 = array();
			$series12['name'] = 'Western';
			
			$series13 = array();
			$series13['name'] = 'Northern';
			
			$series14 = array();
			$series14['name'] = 'Total Occupied';
			
			$series15 = array();
			$series15['name'] = 'Total Available';
				
			
			foreach ($data as $row)
			{
				$year['data'][] = $row->year;
				$series3['data'][] = $row->coastal_beach;
				$series4['data'][] = $row->coastal_other;
				$series5['data'][] = $row->coastal_hinterland;
				$series6['data'][] = $row->nairobi_high_class;
				$series7['data'][] = $row->nairobi_other;
				$series8['data'][] = $row->central;
				$series9['data'][] = $row->masailand;
			    $series11['data'][] = $row->nyanza_basin;
			    $series12['data'][] = $row->western;
			    $series13['data'][] = $row->northern;
			    $series14['data'][] = $row->total_occupied;
			    $series15['data'][] = $row->total_available;
			   
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$series8);
			array_push($result,$series9);
			array_push($result,$series11);
			array_push($result,$series12);
		    array_push($result,$series13);
			array_push($result,$series14);
			array_push($result,$series15);
									
			print json_encode($result, JSON_NUMERIC_CHECK);
	}

	//@Charles Ndirangu
    // gets tourism_visitor_to_parks
    public function get_tourism_population_proportion_that_took_trip(){
    	
    	$data = DB::table('tourism_population_proportion_that_took_trip')
    		->join('health_counties','tourism_population_proportion_that_took_trip.county_id','=','health_counties.county_id')
    		->get();
    	
    				 		 
			$series3 = array();
			$series3['name'] = 'County';

			$series4 = array();
			$series4['name'] = 'Population Proportion';
			
			$series5 = array();
			$series5['name'] = 'Number of Individuals';

			foreach ($data as $row)
			{
				$series3['data'][] = $row->county_name;
				$series4['data'][] = $row->proportion;
				$series5['data'][] = $row->no_of_individuals;
				
			}
			 
			$result = array();
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
									
			print json_encode($result, JSON_NUMERIC_CHECK);
	}

	//@Charles Ndirangu
    // gets tourism_visitor_to_parks
	public function get_tourism_visitor_to_parks(){
    		$data = DB::table('tourism_visitor_to_parks')->get();
    		 $year = array();
			$year['name'] = 'year';	 
					 
			$series1 = array();
			$series1['name'] = 'Nairobi';
			
			$series2 = array();
			$series2['name'] = 'Nairobi Safari Walk';

			$series3 = array();
			$series3['name'] = 'Nairobi Mini Opharnage';

			$series4 = array();
			$series4['name'] = 'Amboseli';
			$series5 = array();
			$series5['name'] = 'Tsavo West';
			$series6 = array();
			$series6['name'] = 'Tsavo East';
			$series7 = array();
			$series7['name'] = 'Aberdare';
			$series8 = array();
			$series8['name'] = 'Lake Nakuru';
			$series9 = array();
			$series9['name'] = 'Maasai Mara';
			$series10 = array();
			$series10['name'] = 'Halllers Park';
			$series11 = array();
			$series11['name'] = 'Malindi Marine';
			$series12 = array();
			$series12['name'] = 'Lake Bogoria';
			$series13 = array();
			$series13['name'] = 'Meru';
			$series14 = array();
			$series14['name'] = 'Shimba Hills';
			$series15 = array();
			$series15['name'] = 'Mt Kenya';
			$series16 = array();
			$series16['name'] = 'Samburu';
			$series17 = array();
			$series17['name'] = 'Kisite Mpunguti';
			$series18 = array();
			$series18['name'] = 'Mombasa Marine';
			$series19 = array();
			$series19['name'] = 'Watamu Marine';
			
			$series20 = array();
			$series20['name'] = 'Hells Gate';

			$series21 = array();
			$series21['name'] = 'Impala Sanctuary Kisumu';

		    $series22 = array();
			$series22['name'] = 'Mt Longonot';

			$series23 = array();
			$series23['name'] = 'Other';

			
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->nairobi;
			$series2['data'][] = $row->nairobi_safari_walk;
			$series3['data'][] = $row->nairobi_mini_orphanage;
			$series4['data'][] = $row->amboseli;	
			$series5['data'][] = $row->tsavo_west;
			$series6['data'][] = $row->tsavo_east;
			$series7['data'][] = $row->aberdare;				
			$series8['data'][] = $row->lake_nakuru;
			$series9['data'][] = $row->masai_mara;
		    $series10['data'][] = $row->hallers_park;
		    $series11['data'][] = $row->malindi_marine;
		    $series12['data'][] = $row->lake_bogoria;
		    $series13['data'][] = $row->meru;
		    $series14['data'][] = $row->shimba_hills;
		    $series15['data'][] = $row->mt_kenya;
		    $series16['data'][] = $row->samburu;
		    $series17['data'][] = $row->kisite_mpunguti;
		    $series18['data'][] = $row->mombasa_marine;
		    $series19['data'][] = $row->watamu_marine;
		    $series20['data'][] = $row->hells_gate;
		    $series21['data'][] = $row->impala_sanctuary_kisumu;
		    $series22['data'][] = $row->mt_longonot;
		    $series23['data'][] = $row->other;
		    
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
			print json_encode($result, JSON_NUMERIC_CHECK);

    }

    //@Charles Ndirangu
    // gets tourism_visitors_to_museums
	public function get_tourism_visitors_to_museums(){
    		$data = DB::table('tourism_visitors_to_museums')->get();
    		 $year = array();
			$year['name'] = 'year';	 
					 
			$series1 = array();
			$series1['name'] = 'Nairobi Snake Park';
			
			$series2 = array();
			$series2['name'] = 'Fort Jesus';

			$series3 = array();
			$series3['name'] = 'Kisumu';

			$series4 = array();
			$series4['name'] = 'Kitale';
			$series5 = array();
			$series5['name'] = 'Gede';
			$series6 = array();
			$series6['name'] = 'Meru';
			$series7 = array();
			$series7['name'] = 'Lamu';
			$series8 = array();
			$series8['name'] = 'Jumba La Mtwana';
			$series9 = array();
			$series9['name'] = 'Kariandusi';
			$series10 = array();
			$series10['name'] = 'Hyrax Hill';
			$series11 = array();
			$series11['name'] = 'Karen Blixen';
			$series12 = array();
			$series12['name'] = 'Malindi';
			$series13 = array();
			$series13['name'] = 'Kilifi Mnarani';
			$series14 = array();
			$series14['name'] = 'Kabarnet';
			$series15 = array();
			$series15['name'] = 'Kapenguria';
			$series16 = array();
			$series16['name'] = 'Swahili House';
			$series17 = array();
			$series17['name'] = 'Narok';
			$series18 = array();
			$series18['name'] = 'German Post';
			
			$series19 = array();
			$series19['name'] = 'Takwa Ruins';

						
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->nairobi_snake_park;
			$series2['data'][] = $row->fort_jesus;
			$series3['data'][] = $row->kisumu;
			$series4['data'][] = $row->kitale;	
			$series5['data'][] = $row->gede;
			$series6['data'][] = $row->meru;
			$series7['data'][] = $row->lamu;				
			$series8['data'][] = $row->jumba_la_mtwana;
			$series9['data'][] = $row->kariandusi;
		    $series10['data'][] = $row->hyrax_hill;
		    $series11['data'][] = $row->karen_blixen;
		    $series12['data'][] = $row->malindi;
		    $series13['data'][] = $row->kilifi_mnarani;
		    $series14['data'][] = $row->kabarnet;
		    $series15['data'][] = $row->kapenguria;
		    $series16['data'][] = $row->swahili_house;
		    $series17['data'][] = $row->narok;
		    $series18['data'][] = $row->german_post;
		    $series19['data'][] = $row->takwa_ruins;
		   		    		    
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
		    print json_encode($result, JSON_NUMERIC_CHECK);

    }
}
