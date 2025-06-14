<?php

namespace App\Http\Controllers\cms;

use App\Models\Data;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DataController extends Controller
{
    public function index()
    {
        $datas = Data::latest()->paginate(10);
        $dataCount = Data::count();
        return view('backend.data.index', compact('datas', 'dataCount'));
    }

    public function create()
    {
        $dataCount = Data::count();
        if ($dataCount) {
            return redirect()->back()->with(['message' => 'Something Went Wrong', 'alert-type' => 'info']);
        }
        return view('backend.data.create');
    }

    public function store(Request $request)
    {
        $dataCount = Data::count();
        if ($dataCount) {
            return redirect()->back()->with(['message' => 'Something Went Wrong', 'alert-type' => 'info']);
        }
        $request->validate([
            'filename' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);
        $fileWithExtension = $request->file('filename');
        // dd($fileWithExtension);
        if ($fileWithExtension) {
            $fileWithExtension = $request->file('filename');
            $filename =  date('Ymd-his') . "." . uniqid() . "." . $fileWithExtension->clientExtension();
            Storage::disk('public')->put('data/' . $filename,  file_get_contents($fileWithExtension));
        }
        $data = new Data;
        $data->name = 'Technical Data';
        $data->visibility = 1;
        $data->filename = $filename;
        if ($data->save()) {
            return redirect()->route('cms.data.index')->with(["message" => "Data Created", "alert-type" => "success"]);
        } else {
            return redirect()->back()->with(["message" => "Something went wrong", "alert-type" => "error"]);
        }
    }

    public function edit(Request $request, $id)
    {

        $data = Data::findOrFail($id);
        return view('backend.data.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'filename' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);
        $data = Data::findOrFail($id);
        // $data->title = $request->title;
        if ($request->has('filename')) {
            $destinationPath = 'data';
            if ($data->filename) {
                Storage::disk('public')->delete($destinationPath . '/' . $data->filename);
            }
            $fileWithExtension = $request->file('filename');
            $filename =  date('Ymd-his') . "." . uniqid() . "." . $fileWithExtension->clientExtension();
            Storage::disk('public')->put($destinationPath . '/' . $filename,  file_get_contents($fileWithExtension));
            $data->filename = $filename;
        }
        if ($data->save()) {
            return redirect()->route('cms.data.index')->with(
                [
                    "message" => "Data Updated",
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
        $data = Data::findOrFail($id);
        if ($data->delete() && Storage::disk('public')->delete('data/' . $data->filename)) {
            return redirect()->route('cms.data.index')->with(['alert-type' => 'success', 'message' => 'Data Deleted Successfully']);
        }
        return redirect()->back()->with(['alert-type' => 'error', 'message' => 'Something Went Wrong']);
    }
}
