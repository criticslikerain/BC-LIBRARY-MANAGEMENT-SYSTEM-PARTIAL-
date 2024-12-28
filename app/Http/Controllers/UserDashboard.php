<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class UserDashboard extends Controller
{
    public function User_Dashboard(){


        if (!Session::has('login') || !Session::get('login')) {
            return redirect()->route('login'); // Redirect to login if not logged in
        }
        
        return view ('auth.user_dashboard');
    }
}
