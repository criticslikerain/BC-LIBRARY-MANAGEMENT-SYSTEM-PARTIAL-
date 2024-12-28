<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class booksController extends Controller
{
    public function Books(){

        return view('admin.books');
    }
}
