<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobsController extends Controller
{
    public static function index()
    {
        $jobs = Career::findAll();
        return view('admin.careers.index', compact('jobs'));
    }
    public static function create()
    {
        return view('admin.careers.new-job');
    }

    public static function upload(Request $request)
    {
        $career = new Career;
        $career->title = $request->input('title');
        $career->description = $request->input('description');
        $career->jobType = $request->input('jobType');
        $career->period = $request->input('period');
        $career->location = $request->input('location');
        $career->positions = $request->input('positions');
        $career->deadline = $request->input('deadline');
        $career->responsibilities = $request->input('responsibilities');
        $request->validate([
            'career' => 'required'
        ]);
        if ($request->hasfile('career')  && $request->file('career')->isValid()) {
            $extension = $request->career->extension();
            $request->career->storeAs('/public/careers/', date("dmYhis") . "." . $extension);
            $careerLink = Storage::url("careers/" . date("dmYhis") . "." . $extension);
            $career->file = $careerLink;
        }

        $career->save();
        $message = 'The careers has been uploaded successfully';
        notify()->success($message, 'Success');
        return redirect()->route('admin.careers.show', ['id' => $career->id])->with('message', 'Careers Upload Successfully');
    }
    public static function show($id)
    {
        $career = Career::findById($id);
        return view('admin.careers.show', compact('career'));
    }

    public static function delete($id)
    {
        Career::where('id', $id)->delete();
        return redirect()->route('admin.careers.index');
    }
}
