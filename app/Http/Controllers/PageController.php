<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;

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

    public function reservation()
    {
        return view('public.reservation');
    }

    public function catering()
    {
        $events = Event::select('name', 'slug')->get();
        return view('public.catering', ['events' => $events]);
    }
}
