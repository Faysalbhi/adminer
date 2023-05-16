<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminerController extends Controller
{
    public function index(){
        $alldb=DB::select('SHOW DATABASES');
        // dd($alldb);
        return view('database.index',compact('alldb'));
    }
    
    public function dbDestroy(){
        echo "keno Delete korben";
    }

    public function tableDetails($dbname){
        $tables=DB::select("select * from information_schema.tables where table_schema='$dbname'");
        $total_table=count($tables);
        // dd($tables);
        return view('database.table',compact('tables','total_table'));
    }
}
