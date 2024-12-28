<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminDashboardController extends Controller
{
    
    function adminDasboardcontroller(){

        return view('admin.admin-dashboard');
    } 
}
