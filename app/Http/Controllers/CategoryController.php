<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.categoryoverview', [
            'cats' => Category::all()
        ]);
    }

    public function create()
    {
        return view('admin/categoryadd');
    }

    public function store(Request $request)
    {
        // dd($request);
        $formFields = $request->validate([
            'category' => 'required',


        ]);



        Category::create($formFields);

        return redirect('admin/category')->with('message', 'Category created successfully!');
    }
}