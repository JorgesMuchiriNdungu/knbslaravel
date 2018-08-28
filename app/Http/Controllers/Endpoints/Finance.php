<?php

namespace App\Http\Controllers\Endpoints;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Finance extends Controller
{
    


   // @George Muchiri 
   // get finance_cdf_allocation_by_constituency

    public function get_finance_cdf_allocation_by_constituency(){
    
        
           $data= DB::table('finance_cdf_allocation_by_constituency')->join('health_counties','finance_cdf_allocation_by_constituency.county_id', '=', 'health_counties.county_id')->join('health_subcounty',
            'finance_cdf_allocation_by_constituency.subcounty_id', '=', 'health_subcounty.subcounty_id')->get();

     
				 
		
			 
		    $county = array();
			$county['name'] = 'County';


			$subcounty = array();
			$subcounty['name'] = 'Sub County';
			
			$series2 = array();
			$series2['name'] = 'CDF Amount';


			$series3 = array();
			$series3['name'] = 'Year';
       
			foreach ($data as $row)
			{
		
		    $county['data'][] = $row->county_name;
		    $subcounty['data'][] = $row->subcounty_name;
            $series2['data'][] = $row->cdf_amount;
			$series3['data'][] = $row->year;
		
						
			}
			 
			$result = array();
		
			array_push($result,$county);
			array_push($result,$subcounty);
			array_push($result,$series2);
			array_push($result,$series3);
		
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }
 
     // @George Muchiri 
     // get finance_classification_national_government_expenditure_function

    public function get_finance_classification_national_government_expenditure_function(){
    
           $data= DB::table('finance_classification_national_government_expenditure_function')->get();

		

			$series1 = array();
			$series1['name'] = 'Government Function';

           	$series2 = array();
			$series2['name'] = 'Recurrent Account in Millions';

	        $series3= array();
			$series3['name'] = 'Developement Account in Millions';

        	$series4= array();
            $series4['name'] = 'Total in Millions';

            $series5 = array();
			$series5['name'] = 'Year';
    	  
	     
			 
			foreach ($data as $row)
			{
			$series1['data'][] = $row->government_function;
			$series2['data'][] = $row->recurrent_account_in_millions;
	        $series3['data'][] = $row->development_account_in_millions;
			$series4['data'][] = $row->total_in_millions;
			$series5['data'][] = $row->year;
						
			}
			 
			$result = array();
	
	        array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
		
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 

     // @George Muchiri 
     // get finance_county_budget_allocation

    public function get_finance_county_budget_allocation(){
    
           $data= DB::table('finance_county_budget_allocation')->join('health_counties', 'finance_county_budget_allocation.county_id', '=', 'health_counties.county_id')
               ->get();

		

			$series1 = array();
			$series1['name'] = 'County';

           	$series2 = array();
			$series2['name'] = 'Recurrent ';

	        $series3= array();
			$series3['name'] = 'Developement ';

        	$series4= array();
            $series4['name'] = 'Total Alllocation';

            $series5 = array();
			$series5['name'] = 'Year';
    	  
	     
			 
			foreach ($data as $row)
			{
			$series1['data'][] = $row->county_name;
			$series2['data'][] = $row->recurrent;
	        $series3['data'][] = $row->development;
			$series4['data'][] = $row->total_allocation;
			$series5['data'][] = $row->year;
						
			}
			 
			$result = array();
	
	        array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
		
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 


     // @George Muchiri 
     // get finance_county_expenditure

    public function get_finance_county_expenditure(){
    
           $data= DB::table('finance_county_expenditure')->join('health_counties',
            'finance_county_expenditure.county_id', '=', 'health_counties.county_id')
               ->get();

		

			$series1 = array();
			$series1['name'] = 'County';

           	$series2 = array();
			$series2['name'] = 'Compensation Employees ';

	        $series3= array();
			$series3['name'] = 'Goods & Services';

        	$series4= array();
            $series4['name'] = 'Subsidies';

            $series5 = array();
			$series5['name'] = 'Grants International Organisation';
    	  
	        $series6 = array();
			$series6['name'] = 'Grants Government Units';


		    $series7 = array();
			$series7['name'] = 'Other Grants';

			$series8 = array();
			$series8['name'] = 'Capital Grants';


			$series9 = array();
			$series9['name'] = 'Social Benefits';

			$series10 = array();
			$series10['name'] = 'Other Expense';

			$series11 = array();
			$series11['name'] = 'Building Structures';
			 
			$series12 = array();
			$series12['name'] = 'Plant machinery equipment';
			 
			$series13 = array();
			$series13['name'] = 'Inventories';
			 
			$series14 = array();
			$series14['name'] = 'Other Assets';
			 
			$series15 = array();
			$series15['name'] = 'Acquisition Financial Assets';
			 
			$series16 = array();
			$series16['name'] = 'Interest Debt';
			
			$series17 = array();
			$series17['name'] = 'Total Expenditure';

			$series18 = array();
			$series18['name'] = 'Year';
			 
			foreach ($data as $row)
			{
			$series1['data'][] = $row->county_name;
			$series2['data'][] = $row->compensation_employees;
	        $series3['data'][] = $row->goods_services;
			$series4['data'][] = $row->subsidies;
			$series5['data'][] = $row->grants_internationalorganisation;
			$series6['data'][] = $row->grants_governmentunits;
			$series7['data'][] = $row->othergrants;
			$series8['data'][] = $row->capitalgrants;
			$series9['data'][] = $row->socialbenefits;
			$series10['data'][] = $row->otherexpense;
			$series11['data'][] = $row->buildingstructures;
			$series12['data'][] = $row->plantmachinery_equipment;
			$series13['data'][] = $row->inventories;
			$series14['data'][] = $row->otherassets;
			$series15['data'][] = $row->acquisition_financialassets;	
			$series16['data'][] = $row->interest_debt;		
			$series17['data'][] = $row->total_expenditure;
		    $series18['data'][] = $row->year;				
			}
			 
			$result = array();
	
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

					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 
     // @George Muchiri 
     // get finance_county_revenue

    public function get_finance_county_revenue(){
    
           $data= DB::table('finance_county_revenue')->join('health_counties', 'finance_county_revenue.county_id', '=', 'health_counties.county_id')
               ->get();

		

			$series1 = array();
			$series1['name'] = 'County';

           	$series2 = array();
			$series2['name'] = 'Revenue Estimates ';

	        $series3= array();
			$series3['name'] = 'Conditional Grant';

        	$series4= array();
            $series4['name'] = 'Equitable Share';

            $series5= array();
            $series5['name'] = 'Total Revenue';

            $series6 = array();
			$series6['name'] = 'Year';
    	  
	     
			 
			foreach ($data as $row)
			{
			$series1['data'][] = $row->county_name;
			$series2['data'][] = $row->revenue_estimates;
	        $series3['data'][] = $row->conditional_grant;
	        $series3['data'][] = $row->equitable_share;
			$series4['data'][] = $row->total_revenue;
			$series6['data'][] = $row->year;
						
			}
			 
			$result = array();
	
	        array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
		    array_push($result,$series6);
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 

     // @George Muchiri 
     // get finance_economic_analysis_of_national_government_expenditure

    public function get_finance_economic_analysis_of_national_government_expenditure(){
    
           $data= DB::table('finance_economic_analysis_of_national_government_expenditure')->get();

		

			$series1 = array();
			$series1['name'] = 'Expenditure';

           	$series2 = array();
			$series2['name'] = 'Amount in Millions';

            $series3 = array();
			$series3['name'] = 'Year';
    	  
	     
			 
			foreach ($data as $row)
			{
			$series1['data'][] = $row->expenditure;
			$series2['data'][] = $row->amount_in_millions;
	        $series3['data'][] = $row->year;
						
			}
			 
			$result = array();
	
	        array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
		
		
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 


      // @George Muchiri 
     // get finance_economic_classification_of_county_government_expenditure

    public function get_finance_economic_classification_of_county_government_expenditure(){
    
           $data= DB::table(
           	'finance_economic_classification_of_county_government_expenditure')->get();

		

			$series1 = array();
			$series1['name'] = 'County Government Expenditure';

           	$series2 = array();
			$series2['name'] = 'Amount in Millions';

            $series3 = array();
			$series3['name'] = 'Year';
    	  
	     
			 
			foreach ($data as $row)
			{
			$series1['data'][] = $row->county_government_expenditure;
			$series2['data'][] = $row->amount_in_millions;
	        $series3['data'][] = $row->year;
						
			}
			 
			$result = array();
	
	        array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
		
		
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 

     // @George Muchiri 
     // get finance_economic_classification_revenue

    public function get_finance_economic_classification_revenue(){
    
           $data= DB::table('finance_economic_classification_revenue')
               ->get();

		

			$series1 = array();
			$series1['name'] = 'Taxes Income Profits Capital Gains';

           	$series2 = array();
			$series2['name'] = 'Taxes Property';

	        $series3= array();
			$series3['name'] = 'Taxes Vat';

        	$series4= array();
            $series4['name'] = 'Taxes other goods and services';

            $series5 = array();
			$series5['name'] = 'Taxes International Trade Transactions';
    	  
	        $series6 = array();
			$series6['name'] = 'Other Taxes not elsewhere classified';


		    $series7 = array();
			$series7['name'] = 'Total Tax Revenue';

			$series8 = array();
			$series8['name'] = 'Social Security Contributions';


			$series9 = array();
			$series9['name'] = 'Property Income';

			$series10 = array();
			$series10['name'] = 'Sale goods and Services';

			$series11 = array();
			$series11['name'] = 'Fines Penalties and Forfeitures';
			 
			$series12 = array();
			$series12['name'] = 'Repayments Domestic Lending';
			 
			$series13 = array();
			$series13['name'] = 'Other Receipts not elsewhere classified';
			 
			$series14 = array();
			$series14['name'] = 'Total non tax revenue';
	
			 
			$series15 = array();
			$series15['name'] = 'Total';
			

			$series16 = array();
			$series16['name'] = 'Year';
			 
			foreach ($data as $row)
			{
			$series1['data'][] = $row->taxes_income_profits_capitalgains;
			$series2['data'][] = $row->taxes_property;
	        $series3['data'][] = $row->taxes_vat;
			$series4['data'][] = $row->taxes_othergoodsandservices;
			$series5['data'][] = $row->taxes_internationaltrade_transactions;
			$series6['data'][] = $row->other_taxes_notelsewhereclasified;
			$series7['data'][] = $row->totaltax_revenue;
			$series8['data'][] = $row->socialsecuritycontributions;
			$series9['data'][] = $row->property_income;
			$series10['data'][] = $row->sale_goodsandservices;
			$series11['data'][] = $row->fines_penaltiesandforfeitures;
			$series12['data'][] = $row->repayments_domesticlending;
			$series13['data'][] = $row->other_receiptsnotelsewhereclassified;
			$series14['data'][] = $row->total_nontax_revenue;
	        $series15['data'][] = $row->total;		
		    $series16['data'][] = $row->year;				
			}
			 
			$result = array();
	
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
		


					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 



      // @George Muchiri 
     // get finance_excise_revenue_commodity

     public function get_finance_excise_revenue_commodity(){
    
           $data= DB::table('finance_excise_revenue_commodity')->get();

		

			$series1 = array();
			$series1['name'] = 'Year';

           	$series2 = array();
			$series2['name'] = 'Beer';

            $series3 = array();
			$series3['name'] = 'Cigarettes';

    	  	$series4 = array();
			$series4['name'] = 'Mineral Waters';

           	$series5 = array();
			$series5['name'] = 'Wines & Spirits';

            $series6 = array();
			$series6['name'] = 'Other Commodities';

	        $series7 = array();
			$series7['name'] = 'Total';
			 
			foreach ($data as $row)
			{
			$series1['data'][] = $row->year;
			$series2['data'][] = $row->beer;
	        $series3['data'][] = $row->cigarettes;
			$series4['data'][] = $row->mineral_waters;
			$series5['data'][] = $row->wines_spirits;
	        $series6['data'][] = $row->other_commodities;		
	        $series7['data'][] = $row->total;		
			}
			 
			$result = array();
	
	        array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
		    array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 


      // @George Muchiri 
     // get finance_expenditure_functions_county_governments

     public function get_finance_expenditure_functions_county_governments(){
    
           $data= DB::table('finance_expenditure_functions_county_governments')->get();

		

			$series1 = array();
			$series1['name'] = 'General Public Services';

           	$series2 = array();
			$series2['name'] = 'General Economic Affairs';

            $series3 = array();
			$series3['name'] = 'Economic Affairs Agriculture';

    	  	$series4 = array();
			$series4['name'] = 'Economic Affairs Transport';

           	$series5 = array();
			$series5['name'] = 'Other Economic Affairs';

            $series6 = array();
			$series6['name'] = 'Environmental Protection';

	        $series7 = array();
			$series7['name'] = 'Housing Community Ammenities';

			$series8 = array();
			$series8['name'] = 'Health';
			
			$series9 = array();
			$series9['name'] = 'Recreation, culture & religion';
			

			$series10 = array();
			$series10['name'] = 'Education';
			
			$series11= array();
			$series11['name'] = 'Social Protection';
		    
		    $series12 = array();
			$series12['name'] = 'Total';
			
			$series13 = array();
			$series13['name'] = 'Year';
			foreach ($data as $row)
			{
			$series1['data'][] = $row->general_public_services;
			$series2['data'][] = $row->general_economic_affairs;
	        $series3['data'][] = $row->economic_affairs_agriculture;
			$series4['data'][] = $row->economic_affairs_transport;
			$series5['data'][] = $row->other_economic_affairs;
	        $series6['data'][] = $row->environmental_protection;		
	        $series7['data'][] = $row->housing_community_ammenities		;	
	        $series8['data'][] = $row->health;
	        $series9['data'][] = $row->recreation_culture_religion	;	
	        $series10['data'][] = $row->education	;
	        $series11['data'][] = $row->social_protection;
	        $series12['data'][] = $row->total;
	        $series13['data'][] = $row->year;
			}
			 
			$result = array();
	
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
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 
 
     // @George Muchiri 
     // get finance_money_banking_index

    public function get_finance_money_banking_index(){
    
           $data= DB::table('finance_money_banking_index')->get();
		
		    $series1 = array();
			$series1['name'] = 'Financial Institution ';

	
			foreach ($data as $row)
			{
			$series1['data'][] = $row->financial_institution;
			
		
						
			}
			 
			$result = array();
	
	        array_push($result,$series1);
			
		
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 

 
     // @George Muchiri 
     // get finance_money_banking_institutions

    public function get_finance_money_banking_institutions(){
    
   $data= DB::table('finance_money_banking_institutions')
              ->join('health_counties','finance_money_banking_institutions.county_id', '=', 'health_counties.county_id')
              ->join('health_subcounty',
                     'finance_money_banking_institutions.subcounty_id', '=', 
                     'health_subcounty.subcounty_id')
              ->join('finance_money_banking_index',
                     'finance_money_banking_institutions.institution_id', '=',
                     'finance_money_banking_index.institution_id')->get();

              

            $series = array();
			$series['name'] = 'Institution ';

		    $series1 = array();
			$series1['name'] = 'County Name ';

			$series2 = array();
			$series2['name'] = 'Sub County Name ';

			$series3 = array();
			$series3['name'] = 'Number ';





	
			foreach ($data as $row)
			{
			$series['data'][] = $row->financial_institution;
			$series1['data'][] = $row->county_name;
		    $series2['data'][] = $row->subcounty_name;
		    $series3['data'][] = $row->number;
			
		
						
			}
			 
			$result = array();
	
	        array_push($result,$series);
	        array_push($result,$series1);
	        array_push($result,$series2);
	        array_push($result,$series3);
			
		
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 



      // @George Muchiri 
     // get finance_national_government_expenditure

    public function get_finance_national_government_expenditure(){
    
           $data= DB::table('finance_national_government_expenditure')->get();

		
			$year = array();
			$year['name'] = 'Year';

			$series = array();
			$series['name'] = 'Acquisition Non Financial Assets';
			 
			$finance = array();
			$finance['name'] = 'Acquisition Financial Assets';


			$series1 = array();
			$series1['name'] = 'Loan Repayments';


           	$series2 = array();
			$series2['name'] = 'Compensation Employees ';

	        $series3= array();
			$series3['name'] = 'Goods & Services';

        	$series4= array();
            $series4['name'] = 'Subsidies';

            $series5 = array();
			$series5['name'] = 'Interests';
    	  
	        $series6 = array();
			$series6['name'] = 'Grants';


		    $series7 = array();
			$series7['name'] = 'Other Expenses';

			$series8 = array();
			$series8['name'] = 'Social Benefits';

			$series9 = array();
			$series9['name'] = 'Capital Grants';


			$series10 = array();
			$series10['name'] = 'Total';

		
			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series['data'][] = $row->acquisition_nonfinancial_assets;	
			$finance['data'][] = $row->acquisition_financial_assets;
			$series1['data'][] = $row->loans_repayments;
			$series2['data'][] = $row->compensation_employees;
	        $series3['data'][] = $row->goods_services;
			$series4['data'][] = $row->subsidies;
			$series5['data'][] = $row->interest;
			$series6['data'][] = $row->grants;
			$series7['data'][] = $row->other_expense;
			$series8['data'][] = $row->social_benefits;
			$series9['data'][] = $row->capital_grants;
		 	$series10['data'][] = $row->total;

		  			
			}
			 
			$result = array();
	        array_push($result,$year);
	        array_push($result,$series);
	        array_push($result,$finance);
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
		

					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }
     // @George Muchiri 
     // get finance_national_government_expenditure_purpose

    public function get_finance_national_government_expenditure_purpose(){
    
           $data= DB::table('finance_national_government_expenditure_purpose')->get();

		
			$year = array();
			$year['name'] = 'Year';

		
    	  
	        $series = array();
			$series['name'] = 'General Public Services';


			$series1 = array();
			$series1['name'] = 'Public debt Transactions';

			$series2 = array();
			$series2['name'] = 'Transfers';


			$series3 = array();
			$series3['name'] = 'Defense';

		

			$series4 = array();
			$series4['name'] = 'Order Safety';


			$series5 = array();
			$series5['name'] = 'Economic Commercial Labor';


			$series6 = array();
			$series6['name'] = 'Agriculture';


			$series7 = array();
			$series7['name'] = 'Fuel Energy';


			$series8 = array();
			$series8['name'] = 'Mining,Manufacturing & Construction';

			$series9 = array();
			$series9['name'] = 'Transport';


			$series10 = array();
			$series10['name'] = 'Communication';

			$series11= array();
			$series11['name'] = 'Other Industries';
			 
			$series12= array();
			$series12['name'] = 'Environmental Protection';


			$series13 = array();
			$series13['name'] = 'Housing Community Amenities';


           	$series14 = array();
			$series14['name'] = 'Health ';

	        $series15= array();
			$series15['name'] = 'Recreation,culture & religion';

        	$series16= array();
            $series16['name'] = 'Education';

            $series17= array();
			$series17['name'] = 'Social Protection';
			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series['data'][] = $row->general_publicservices;	
			
			$series1['data'][] = $row->public_debttransactions;
			$series2['data'][] = $row->transfers;
	        $series3['data'][] = $row->defense;
			$series4['data'][] = $row->order_safety;
			$series5['data'][] = $row->economic_commercial_labor;
			$series6['data'][] = $row->agriculture;
			$series7['data'][] = $row->fuel_energy;
			$series8['data'][] = $row->mining_manufacturing_construction;
			$series9['data'][] = $row->transport;
		 	$series10['data'][] = $row->communication;
			$series11['data'][] = $row->other_industries;
			$series12['data'][] = $row->environmental_protection;
			$series13['data'][] = $row->housing_communityamenities;
		 	$series14['data'][] = $row->health;
		 	$series15['data'][] = $row->recreation_culture_religion;
		 	$series16['data'][] = $row->education;
		 	$series17['data'][] = $row->socialprotection;
		 
		  			
			}
			 
			$result = array();
	        array_push($result,$year);
	        array_push($result,$series);
	    
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

					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }


     // @George Muchiri 
     // get  finance_outstanding_debt_international_organization

    public function get_finance_outstanding_debt_international_organization(){
    
   $data= DB::table('finance_outstanding_debt_international_organization')->get();

            $year = array();
			$year['name'] = 'Year';

            $series = array();
			$series['name'] = 'IDA ';

		    $series1 = array();
			$series1['name'] = 'Eec eib ';

			$series2 = array();
			$series2['name'] = 'IMF';

			$series3 = array();
			$series3['name'] = 'Adf_adb';

	        $series4 = array();
			$series4['name'] = 'Commercial Banks';

            $series5 = array();
			$series5['name'] = 'Others';


			foreach ($data as $row)
			{
		    $year['data'][] = $row->year;
			$series['data'][] = $row->ida;
			$series1['data'][] = $row->eec_eib;
		    $series2['data'][] = $row->imf;
		    $series3['data'][] = $row->adf_adb;
			$series4['data'][] = $row->commercial_banks;
		    $series5['data'][] = $row->others;
		    $year['data'][] = $row->year;
						
			}
			 
			$result = array();
		    array_push($result,$year);
	        array_push($result,$series);
	        array_push($result,$series1);
	        array_push($result,$series2);
	        array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
		
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }
 
     // @George Muchiri 
     // get finance_outstanding_debt_lending_country

    public function get_finance_outstanding_debt_lending_country(){
    
   $data= DB::table('finance_outstanding_debt_lending_country')->get();

            $year = array();
			$year['name'] = 'Year';

            $series = array();
			$series['name'] = 'Germany ';

		    $series1 = array();
			$series1['name'] = 'Japan ';

			$series2 = array();
			$series2['name'] = 'France';

			$series3 = array();
			$series3['name'] = 'USA';

	        $series4 = array();
			$series4['name'] = 'Netherlands';

            $series5 = array();
			$series5['name'] = 'Denmark';
            
            $series6 = array();
			$series6['name'] = 'Finland';
			
			$series7 = array();
			$series7['name'] = 'China';
			
			$series8= array();
			$series8['name'] = 'Belgium';

            $series9 = array();
			$series9['name'] = 'Other';
			foreach ($data as $row)
			{
		    $year['data'][] = $row->year;
			$series['data'][] = $row->germany;
			$series1['data'][] = $row->japan;
		    $series2['data'][] = $row->france;
		    $series3['data'][] = $row->usa;
			$series4['data'][] = $row->netherlands;
			$series5['data'][] = $row->denmark;
			$series6['data'][] = $row->finland;
			$series7['data'][] = $row->china;
		    $series8['data'][] = $row->belgium;
		    $series9['data'][] = $row->other;
		    $year['data'][] = $row->year;
						
			}
			 
			$result = array();
		    array_push($result,$year);
	        array_push($result,$series);
	        array_push($result,$series1);
	        array_push($result,$series2);
	        array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
		    array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$series8);
			array_push($result,$series9);		
			print json_encode($result, JSON_NUMERIC_CHECK);


    }





     // @George Muchiri 
     // get finance_statement_of_national_government_operations

    public function get_finance_statement_of_national_government_operations(){
    
           $data= DB::table('finance_statement_of_national_government_operations')->get();

		    $series = array();
			$series['name'] = 'Year';
    	  

			$series1 = array();
			$series1['name'] = 'National Government Operation';

           	$series2 = array();
			$series2['name'] = 'Amount in Millions';

         
	     
			 
			foreach ($data as $row)
			{
			$series['data'][] = $row->year;
			$series1['data'][] = $row->national_government_operation;
			$series2['data'][] = $row->amount_in_millions;
	       
						
			}
			 
			$result = array();
			array_push($result,$series);
	        array_push($result,$series1);
			array_push($result,$series2);
		
		
		
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 

}
