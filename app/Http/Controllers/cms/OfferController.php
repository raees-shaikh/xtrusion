<?php

namespace App\Http\Controllers\cms;

use App\Models\Offer;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{

    public function index()
    {
        $offers = Offer::latest()->paginate(10);
        return view('backend.offers.index', compact('offers'));
    }

    public function show($id)
    {
        $offer = Offer::findOrFail($id);
        return view('backend.offers.show', compact('offer'));
    }

    public function create()
    {
        $categories = Category::get();
        return view('backend.offers.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $category = Category::pluck('id')->toArray();

        $request->validate([
            'title' => 'required|max:150|min:3|string|unique:offers,title',
            'category_id' => ['required', Rule::in($category)],
            'body' => 'nullable|max:20000|min:3',
            'offer_image' => 'nullable|mimes:jpeg,png,jpg|max:1024',
        ]);

        $offer = new Offer;
        if ($request->hasFile('offer_image')) {
            $file = $request->file('offer_image');
            $destinationPath = storage_path('app/public/images/offers/');
            $filename = saveImage($file, $destinationPath);
            $offer->image = $filename;
        }
        $offer->category_id = $request->category_id;
        $offer->title = $request->title;
        $offer->slug = Str::slug($request->title);
        $offer->body = $request->body;
        if ($offer->save()) {
            return redirect()->route('cms.offer.index')->with(toast("Offer Added Successfully", 'success'));
        } else {
            return redirect()->back()->with([
                "message" => "Something went wrong",
                "alert-type" => "error"
            ]);
        }
    }

    public function edit($id)
    {
        $offer = Offer::findOrFail($id);
        $categories = Category::get();
        return view('backend.offers.edit', compact('offer', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::pluck('id')->toArray();
        $request->validate([
            'title' => 'required|max:150|min:3|string|unique:offers,title,' . $id,
            'category_id' => ['required', Rule::in($category)],
            'body' => 'nullable|min:3|max:20000',
            'offer_image' => 'nullable|mimes:jpeg,png,jpg|max:1024',
        ]);

        $offer = Offer::findOrFail($id);
    if ($request->hasFile('offer_image')) {
            if (!Storage::exists('images/offers/' . $offer->image)) {
                Storage::disk('public')->delete('images/offers/' . $offer->image);
            }
            $file = $request->file('offer_image');
            $destinationPath = storage_path('app/public/images/offers/');
            $filename = saveImage($file, $destinationPath);
            $offer->image = $filename;
        }
        $offer->category_id = $request->category_id;
        $offer->title = $request->title;
        $offer->slug = Str::slug($request->title);
        $offer->body = $request->body;
        if ($offer->save()) {
            return redirect()->route('cms.offer.index')->with(
                [
                    "message" => "Offer Updated Successfully",
                    "alert-type" => "success"
                ]
            );
        } else {
            return redirect()->back()->with([
                "message" => "Something went wrong",
                "alert-type" => "error"
            ]);
        }
    }

    public function delete($id)
    {
        $offer = Offer::findOrFail($id);
        optional(Storage::disk('public')->delete('images/offers/' . $offer->image));
        if ($offer->delete()) {
            return redirect()->route('cms.offer.index')->with(
                [
                    "message" => "Offer Deleted Successfully",
                    "alert-type" => "success"
                ]
            );
        } else {
            return redirect()->route('cms.offer.index')->with(
                [
                    "message" => "Something Went Wrong",
                    "alert-type" => "error"
                ]
            );
        }
    }
}
