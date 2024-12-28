<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function Authors(){

        return view ('admin.Authors');
    }
}
