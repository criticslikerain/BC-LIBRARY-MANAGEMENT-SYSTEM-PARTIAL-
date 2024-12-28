<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class myProfileController extends Controller
{
    public function myProfile()
    {
   
        if (!Session::has('login') || !Session::get('login')) {
            return redirect()->route('login'); 
        }
        
        return view('account.myProfile');
    }
}
