<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.index');
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        info($request->all());
        // $request->validate([
        //     'name' => 'required',
        //     'slug' => 'nullable',
        // ]);

        Category::create($request->all());

        return response()->json(['message' => 'Category created!']);
    }

    public function show($id)
    {
        $category = Category::find($id);
        return view('admin.categories.show', ['category' => $category]);
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', ['category' => $category]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();

        return redirect('admin/categories');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect('admin/categories');
    }
}
