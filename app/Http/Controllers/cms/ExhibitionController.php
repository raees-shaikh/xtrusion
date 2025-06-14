<?php

namespace App\Http\Controllers\cms;

use App\Models\Media;
use App\Models\Exhibition;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ExhibitionController extends Controller
{
    public function index()
    {
        $exhibitions = Exhibition::latest()->paginate(10);
        return view('backend.exhibition.index', compact('exhibitions'));
    }


    public function create()
    {
        return view('backend.exhibition.create');
    }

    public function show($id)
    {
        $exhibition = Exhibition::findOrFail($id);
        return view('backend.exhibition.show', compact('exhibition'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3|max:120|unique:exhibitions,title',
            'image' => 'required|mimes:jpeg,png,jpg|max:1024',
            'descriptions' => 'nullable|min:10|max:20000',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);
        $exhibition = new Exhibition();
        $file = $request->file('image');
        if ($file) {
            $destinationPath = "/images/exhibition/";
            $filename = uploadFile($file, $destinationPath, null, null, 85);
            $exhibition->image = $filename['filename'];
        }

        $exhibition->title = $request->title;
        $exhibition->slug = Str::slug($request->title);
        $exhibition->descriptions = $request->descriptions;
        $exhibition->start_date = $request->start_date;
        $exhibition->end_date = $request->end_date;
        if ($exhibition->save()) {
            return redirect()->route('cms.exhibition.index')->with(['alert-type' => 'success', 'message' => 'Exhibition Created Successfully']);
        }
        return redirect()->back()->with(['alert-type' => 'error', 'message' => 'Something Went Wrong']);
    }


    public function edit($id)
    {
        $exhibition = Exhibition::findOrFail($id);
        return view('backend.exhibition.edit', compact('exhibition'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:3|max:120|unique:exhibitions,title,' . $id,
            'image' => 'nullable|mimes:jpeg,png,jpg|max:1024',
            'descriptions' => 'nullable|min:10|max:20000',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        $exhibition = Exhibition::findOrFail($id);
        if ($request->has('image')) {
            $file = $request->file('image');    
            $destinationPath = "/images/exhibition/";
            $filename = uploadFile($file, $destinationPath, null, null, 85);
            if ($exhibition->image) {
                Storage::disk('public')->delete('images/exhibition/' . $exhibition->image);
            }
            $exhibition->image = $filename['filename'];
        }
        $exhibition->title = $request->title;
        $exhibition->slug = Str::slug($request->title);
        $exhibition->descriptions = $request->descriptions;
        $exhibition->start_date = $request->start_date;
        $exhibition->end_date = $request->end_date;
        if ($exhibition->save()) {
            return redirect()->route('cms.exhibition.index')->with(['alert-type' => 'success', 'message' => 'Exhibition Updated Successfully']);
        }
        return redirect()->back()->with(['alert-type' => 'error', 'message' => 'Something Went Wrong']);
    }

    public function delete($id)
    {
        $exhibition = Exhibition::findOrFail($id);
        $medias = $exhibition->medias()->get();
        // @dd($media);
        foreach ($medias as $media) {
            if ($media->filename) {
                Storage::disk('public')->delete('images/exhibition/' . $media->filename);
            }
            $media->delete();
        }
        if ($exhibition->delete() && Storage::disk('public')->delete('images/exhibition/' . $exhibition->image)) {
            return redirect()->route('cms.exhibition.index')->with(['alert-type' => 'success', 'message' => 'Exhibition Deleted Successfully']);
        }
        return redirect()->back()->with(['alert-type' => 'error', 'message' => 'Something Went Wrong']);
    }

    public function indexMedia($id)
    {
        $exhibitions = Exhibition::findOrFail($id);
        $medias = $exhibitions->medias()->latest()->paginate(10);
        return view('backend.exhibition_section.index', compact('medias', 'exhibitions'));
    }

    public function createMedia($id)
    {
        $exhibition = Exhibition::findOrFail($id);
        return view('backend.exhibition_section.create', compact('exhibition'));
    }

    public function storeMedia(Request $request, $id)
    {
        //dd($request);
        $request->validate(
            [
                'image' => 'required|max:20',
                'image.*' => 'mimes:png,jpg,jpeg|max:1024',
            ],
            ['image.*.*' => 'Max 20 file, Max File Size: 1MB, File Type -png,jpg,jpeg.']
        );
        $exhibition = Exhibition::findOrFail($id);
        $mediasCount = $exhibition->medias()->latest()->count();
        if ($mediasCount + count($request->image) > 20) {
            return redirect()->back()->with(['alert-type' => 'info', 'message' => 'Maximum 20 Images allowed in gallery.']);
        }
        $files = $request->file('image');
        foreach ($files as $file) {
            $file_details = uploadFile($file, 'images/medias', null, null, 85);
            $media = new Media();
            $media->name = 'Gallery';
            $media->model_id = $exhibition->id;
            $media->model_type = Exhibition::class;
            $media->type = $file_details['type'];
            $media->filename = $file_details['filename'];
            $media->save();
        }
        return redirect()->route('cms.exhibition.media.index', $id)->with(['alert-type' => 'success', 'message' => 'Gallery Image Added Successfully']);
    }

    public function editMedia($exhibition_id, $media_id)
    {
        $exhibition = Exhibition::findOrFail($exhibition_id);
        $medias = $exhibition->medias()->findOrFail($media_id);
        // dd($medias);
        return view('backend.exhibition_section.edit', compact('exhibition', 'medias'));
    }

    public function updateMedia(Request $request, $exhibition_id, $media_id)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg|max:1024',
        ]);
        $exhibition = Exhibition::findOrFail($exhibition_id);
        $media = $exhibition->medias()->findOrFail($media_id);
        $file = $request->file('image');
        if ($file) {
            if ($media->filename) {
                Storage::disk('public')->delete('images/medias/' . $media->filename);
            }
            $file_details = uploadFile($file, 'images/medias', null, null, 85);
            $media->type = $file_details['type'];
            $media->filename = $file_details['filename'];
            $media->save();
        }


        return redirect()->route('cms.exhibition.media.index', $exhibition_id)->with(['alert-type' => 'success', 'message' => 'Gallery Updated Successfully']);
    }

    public function deleteMedia($exhibition_id, $media_id)
    {
        $exhibition = Exhibition::findOrFail($exhibition_id);
        $media = $exhibition->medias()->findOrFail($media_id);
        if ($media->filename) {
            Storage::disk('public')->delete('images/medias/' . $media->filename);
        }
        if ($media->delete()) {
            return redirect()->route('cms.exhibition.media.index', $exhibition_id)->with(['alert-type' => 'success', 'message' => 'Gallery Image Deleted Successfully']);
        }
        return redirect()->back()->with(['alert-type' => 'error', 'message' => 'Something Went Wrong']);
    }
}
