<?php

namespace App\Http\Controllers\frontend;

use App\Models\Exhibition;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExhibitionController extends Controller
{
    public function index()
    {
        $exhibitions = Exhibition::latest()->paginate(12);
        return view('frontend.exhibitions.index', compact('exhibitions'));
    }

    public function show($exhibitionSlug)
    {
        $exhibition = Exhibition::where('slug', $exhibitionSlug)->firstOrFail();
        $medias = $exhibition->medias()->latest()->get();
        return view('frontend.exhibitions.show', compact('exhibition', 'medias'));
    }
}
