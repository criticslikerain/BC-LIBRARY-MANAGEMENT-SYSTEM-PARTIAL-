<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesEditController extends Controller
{
    public function edit($id)
    {
       
        $category = DB::table('tblcategory')->find($id);
        
        if (!$category) {
            return redirect()->route('categories.index')->with('error', 'Category not found.');
        }

        return view('admin.categories-edit', compact('category'));
    }

}
