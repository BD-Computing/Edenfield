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


    public function restaurant()
    {
        return view('pages.restaurant', compact('menus'));
    }

    public function rooms()
    {

        return view('pages.rooms.rooms');
    }

    public function availability($id)
    {

        return view('pages.rooms.booking', compact('id'));
    }


    public function room_details($id)
    {
        return view('pages.rooms.room-details', compact('id'));
    }

    public function facilities()
    {
        return view('pages.facilities');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function team()
    {
        return view('pages.team');
    }

    public function pricing()
    {
        return view('pages.pricing');
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
    public function faq()
    {
        return view('pages.faq');
    }

    public function contact()
    {
        return view('pages.contact');
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

    public function news()
    {
        return view('pages.news');
    }

    public function post()
    {
        return view('pages.post');
    }
}
