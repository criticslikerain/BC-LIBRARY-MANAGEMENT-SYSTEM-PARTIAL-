<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class issuedBooksController extends Controller
{
        public function issuedBooks(){

            return view ('admin.issuedBooks');
        }
}
