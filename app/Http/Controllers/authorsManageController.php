<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authorsManageController extends Controller
{
    public function authorsManage(){

        return view ('admin.authorsManage');
    }
}
