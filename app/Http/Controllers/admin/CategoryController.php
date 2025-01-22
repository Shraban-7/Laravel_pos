<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);
        return view('admin.category.index',compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:categories,name'
        ]);

        $slug = Str::slug($request->name);

        Category::create([
            'name' => $request->name,
            'slug' => $slug
        ]);

        return redirect()->back()->with('success','Category Create Successfully');
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|unique:categories,name'
        ]);

        $slug = Str::slug($request->name);

        $category->update([
            'name' => $request->name,
            'slug' => $slug
        ]);

        return redirect()->back()->with('success', 'Category Update Successfully');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with('success', 'Category Delete Successfully');
    }
}
