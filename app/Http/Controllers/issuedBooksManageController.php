<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class issuedBooksManageController extends Controller
{
    public function issuedBooksManagee(){

        return view('admin.issuedBooksManage');
    }
}
