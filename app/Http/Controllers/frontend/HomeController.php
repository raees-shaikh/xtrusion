<?php

namespace App\Http\Controllers\frontend;

use App\Models\Data;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        // dd('dsfhusfh');
        $categories = Category::latest()->limit(9)->get();
        $categoriesCount = Category::count();
        $data = Data::where('name', 'Technical Data')->where('visibility', 1)->first();
        return view('frontend.index', compact('categories', 'categoriesCount', 'data'));
    }
}
