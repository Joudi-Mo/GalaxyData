<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('/admin/category')->with('message', 'Category deleted succesfully');
    } 
}
