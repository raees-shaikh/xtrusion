<?php

namespace App\Http\Controllers\cms;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view('backend.categories.index', compact('categories'));
    }
    public function show($id)
    {
        $categories = Category::findOrFail($id);
        return view('backend.categories.show', compact('categories'));
    }
    public function create()
    {
        return view('backend.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:60|min:3|string|unique:categories,title',
        ]);
        $categories = new Category;
        $categories->title = $request->title;
        $categories->slug = Str::slug($request->title);

        if ($categories->save()) {
            return redirect()->route('cms.categories.index')->with(["message" => "Category Created", "alert-type" => "success"]);
        } else {
            return redirect()->back()->with(["message" => "Something went wrong", "alert-type" => "error"]);
        }
    }

    public function edit(Request $request, $id)
    {

        $categories = Category::findOrFail($id);
        return view('backend.categories.edit', compact('categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:60|min:3|string|unique:categories,title,' . $id,
        ]);
        $categories = Category::findOrFail($id);
        $categories->title = $request->title;
        $categories->slug = Str::slug($request->title);
        if ($categories->save()) {
            return redirect()->route('cms.categories.index')->with(
                [
                    "message" => "Category Updated",
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
        $latest_arrival = Category::findOrFail($id);
        if ($latest_arrival->offers()->exists()) {
            return redirect()->back()->with(['alert-type' => 'info', 'message' => 'Offer is present']);
        };
        if ($latest_arrival->delete()) {
            return redirect()->route('cms.categories.index')->with(
                [
                    "message" => "Category Deleted",
                    "alert-type" => "success"
                ]
            );
        } else {
            return redirect()->route('cms.categories.index')->with(
                [
                    "message" => "Something Went Wrong",
                    "alert-type" => "error"
                ]
            );
        }
    }
}
