<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class changePasswordController extends Controller
{
    

    public function changePassword(){

        return view ('account.changePassword');
    }
}
