<?php

namespace App\Http\Controllers\Forms\Agriculture;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Agriculture extends Controller
{
    //select all tables that are national

    public function national_tables(){
    	$data_national = DB::table('health_sectors')
               ->orderBy('coverage',  '=', 'ASC')
            	->where('sector_name',  '=', 'Agriculture')
                ->get();

        $data_county = DB::table('health_sectors')
               ->where('coverage',  '=', 'county')
            	->where('sector_name',  '=', 'Agriculture')
                ->get();

        return view('agriculture.agriculture_home',
        	        ['datasets' =>$data_national]

        	      );
    	
    }
}
