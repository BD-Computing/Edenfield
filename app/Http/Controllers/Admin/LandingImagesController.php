<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandingImage;
use Illuminate\Support\Facades\Storage;

class LandingImagesController extends Controller
{
    public static function index()
    {
        $images = LandingImage::findAll();
        return view('admin.landing-images.index', compact('images'));
    }
    public static function create()
    {
        return view('admin.landing-images.new-image');
    }

    public static function upload(Request $request)
    {
        $image = new LandingImage;
        $image->title = $request->input('title');
        $image->description = $request->input('description');
        $request->validate([
            'image' => 'nullable|mimes:jpeg,png,jpg,webp|max:64014'
        ]);
        if ($request->hasfile('image')  && $request->file('image')->isValid()) {
            $extension = $request->image->extension();
            $request->image->storeAs('/public/landing-images/', date("dmYhis") . "." . $extension);
            $imageLink = Storage::url("landing-images/" . date("dmYhis") . "." . $extension);

            $image->imageLink = $imageLink;
        }

        $image->save();
        $message = 'The landing image has been uploaded successfully';
        notify()->success($message, 'Success');
        return redirect()->route('admin.landing-images.index')->with('message', 'Landing Image Upload Successfully');
    }
    public static function show($id)
    {
        $image = LandingImage::findById($id);
        return view('admin.landing-images.show', compact('image'));
    }
    public static function delete($id)
    {
        LandingImage::where('id', $id)->delete();
        return redirect()->route('admin.landing-images.index');
    }
}
