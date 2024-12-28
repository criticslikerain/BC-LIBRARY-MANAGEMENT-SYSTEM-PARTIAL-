<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  

class AdminController extends Controller
{
    public function dashboard()
    {
 
        $listdbooks = DB::table('tblbooks')->count();
        $regstds = DB::table('tblstudents')->count();
        $listdathrs = DB::table('tblauthors')->count();
        $listdcats = DB::table('tblcategory')->count();
        $issuedbooks = DB::table('tblissuedbookdetails')->count();
        $returnedbooks = DB::table('tblissuedbookdetails')
        ->where('RetrunStatus', 1)
        ->count();


        return view('admin.admin-dashboard', compact('listdbooks', 
        'regstds',
         'listdathrs', 
         'listdcats', 
         'issuedbooks',
         'returnedbooks'
        ));
    }

}
