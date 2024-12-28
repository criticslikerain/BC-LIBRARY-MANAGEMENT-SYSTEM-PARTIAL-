<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class booksManageController extends Controller
{
    public function booksManage(){

        return view ('admin.booksManage');
    }
}
