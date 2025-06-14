<?php

namespace App\Http\Controllers\cms;

use App\Models\Offer;
use App\Models\Category;
use App\Models\Exhibition;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatisticsController extends Controller
{
    public function index()
    {
        $categories = Category::count();
        $offers = Offer::count();
        $exhibitions = Exhibition::count();
        // return view('backend.statistics.index', compact('users', 'brand', 'category', 'subCategory', 'products', 'completedOrdersAmount'));
        return view('backend.statistics.index', compact('categories', 'offers', 'exhibitions'));
    }
}
