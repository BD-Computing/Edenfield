<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Career;

class WebController extends Controller
{
    public function index()
    {
        return view('pages.homepage');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function careers()
    {
        $careers = Career::findAll();
        return view('pages.careers', compact('careers'));
    }

    public function career($id)
    {
        $career = Career::findById($id);
        return view('pages.career', compact('career'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
    public function privacy()
    {
        return view('legal.privacy');
    }
    public function cookie()
    {
        return view('legal.cookie');
    }
    // others
    public function errorpage()
    {
        return view('pages.errorpage');
    }
    public function comingsoon()
    {
        return view('pages.comingsoon');
    }
}
