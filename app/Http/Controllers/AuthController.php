<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');  
    }

    public function login(Request $request)
    {
        $request->validate([
            'StudentId' => 'required|regex:/^\d{4}-\d{5}$/',
            'password' => 'required|min:6|max:25',
        ]);

        $studentId = $request->input('StudentId');
        $password = $request->input('password');

       
        $student1Id = '2022-00143';
        $student1Password = 'test123';
        $student1Details = [
            'stid' => '2022-00143',
            'name' => 'Nathaniel Inocando',
            'email' => 'humsilkysweet@gmail.com',
            'contactNo' => '+63 9690446511',
            'registrationDate' => '4/12/2022',
            'profileStatus' => 'Active'
        ];

  
        $student2Id = '2022-00183';
        $student2Password = 'test123';
        $student2Details = [
            'stid' => '2022-00183',
            'name' => 'Aleson Irag',
            'email' => 'Alesonirag@gmail.com',
            'contactNo' => '+63 1234567890',
            'registrationDate' => '12/12/2022',
            'profileStatus' => 'Active'
        ];

      
        if ($studentId === $student1Id && $password === $student1Password) {
          
            Session::put('studentId', $student1Id);
            Session::put('login', true);
            Session::put('studentDetails', $student1Details); 

            return redirect()->route('UserDashboard');
        }

        if ($studentId === $student2Id && $password === $student2Password) {
  
            Session::put('studentId', $student2Id);
            Session::put('login', true);
            Session::put('studentDetails', $student2Details); 

            return redirect()->route('UserDashboard');
        }

        return back()->with('error', 'Invalid Student ID or Password.');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login');
    }
}
