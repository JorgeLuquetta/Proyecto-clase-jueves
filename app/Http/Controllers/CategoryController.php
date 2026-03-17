<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        Category::create(['name' => $request->name]);
        return redirect('/admin');
    }

    public function update (Request $request, Category $category)
    {
        $category->update(['name' => $request->name]);
        return redirect('/admin');
    }

    public function destroy (Category $category)
    {
        $category->delete();
        return redirect('/admin');
    }
}
