<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class PageController extends Controller
{
    public function index()
    {
        return view('public.index');
    }

    public function about()
    {
        return view('public.about');
    }

    public function menu()
    {
        $categories = Category::with('items')->get();
        return view('public.menu', ['categories' => $categories]);
    }
}
