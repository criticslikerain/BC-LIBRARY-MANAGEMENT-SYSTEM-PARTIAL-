<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IssuedBooksEditController extends Controller
{
    public function edit($id)
    {
 
        $issuedBook = DB::table('issued_books')->find($id);
        
        if (!$issuedBook) {
            return redirect()->route('issuedBooks.index')->with('error', 'Issued Book not found.');
        }

        return view('admin.issuedBooks-edit', compact('issuedBook'));
    }


}