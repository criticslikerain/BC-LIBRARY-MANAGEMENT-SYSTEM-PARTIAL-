<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksEditController extends Controller
{
    public function edit($id)
    {

        $book = DB::table('books')->find($id);
        
        if (!$book) {
            return redirect()->route('books.index')->with('error', 'Book not found.');
        }

        return view('admin.books-edit', compact('book'));
    }

   
}
