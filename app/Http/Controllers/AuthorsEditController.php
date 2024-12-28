<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorsEditController extends Controller
{
    public function edit($id)
    {
     
        $author = DB::table('authors')->find($id);
        
        if (!$author) {
            return redirect()->route('authors.index')->with('error', 'Author not found.');
        }

        return view('admin.authors-edit', compact('author'));
    }

}
