<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoriesManageController extends Controller
{

    protected static $categories = [];
    public function CategoriesManage(){


        $categories = self::$categories; 

        return view('admin.categoriesManage', compact('categories'));

    }


    
}
