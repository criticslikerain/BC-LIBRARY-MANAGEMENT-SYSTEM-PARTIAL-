<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class adminLoginController extends Controller
{
    
    public function AdminLogin()
    {
        return view('admin.admin-login');
    }

   
    public function adminLoginSubmit(Request $request)
    {
        $request->validate([
            'admin' => 'required|in:admin', 
            'password' => 'required|min:6|max:25', 
        ]);

        $adminUsername = 'admin';
        $adminPassword = 'admin123';

        $username = $request->input('admin');
        $password = $request->input('password');

       
        if ($username === $adminUsername && $password === $adminPassword) {
     
            Session::put('admin', true);
            return redirect()->route('AdminDashboard');
        }

        return back()->with('error', 'Invalid Admin Credentials.');
    }
}
