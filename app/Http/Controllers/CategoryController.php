<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function add() {
        return view('addCategory');
    }

    function add1(Request $request) {
        $request->validate([
            'Name' => ['required']
        ]);

        Category::create([
            'Name' => $request->Name
        ]);

        return redirect('/product');
    }
}
